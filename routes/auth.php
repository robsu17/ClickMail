<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/user', [AuthController::class, 'authenticate'])->name('login.store');
    Route::get('/register', [AuthController::class, 'register'])->name('register.index');
    Route::post('/register/user', [AuthController::class, 'store'])->name('register.store');
});
