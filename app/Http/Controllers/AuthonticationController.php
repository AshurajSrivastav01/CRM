<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthonticationController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('/dashboard');
        }

        $Title = 'User Login - Inventory Management';

        return view('auth.login', compact('Title'));
    }

    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'You Have Loged In Successfully!');
        }
        return back()->with('error', 'Please check your email and password and try again!');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'password_confirm' => 'required|same:password',
            'terms-agree' => 'required'
        ]);

        $user = new User();
        $user->name = $validated['firstname'] . ' ' . $validated['lastname'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->created_at = now();
        $user->updated_at = now();

        $user->save();
        echo 'User Register Succesasfully!';
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/user/login')->with('success', 'Logout Successfully, See you soon!');
    }

    public function forgetPassword(Request $request){
        
    }
}
