<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('admin.dashbaord');
});
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/sign-in', function () {
    return view('frontend.signin');
});
Route::get('/sign-up', function () {
    return view('frontend.signup');
});
