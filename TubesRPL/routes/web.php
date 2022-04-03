<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login/student', [loginController::class, 'loginStudent']);

Route::get('/login/mentor', [loginController::class, 'loginMentor']);

Route::get('/mentor/index', [UserController::class, 'indexMentor']);
Route::get('/student/index', [UserController::class, 'index']);

Route::post('/login', [loginController::class, 'authenticate']);
