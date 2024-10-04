<?php

use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckValidRoute;
use Huyle\Bookings\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', CheckLogin::class])->group(function () {
    Route::resource('booking', BookingController::class);
});
