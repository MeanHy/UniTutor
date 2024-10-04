<?php

use App\Http\Middleware\CheckLogin;
use Huyle\User\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', CheckLogin::class])->group(function () {
    Route::resource('user', UserController::class);
});
Route::get('/', [UserController::class, 'login']);
