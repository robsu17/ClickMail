<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
   Route::get('/login', [AuthController::class, 'login'])->name('login');
   Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [AuthController::class, 'register'])->name('register.index');
    Route::post('/store/user', [AuthController::class, 'store'])->name('register.store');
});
