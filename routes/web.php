<?php

use Illuminate\Support\Facades\Route;

Route::get('/phome', function () {
    return view('phome');
});

Route::get('/pnewarrival', function () {
    return view('pnewarrival');
});

Route::get('/ponsale', function () {
    return view('ponsale');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/chat-ai', function () {
    return view('chatai');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/login-signup', function () {
    return view('login-signup');
})->name('login-signup');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister']);

// Show login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Show signup page
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Show profile page (only if logged in)
Route::get('/profile', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    return view('profile');
})->name('profile');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');