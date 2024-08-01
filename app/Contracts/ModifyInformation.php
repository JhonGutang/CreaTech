<?php

namespace App\Contracts;
use App\Models\User;
use Illuminate\Http\Request;


interface ModifyInformation
{
   public function editUser(User $user);
   public function updateUser(array $data, User $user);
   public function deleteUser(User $user);
   
}
