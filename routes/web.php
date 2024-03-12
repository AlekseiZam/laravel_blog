<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/blog')->group(function () {

    Route::get('/', function () {
        return view('terms');
    })->name('index');

    Route::get('/login', function () {
        return view('blog.login');
    })->name('login');

    Route::get('/register', function () {
        return view('blog.register');
    })->name('register');

    Route::get('/profile', function () {
        return view('blog.profile');
    })->name('profile');

});
