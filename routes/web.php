<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/campaigns');

Route::middleware('auth')->group(function () {
    Route::resource('/campaigns', CampaignController::class);

    Route::resource('/profile', ProfileController::class);
});

require __DIR__.'/auth.php';
