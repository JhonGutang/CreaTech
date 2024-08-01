<?php

namespace App\Services;
use App\Contracts\ModifyInformation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;


class UserInfoModification implements ModifyInformation
{
    public function editUser(User $user)
    {
        return Inertia::render('Edit', ['user' => $user]);
    }


    public function updateUser(array $data, User $user)
    {
        $user -> update($data);
    }



    public function deleteUser(User $user)
    {
        $user->delete();
    }

}
