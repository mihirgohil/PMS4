<?php

namespace App\Http\Middleware;


use Closure; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class StudentOptOut
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next,$guard = 'student')
    {  
         
            // 
        if(Auth::guard($guard)->check())
        {  $optoutstatus = Auth::guard('student')->user()->is_optout;
            // dd($optoutstatus);
            if($optoutstatus) 
            {  
                return  Redirect::route('student.optOutIndex');
            }
        
        }

        return $next($request);
    }
}
