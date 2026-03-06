<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthonticationController extends Controller
{
    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6'
            // 'rememberMe' => 'required'
        ]);


    }

    public function register(Request $request){
        try {
            $validated = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
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
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
