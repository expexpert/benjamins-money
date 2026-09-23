<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyEmailOtp;
use App\Services\EMoneyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    protected EMoneyService $eMoneyService;

    public function __construct(EMoneyService $eMoneyService)
    {
        $this->eMoneyService = $eMoneyService;
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Password::min(8)->symbols()],
            'terms' => ['required', 'accepted'],
        ]);

        try {
            // Check for existing user including soft-deleted users
            $user = User::withTrashed()
                ->where('email', $validated['email'])
                ->first();

            // 1. Account exists but was soft deleted
            if ($user && $user->trashed()) {
                return back()->withErrors([
                    'email' => 'Your account has been deleted or deactivated. Please contact support.'
                ])->withInput();
            }

            // 2. Account exists and email is already verified
            if ($user && $user->hasVerifiedEmail()) {
                return back()->withErrors([
                    'email' => 'This email is already registered and verified. Please login using your password or social account.'
                ])->withInput();
            }

            // 3. Account exists but email is NOT verified (uncompleted previous registration)
            if ($user) {
                $user->update([
                    'name' => $validated['name'],
                    'password' => $validated['password'],
                ]);
            } else {
                // 4. New user registration
                $user = User::create([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => $validated['password'],
                    'role' => User::ROLE_USER,
                ]);
            }

            // --- Integrated eMoney Client Creation ---
            if (empty($user->emoney_client_id)) {
                try {
                    // Split full name into First & Last Name for eMoney API payload
                    $nameParts = explode(' ', trim($validated['name']), 2);
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
                    // Log error so local user creation succeeds even if eMoney fails
                    Log::error('eMoney client creation failed during registration.', [
                        'user_id' => $user->id,
                        'error' => $eMoneyException->getMessage()
                    ]);
                }
            }

            Auth::login($user);
            $request->session()->regenerate();

            $otp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            Cache::put('email_verification_otp_' . $user->id, $otp, now()->addMinutes(15));
            $user->notify(new VerifyEmailOtp($otp));
        } catch (\Throwable $exception) {
            Log::error('Registration failed unexpectedly.', ['exception' => $exception]);

            return back()->withInput()->withErrors(['error' => 'Unable to complete registration right now. Please try again.']);
        }

        return redirect()->route('verification.notice')
            ->with('status', 'A 6-digit verification code has been sent to your email address.');
    }
}