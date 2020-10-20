<?php

namespace App\Http\Middleware;


use Closure; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class StudentMailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next,$guard = 'student', $redirectToRoute = 'student.mailverify')
    {  
         
            // 
        if(Auth::guard($guard)->check())
        {  $mail_status = Auth::guard('student')->user()->email_verified_at;
            
            if($mail_status === null) 
            {  // dd( $mail_status);
                return  Redirect::route($redirectToRoute ?: 'student.verification.notice');
            }
          
        }

        return $next($request);
    }
}
