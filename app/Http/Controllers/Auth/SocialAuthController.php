<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SocialAuthController extends Controller
{

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => Hash::make(Str::random(10)),
                'email_verified_at' => now(),
            ]);
        } else {
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

        $user = User::where('email', $appleUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $appleUser->getName() ?: 'Apple User',
                'email' => $appleUser->getEmail(),
                'apple_id' => $appleUser->getId(),
                'password' => Hash::make(Str::random(32)),
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
