<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Here we rae check the role of the new user and then we will redirect to the dashboard according to the role
        // if user role is not defined then we will redirect to the login page with error message and logout the user

        //  $user = auth()->user();
        //  $role = Role::find($user->role_id);
        //  if($role->name == 'Admin'){
        //     return redirect('/admin/dashboard');
        //  }elseif($role->name == 'Employee'){
        //     return redirect('/employee/dashboard');
        //  }elseif($role->name == 'HR'){
        //     return redirect('/hr/dashboard');
        //  }else{
        //     return redirect('/user/login')->with('error', 'Invalid role!');
        //  }
        return $next($request);
    }
}
