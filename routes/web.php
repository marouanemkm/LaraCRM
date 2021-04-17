<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

// === Public routes ===

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('auth.login');
});

Route::get('/dashbord', function () {
    return view('dashbord');
});

Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/login', [AuthenticationController::class, 'showLogin'])->middleware('auth')->name('showLogin');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logout'])->middleware('auth')->name('logout');
});