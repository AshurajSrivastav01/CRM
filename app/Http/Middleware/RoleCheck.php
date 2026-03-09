<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $role = Auth::user()->employee->role->name;
        // echo $role;
        // dd($roles);
        if(!in_array($role, $roles)){
            Auth::logout();
            abort(403, 'Unauthorized access!');
        }
        return $next($request);
    }
}
