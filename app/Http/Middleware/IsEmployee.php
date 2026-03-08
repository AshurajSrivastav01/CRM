<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\User;

class IsEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        $authUser = Auth::user();
        $authUserId = $authUser->id;
        // echo $authUserId;
        $employee = Employee::where('user_id', $authUserId)->first();
        if(!$employee || $employee == null){
            // dd($employee);
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/user/login')->with('error', 'PLease contact to your department HR for the proper registration!');
        }
        return $next($request);
    }
}
