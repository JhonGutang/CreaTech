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


    public function updateUser(Request $request, User $user)
    {
        // validate 
        $fields = $request->validate([
            "username" => ["required", "max:255"],
            "fullname" => ["required", "max:255"],
            "email" => ["required", "email", "max:255"],

        ]);
        $user -> update($fields);
        return Redirect::route('dashboard');
    }



    public function deleteUser(User $user)
    {
        $user->delete();
    }

}
