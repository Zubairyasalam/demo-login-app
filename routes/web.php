<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('auth.home');
})->name('home');

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/account', function () {
    return view('auth.account');
})->name('account');

Route::get('/dashboard-1', function () {
    return view('auth.dashboard-1');
})->name('dashboard.1');

Route::get('/dashboard-2', function () {
    return view('auth.dashboard-2');
})->name('dashboard.2');

Route::get('/calendar', function () {
    return view('auth.calendar');
})->name('calendar');

Route::get('/learning', function () {
    return view('auth.learning');
})->name('learning');

Route::get('/learning-p2', function () {
    return view('auth.learning-p2');
})->name('learning.p2');

Route::get('/payment-method', function () {
    return view('auth.payment-method');
})->name('payment.method');

Route::get('/shopping-cart', function () {
    return view('auth.shopping-cart');
})->name('shopping.cart');

Route::get('/transaction', function () {
    return view('auth.transaction');
})->name('transaction');

Route::get('/refund', function () {
    return view('auth.refund');
})->name('refund');



Route::get('/course-detail', function () {
    return view('auth.course-detail');
})->name('course.detail');

Route::get('/change-password', function () {
    return view('auth.change-password');
})->name('password.change');



Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verification.notice');

// POST Routes for UI Flow Demo
Route::post('/login', function () {
    return redirect()->route('dashboard.1'); // Flow: Login -> Dashboard
})->name('login.post');


Route::post('/forgot-password', function () {
    return redirect()->route('verification.notice'); // Flow: Forgot -> Verify
})->name('password.email');

Route::post('/verify', function () {
    return redirect()->route('password.reset'); // Flow: Verify -> Reset Password
})->name('verification.verify');

Route::post('/reset-password', function () {
    return redirect()->route('login'); // Flow: Reset -> Login
})->name('password.update');

Route::post('/register', function () {
    return redirect()->route('login'); // Flow: Register -> Login
})->name('register.post');

Route::get('/category', function () {
    return view('auth.category');
})->name('category');
