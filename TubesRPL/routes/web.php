<?php

use Illuminate\Support\Facades\Route;



Route::get('/login/student', function () {
    return view('Login.student', [
        'title' => 'Login | Student'
    ]);
});

Route::get('/login/mentor', function () {
    return view('Login.mentor', [
        'title' => 'Login | Mentor'
    ]);
});
