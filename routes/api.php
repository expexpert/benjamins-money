<?php

use App\Http\Controllers\Api\EMoneyController;
use App\Http\Controllers\Api\TokenController;
use Illuminate\Support\Facades\Route;


Route::get('test-api', function () {
    return response()->json(['status' => 'API working']);
});

Route::post('/login', [TokenController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/emoney/me', [EMoneyController::class, 'getAuthClientDetails'])->name('emoney.me');

    Route::get('/emoney/clients/{id}', [EMoneyController::class, 'show']);
});
