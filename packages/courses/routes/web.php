<?php

use App\Http\Controllers\Courses_detailController;
use App\Http\Controllers\CoursesController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckValidRoute;
use Illuminate\Support\Facades\Route;


Route::middleware(['web', CheckLogin::class])->group(function () {
    Route::resource('Courses', CoursesController::class);
    Route::resource('Courses-detail', Courses_detailController::class);
});
