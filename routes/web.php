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

Route::get('/compliance', function () {
    return view('dashboard.compliance');
});

Route::get('/pending', function () {
    return view('dashboard.pending');
});

Route::get('/locked', function () {
    return view('dashboard.locked');
});

Route::get('/signup', function () {
    return view('dashboard.signup');
});

Route::get('/login', function () {
    return view('dashboard.login');
});

Route::get('/verify', function () {
    return view('dashboard.verify');
});

Route::get('/account-verified', function () {
    return view('dashboard.account-verified');
});