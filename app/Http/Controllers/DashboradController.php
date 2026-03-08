<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboradController extends Controller
{
    public function index(){
        $Title = 'Dashboard - Inventory Management';
        return view('backend.dashboard', compact('Title'));
    }
}
