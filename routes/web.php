<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.index');
});

Route::get('/dashboard', function () {
    return view('products.dashboard');
});
