<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all());
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'confirm_passowrd' => 'required|same:password',
            'termsAndConditions' => 'required'
        ]);
    }
}
