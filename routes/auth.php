<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

// Guest Routes
Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
    Route::post('/forgot-password/resend', [ForgotPasswordController::class, 'resendResetLink'])->name('password.resend');

    Route::get('/forgot-password/confirmation', function () {
        if (! session()->has('email')) {
            return redirect()->route('password.request');
        }

        session()->keep(['email']);

        return view('auth.forgot-password-confirmation');
    })->name('password.confirmation');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Email Verification
    Route::get('/verify-email', [VerificationController::class, 'show'])->name('verification.notice');
    Route::post('/verify-email', [VerificationController::class, 'verify'])->middleware('throttle:6,1')->name('verification.verify');
    Route::post('/email/resend', [VerificationController::class, 'resend'])->middleware('throttle:6,1')->name('verification.send');

    Route::post('/change-email', [VerificationController::class, 'changeEmail'])->middleware('throttle:6,1')->name('verification.change-email');
});
