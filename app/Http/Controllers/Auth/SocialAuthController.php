<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Find user including soft-deleted users
        $user = User::withTrashed()
            ->where('google_id', $googleUser->getId())
            ->first();

        // If Google ID isn't linked, try email
        if (!$user) {
            $user = User::withTrashed()
                ->where('email', $googleUser->getEmail())
                ->first();
        }

        // User exists but has been soft deleted
        if ($user && $user->trashed()) {
            return redirect('/login')
                ->with('error', 'Your account has been deleted or deactivated. Please contact support.');
        }

        // User doesn't exist - create new account
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => Str::random(10),
                'role' => User::ROLE_USER,
                'email_verified_at' => now(),
            ]);
        } else {
            // Existing active user
            $user->update([
                'google_id' => $googleUser->getId(),
                'email_verified_at' => $user->email_verified_at ?? now(),
            ]);
        }

        Auth::login($user, true);

        return redirect()->intended('/');
    }


    public function apple()
    {
        return Socialite::driver('apple')->redirect();
    }

    public function appleCallback()
    {
        $appleUser = Socialite::driver('apple')->user();

        // First check for the user including soft-deleted records
        $user = User::withTrashed()
            ->where('apple_id', $appleUser->getId())
            ->first();

        // If Apple ID isn't linked, try email
        if (!$user) {
            $user = User::withTrashed()
                ->where('email', $appleUser->getEmail())
                ->first();
        }

        // User exists but has been soft deleted
        if ($user && $user->trashed()) {
            return redirect('/login')
                ->with('error', 'Your account has been deleted or deactivated. Please contact support.');
        }

        // User doesn't exist - create new account
        if (!$user) {
            $user = User::create([
                'name' => $appleUser->getName() ?: 'Apple User',
                'email' => $appleUser->getEmail(),
                'apple_id' => $appleUser->getId(),
                'password' => Str::random(10),
                'role' => User::ROLE_USER,
                'email_verified_at' => now(),
            ]);
        } else {
            $updates = [];

            if (!$user->apple_id) {
                $updates['apple_id'] = $appleUser->getId();
            }

            if (!$user->email_verified_at) {
                $updates['email_verified_at'] = now();
            }

            if (!empty($updates)) {
                $user->update($updates);
            }
        }

        Auth::login($user, true);

        return redirect()->intended('/');
    }
}
