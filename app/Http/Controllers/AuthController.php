<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        sleep(1);
        // validate 
    $request->validate([
        "firstName" => ["required","string"],
        "lastName" => ["required","string"],
        "email" => ["required", "email", "max:255", 'unique:users'],
        "password" => ["required","confirmed"],

    ]);
        //register

        //login

        //redirect
        dd("pass");
    }
}
