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

    Route::get('/networth-assets', function () {
        return view('dashboard.networth-assets');
    });

    Route::get('/networth-liabilitites', function () {
        return view('dashboard.networth-liabilitites');
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

    Route::get('/asset-allocation', function () {
        return view('dashboard.asset-allocation');
    });

    Route::get('/liquidity-workflow', function () {
        return view('dashboard.liquidity-workflow');
    });

    Route::get('/diversification-velocity-control', function () {
        return view('dashboard.diversification-velocity-control');
    });

    Route::get('/sma-asset-allocation', function () {
        return view('dashboard.sma-asset-allocation');
    });

    Route::get('/employment-agreement-terms', function () {
        return view('dashboard.employment-agreement-terms');
    });

    Route::get('/agreement-pdf-viewer', function () {
        return view('dashboard.agreement-pdf-viewer');
    });

    Route::get('/wealth-goals', function () {
        return view('dashboard.wealth-goals');
    });

    Route::get('/trade-compliance-audit', function () {
        return view('dashboard.trade-compliance-audit');
    });

    Route::get('/concentration-cap', function () {
        return view('dashboard.concentration-cap');
    });

    Route::get('/risk-&-protection', function () {
        return view('dashboard.risk-&-protection');
    });

    Route::get('/estate-&-legacy', function () {
        return view('dashboard.estate-&-legacy');
    });

    Route::get('/estate-&-legacy-trust-inventory', function () {
        return view('dashboard.estate-&-legacy-trust-inventory');
    });

    Route::get('/actionable-advisory-task-board', function () {
        return view('dashboard.actionable-advisory-task-board');
    });
    
    Route::get('/residency-audit-shield', function () {
        return view('dashboard.residency-audit-shield');
    });
    
    Route::get('/gift-tax-ledger', function () {
        return view('dashboard.gift-tax-ledger');
    });
    
    Route::get('/account-verified', function () {
        return view('auth.account-verified');
    });

    Route::get('/setup', [SetupController::class, 'setup'])->name('setup');

    Route::post('/setup/extract', [SetupController::class, 'extract']);
});
