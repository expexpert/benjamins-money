<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    // User Management Routes
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


    // Bank Management Routes
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



    // State Management Routes
    Route::get('/states', [AdminController::class, 'states'])->name('states');
    Route::get('/states/create', [AdminController::class, 'createState'])->name('states.create');
    Route::post('/states', [AdminController::class, 'storeState'])->name('states.store');
    Route::get('/states/{state}/edit', [AdminController::class, 'editState'])->name('states.edit');
    Route::put('/states/{state}', [AdminController::class, 'updateState'])->name('states.update');
    Route::delete('/states/{state}', [AdminController::class, 'deleteState'])->name('states.destroy');
    Route::post('/states/{state}/toggle-status', [AdminController::class, 'toggleStateStatus'])->name('states.toggle-status');
    Route::get('/states/trash', [AdminController::class, 'trashStates'])->name('states.trash');
    Route::post('/states/{id}/restore', [AdminController::class, 'restoreState'])->name('states.restore');
    Route::delete('/states/{id}/force-delete', [AdminController::class, 'forceDeleteState'])->name('states.force-delete');


    // State Tax Management Routes
    Route::get('/state-taxes', [AdminController::class, 'stateTaxes'])->name('state-taxes');
    Route::get('/state-taxes/create', [AdminController::class, 'createStateTax'])->name('state-taxes.create');
    Route::post('/state-taxes', [AdminController::class, 'storeStateTax'])->name('state-taxes.store');
    Route::get('/state-taxes/{stateTax}/edit', [AdminController::class, 'editStateTax'])->name('state-taxes.edit');
    Route::put('/state-taxes/{stateTax}', [AdminController::class, 'updateStateTax'])->name('state-taxes.update');
    Route::delete('/state-taxes/{stateTax}', [AdminController::class, 'deleteStateTax'])->name('state-taxes.destroy');
    Route::post('/state-taxes/{stateTax}/toggle-status', [AdminController::class, 'toggleStateTaxStatus'])->name('state-taxes.toggle-status');
    Route::get('/state-taxes/trash', [AdminController::class, 'trashStateTaxes'])->name('state-taxes.trash');
    Route::post('/state-taxes/{id}/restore', [AdminController::class, 'restoreStateTax'])->name('state-taxes.restore');
    Route::delete('/state-taxes/{id}/force-delete', [AdminController::class, 'forceDeleteStateTax'])->name('state-taxes.force-delete');
});
