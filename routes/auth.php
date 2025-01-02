<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'login'])->name('login.store');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/new-user', [RegisterController::class, 'register'])->name('register.store');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});
