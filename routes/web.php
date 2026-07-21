<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('dashboard.index');
});


Route::get('/scheduled', function () {
    return view('dashboard.scheduled');
});