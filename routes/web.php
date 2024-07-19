<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return Inertia::render("Home");
})->name("home");


Route::inertia('/login', 'Login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::inertia('/register', 'Register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::inertia('/dashboard', 'Dashboard')->name('dashboard');

