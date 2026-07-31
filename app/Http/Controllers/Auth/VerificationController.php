<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\VerifyEmailOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

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

        $user->markEmailAsVerified();

        Cache::forget('email_verification_otp_' . $user->id);

        return redirect('/account-verified')
            ->with('success', 'Your email address has been verified successfully.');
    }

    public function resend(Request $request)
    {
        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect('/account-verified');
        }

        $otp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Cache::put('email_verification_otp_' . $user->id, $otp, now()->addMinutes(15));

        $user->notify(new VerifyEmailOtp($otp));

        return back()->with('status', 'A new verification code has been sent to your email address.');
    }

    public function changeEmail(Request $request)
    {
        $user = Auth::user();

        // Clear the OTP cache
        if ($user) {
            Cache::forget('email_verification_otp_' . $user->id);

            // Optional: Delete the unverified row so it doesn't leave a ghost account
            if (!$user->hasVerifiedEmail()) {
                $user->delete();
            }
        }

        // Log the user out and invalidate the session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('register')
            ->with('status', 'You can now enter the correct registration details.');
    }
}
