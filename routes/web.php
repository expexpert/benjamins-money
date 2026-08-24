<?php

use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });

    Route::get('/scheduled', function () {
        return view('dashboard.scheduled');
    });

    Route::get('/compliance', function () {
        return view('dashboard.compliance');
    });

    Route::get('/pending', function () {
        return view('dashboard.pending');
    });

    Route::get('/locked', function () {
        return view('dashboard.locked');
    });

    Route::get('/networth', function () {
        return view('dashboard.networth');
    });

    Route::get('/cash-reserves', function () {
        return view('dashboard.cash-reserves');
    });

    Route::get('/account-verified', function () {
        return view('auth.account-verified');
    });


    Route::get('/setup', [SetupController::class, 'setup'])->name('setup');
    
    Route::post('/setup/extract', [SetupController::class, 'extract']);

});