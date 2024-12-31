<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard.index');
    })->name('dashboard.index');
});

require __DIR__.'/auth.php';
