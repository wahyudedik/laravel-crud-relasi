<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/profiles', ProfileController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/posts', PostController::class);
Route::resource('/users', UserController::class);
