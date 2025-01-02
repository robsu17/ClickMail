<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/campaigns');

Route::middleware('auth')->group(function () {
    Route::resource('/campaigns', CampaignController::class);
});

require __DIR__.'/auth.php';
