<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Display login page.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login request.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        try {
            $remember = $request->boolean('remember');

            if (! Auth::attempt($credentials, $remember)) {
                return back()
                    ->withErrors([
                        'email' => 'Invalid email or password.',
                    ])
                    ->onlyInput('email');
            }

            $request->session()->regenerate();
        } catch (\Throwable $exception) {
            Log::error('Login failed unexpectedly.', ['exception' => $exception]);

            return back()->withInput()->withErrors(['email' => 'Unable to log in right now. Please try again.']);
        }

        return redirect()->intended('/');
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
