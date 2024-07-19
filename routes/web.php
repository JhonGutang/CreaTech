<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\User;








route::middleware('auth')->group(function(){

    Route::inertia('/dashboard', 'Dashboard', ['users' => User::paginate(5)])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
});

route::middleware('guest')->group(function (){

    Route::inertia('/', 'Home')->name('home');

    Route::inertia('/login', 'Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::inertia('/register', 'Register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
});

