<?php

namespace App\Http\Controllers;

use App\Contracts\ModifyInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{   

    protected $modificationService;

    public function __construct(ModifyInformation $modificationService)
    {
        $this->modificationService = $modificationService;
    }


    public function editUser(User $user)
    {
        return $this->modificationService->editUser($user);
    }

    public function updateUser(Request $request, User $user)
    {
        // validate 
        $fields = $request->validate([
            "username" => ["required", "max:255"],
            "fullname" => ["required", "max:255"],
            "email" => ["required", "email", "max:255"],

        ]);
        $this->modificationService->updateUser($fields, $user);
        return Redirect::route('dashboard');
    }



    public function deleteUser(User $user)
    {
        //    $user = User::findOrFail($id);
        $user->delete();
    }




}
