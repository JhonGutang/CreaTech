<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\User;





route::middleware('auth')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::inertia('/dashboard', 'Dashboard', ['users' => User::paginate(7)])->name('dashboard');
    Route::delete('/dashboard/{user}', [AuthController::class, 'deleteUser']);
    
    
    Route::put('/dashboard/{user}', [AuthController::class, 'updateUser']);
    Route::get('/dashboard/{user}/edit', [AuthController::class, 'editUser']);
});




route::middleware('guest')->group(function (){
    // Home
    Route::inertia('/', 'Home')->name('home');
    
    
    // Login
    Route::inertia('/login', 'Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    
    // Register
    Route::post('/register', [AuthController::class, 'register']);
    Route::inertia('/register', 'Register')->name('register');
    
});    



