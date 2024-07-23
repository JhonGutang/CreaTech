<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller{
    

    public function registerUser(Request $request)
    {
        sleep(1);

        $fields = $request->validate([
            "username" => ["required", "max:255"],
            "fullname" => ["required", "max:255"],
            "email" => ["required", "email", "max:255", 'unique:users'],
            "password" => ["required", "confirmed"],

        ]);
        

        $user = User::create($fields);

        Auth::login($user);
      
    }


    public function loginUser(Request $request)
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


    public function logoutUser(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}

?>