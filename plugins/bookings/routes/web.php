<?php

use Huyle\Bookings\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::resource('booking', BookingController::class);
