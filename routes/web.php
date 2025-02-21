<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view ('home');
});

Route::get('/newarrival', function () {
    return view ('newarrival');
});

Route::get('/onsale', function () {
    return view('onsale');
});