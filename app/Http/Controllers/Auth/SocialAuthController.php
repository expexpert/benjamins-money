<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\EMoneyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    protected EMoneyService $eMoneyService;

    public function __construct(EMoneyService $eMoneyService)
    {
        $this->eMoneyService = $eMoneyService;
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try {
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
                    'name' => $googleUser->getName() ?: 'Google User',
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

            // Ensure eMoney client is created/linked
            $this->ensureEMoneyClientExists($user);

            Auth::login($user, true);
        } catch (\Throwable $exception) {
            Log::error('Google authentication failed.', ['exception' => $exception]);

            return redirect('/login')->with('error', 'Unable to sign in with Google right now. Please try again.');
        }

        return redirect()->intended('/');
    }


    public function apple()
    {
        return Socialite::driver('apple')->redirect();
    }

    public function appleCallback()
    {
        try {
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

            // Ensure eMoney client is created/linked
            $this->ensureEMoneyClientExists($user);

            Auth::login($user, true);
        } catch (\Throwable $exception) {
            Log::error('Apple authentication failed.', ['exception' => $exception]);

            return redirect('/login')->with('error', 'Unable to sign in with Apple right now. Please try again.');
        }

        return redirect()->intended('/');
    }

    /**
     * Helper to create or link an eMoney client for social login users.
     */
    private function ensureEMoneyClientExists(User $user): void
    {
        if (!empty($user->emoney_client_id)) {
            return;
        }

        try {
            // Split full name into First & Last Name
            $nameParts = explode(' ', trim($user->name), 2);
            $firstName = $nameParts[0];
            $lastName = $nameParts[1] ?? 'User';

            $eMoneyPayload = [
                'client' => [
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'email' => $user->email,
                ],
            ];

            $eMoneyClient = $this->eMoneyService->createClient($eMoneyPayload);

            if (isset($eMoneyClient['id'])) {
                $user->update(['emoney_client_id' => $eMoneyClient['id']]);
            }
        } catch (\Throwable $eMoneyException) {
            // Catch and log error so social auth succeeds even if eMoney API is temporarily down
            Log::error('eMoney client creation failed during social authentication.', [
                'user_id' => $user->id,
                'error' => $eMoneyException->getMessage(),
            ]);
        }
    }
}
