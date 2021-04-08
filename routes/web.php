<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(function () {
    Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

    Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
});
