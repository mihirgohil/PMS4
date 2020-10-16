<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfPlacementCoordinator
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'placement-coordinator')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('placement-coordinator.dashboard');
        }

        return $next($request);
    }

}
