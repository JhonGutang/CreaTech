<?php

namespace App\Contracts;
use Illuminate\Http\Request;


interface RegistrationAndAuthentication{
    public function registerUser(Request $request);
    public function loginUser(Request $request);
    public function logoutUser(Request $request);
}