<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('admin.dashbaord');
});
Route::get('/', function () {
    return view('frontend.home');
});
