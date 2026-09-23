<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\VerifyEmailOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class VerificationController extends Controller
{
    public function show(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/account-verified');
        }

        return view('auth.verify', [
            'email' => $request->user()->email,
        ]);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'otp' => ['required', 'string', 'digits:6'],
        ]);

        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect('/account-verified');
        }

        $storedOtp = Cache::get('email_verification_otp_' . $user->id);

        if (!$storedOtp || $storedOtp !== $request->input('otp')) {
            return back()->withErrors([
                'otp' => 'The verification code is invalid or has expired.',
            ])->withInput();
        }

        try {
            $user->markEmailAsVerified();
            Cache::forget('email_verification_otp_' . $user->id);
        } catch (\Throwable $exception) {
            Log::error('Email verification failed.', ['user_id' => $user->id, 'exception' => $exception]);

            return back()->withErrors(['otp' => 'Unable to verify your email right now. Please try again.']);
        }

        return redirect('/account-verified')
            ->with('success', 'Your email address has been verified successfully.');
    }

    public function resend(Request $request)
    {
        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect('/account-verified');
        }

        try {
            $otp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            Cache::put('email_verification_otp_' . $user->id, $otp, now()->addMinutes(15));
            $user->notify(new VerifyEmailOtp($otp));
        } catch (\Throwable $exception) {
            Log::error('Verification code resend failed.', ['user_id' => $user->id, 'exception' => $exception]);

            return back()->withErrors(['error' => 'Unable to send a verification code right now. Please try again.']);
        }

        return back()->with('status', 'A new verification code has been sent to your email address.');
    }

    public function changeEmail(Request $request)
    {
        $user = Auth::user();

        try {
            // Clear the OTP cache
            if ($user) {
                Cache::forget('email_verification_otp_' . $user->id);

                if (!$user->hasVerifiedEmail()) {
                    $user->delete();
                }
            }

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } catch (\Throwable $exception) {
            Log::error('Changing registration email failed.', ['user_id' => $user?->id, 'exception' => $exception]);

            return back()->withErrors(['error' => 'Unable to change the email right now. Please try again.']);
        }

        return redirect()->route('register')
            ->with('status', 'You can now enter the correct registration details.');
    }
}
