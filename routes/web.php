<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return Inertia::render("Home");
})->name("home");

Route::inertia('/auth', 'Auth')->name('auth');


Route::post('/auth', [AuthController::class, 'register']);