<?php

namespace App\Contracts;
use App\Models\User;
use Illuminate\Http\Request;


interface ModifyInformation
{
   public function editUser(User $user);
   public function updateUser(Request $request, User $user);
   public function deleteUser(User $user);
   
}

interface RegistrationAndAuthentication{
    public function registerUser(Request $request);
    public function loginUser(Request $request);
    public function logoutUser(Request $request);
}