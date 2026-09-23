<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;

class ForgotPasswordController extends Controller
{
    /**
     * Display the password reset link request form.
     */
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     */
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        try {
            $status = Password::sendResetLink(
                $request->only('email')
            );
        } catch (\Throwable $exception) {
            Log::error('Password reset link request failed.', ['exception' => $exception]);

            return back()->withInput()->withErrors(['email' => 'Unable to send a password reset link right now.']);
        }

        if ($status === Password::RESET_LINK_SENT) {
            return redirect()->route('password.confirmation')->with('email', $request->email);
        }

        return back()->withErrors(['email' => __($status)]);
    }

    public function resendResetLink(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        try {
            $status = Password::sendResetLink(
                $request->only('email')
            );
        } catch (\Throwable $exception) {
            Log::error('Password reset link resend failed.', ['exception' => $exception]);

            return back()->withInput()->withErrors(['email' => 'Unable to send a password reset link right now.']);
        }

        if ($status === Password::RESET_LINK_SENT) {
            return back()
                ->with('email', $request->email)
                ->with('status', 'A new password reset link has been sent to your email.');
        }

        return back()
            ->with('email', $request->email)
            ->withErrors(['email' => __($status)]);
    }
}
