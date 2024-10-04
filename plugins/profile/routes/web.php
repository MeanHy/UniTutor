<?php

use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckValidRoute;
use Huyle\Profile\Controllers\InstructorController;
use Huyle\Profile\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', CheckLogin::class])->group(function () {
    Route::resource('student', StudentController::class);
    Route::resource('instructor', InstructorController::class);
});
