<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('users.destroy');
    Route::post('/users/{user}/toggle-verification', [AdminController::class, 'toggleVerification'])->name('users.toggle-verification');
    Route::get('/users/trash', [AdminController::class, 'trashUsers'])->name('users.trash');
    Route::post('/users/{id}/restore', [AdminController::class, 'restoreUser'])->name('users.restore');
    Route::delete('/users/{id}/force-delete', [AdminController::class, 'forceDeleteUser'])->name('users.force-delete');

    Route::get('/banks', [AdminController::class, 'banks'])->name('banks');
    Route::get('/banks/create', [AdminController::class, 'createBank'])->name('banks.create');
    Route::post('/banks', [AdminController::class, 'storeBank'])->name('banks.store');
    Route::get('/banks/{bank}/edit', [AdminController::class, 'editBank'])->name('banks.edit');
    Route::put('/banks/{bank}', [AdminController::class, 'updateBank'])->name('banks.update');
    Route::delete('/banks/{bank}', [AdminController::class, 'deleteBank'])->name('banks.destroy');
    Route::post('/banks/{bank}/toggle-status', [AdminController::class, 'toggleBankStatus'])->name('banks.toggle-status');
    Route::get('/banks/trash', [AdminController::class, 'trashBanks'])->name('banks.trash');
    Route::post('/banks/{id}/restore', [AdminController::class, 'restoreBank'])->name('banks.restore');
    Route::delete('/banks/{id}/force-delete', [AdminController::class, 'forceDeleteBank'])->name('banks.force-delete');
});
