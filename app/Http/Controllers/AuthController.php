<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{





    public function register(Request $request)
    {
        sleep(1);
        // validate 
        $fields = $request->validate([
            "userName" => ["required", "max:255"],
            "fullName" => ["required", "max:255"],
            "email" => ["required", "email", "max:255", 'unique:users'],
            "password" => ["required", "confirmed"],

        ]);
        
        //register
        $user = User::create($fields);
        //login
        Auth::login($user);
        //redirect
        return redirect()->route('login');
    }





    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($fields)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }






    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

<<<<<<< HEAD
public function editUser($id){
    return $id;
}
=======

    public function editUser(User $user)
    {
        return Inertia::render('Edit', ['user' => $user]);
    }


    public function updateUser(Request $request, User $user)
    {
        // validate 
        $fields = $request->validate([
            "userName" => ["required", "max:255"],
            "fullName" => ["required", "max:255"],
            "email" => ["required", "email", "max:255"],

        ]);
        $user -> update($fields);
        return Redirect::route('dashboard');
    }

>>>>>>> 5deed8ec4c0fcab9209252ce0f342b00f5bfb46d


    public function deleteUser(User $user)
    {
        //    $user = User::findOrFail($id);
        $user->delete();
        return Redirect::route('dashboard');
    }




}
