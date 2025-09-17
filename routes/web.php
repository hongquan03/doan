<?php

use App\Http\Controllers\Clinets\AthuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('clients.pages.about');
});

Route::get('/service', function () {
    return view('clients.pages.service');
});

Route::get('/team', function () {
    return view('clients.pages.team');
});

Route::get('/faq', function () {
    return view('clients.pages.faq');
});

Route::get('/register', [AthuController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AthuController::class, 'register'])->name('post-register');

Route::get('/activate/{token}', [AthuController::class, 'activate'])->name('activate');

Route::get('/login', [AthuController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AthuController::class, 'login'])->name('post-login');

Route::get('/logout', [AthuController::class, 'logout'])->name('logout');
