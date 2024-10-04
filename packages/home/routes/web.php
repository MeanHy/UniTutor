<?php

use App\Http\Middleware\CheckLogin;
use Huyle\Home\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', CheckLogin::class])->group(function () {
    Route::resource('user', HomeController::class);
});

