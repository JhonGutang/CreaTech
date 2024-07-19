<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\User;






Route::inertia('/dashboard', 'Dashboard', ['users' => User::paginate(5)])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


route::middleware('auth')->group(function(){

    
});

// Home
Route::inertia('/', 'Home')->name('home');


// Login
Route::inertia('/login', 'Login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::inertia('/register', 'Register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard
Route::delete('/dashboard/{user}', [AuthController::class, 'deleteUser']);

// testing route
Route::get('/dashboard/{id}/edit', [AuthController::class, 'editUser']);

route::middleware('guest')->group(function (){

    
});

