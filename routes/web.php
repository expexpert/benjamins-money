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

    Route::get('/real-time-liquidity', function () {
        return view('dashboard.real-time-liquidity');
    });

    Route::get('/real-time-liquidity-adj-org-scenario', function () {
        return view('dashboard.real-time-liquidity-adj-scenario-org-scenario');
    });

    Route::get('/scenario-planning', function () {
        return view('dashboard.scenario-planning');
    });
    
    Route::get('/entity-asset-protection-map', function () {
        return view('dashboard.entity-asset-protection-map');
    });
     
    Route::get('/liquidity-workflow', function () {
        return view('dashboard.liquidity-workflow');
    });

    Route::get('/account-verified', function () {
        return view('auth.account-verified');
    });

    Route::get('/setup', [SetupController::class, 'setup'])->name('setup');

    Route::post('/setup/extract', [SetupController::class, 'extract']);
});
