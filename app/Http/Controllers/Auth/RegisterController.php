<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyEmailOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display registration page.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Register new user.
     */
    public function register(Request $request)
    {        
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Password::min(8)->symbols()],
            'terms' => ['required', 'accepted'],
        ]);

        // 2. Check if user already exists
        $existingUser = User::where('email', $validated['email'])->first();

        if ($existingUser) {
            // If the user is ALREADY verified, reject registration
            if ($existingUser->hasVerifiedEmail()) { // or check $existingUser->email_verified_at !== null
                return back()->withErrors([
                    'email' => 'This email address is already registered.'
                ])->withInput();
            }

            // If user is UNVERIFIED, update account details with the new registration attempt
            $user = $existingUser;
            $user->update([
                'name' => $validated['name'],
                'password' => Hash::make($validated['password']),
            ]);
        } else {
            // Create fresh user if email doesn't exist
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
        }

        Auth::login($user);
        $request->session()->regenerate();

        // Send new OTP
        $otp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Cache::put('email_verification_otp_' . $user->id, $otp, now()->addMinutes(15));
        $user->notify(new VerifyEmailOtp($otp));

        return redirect()->route('verification.notice')
            ->with('status', 'A 6-digit verification code has been sent to your email address.');
    }
}
