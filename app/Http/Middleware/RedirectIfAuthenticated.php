<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {

            $user_status = Auth::user()->user_status;

            if ($user_status == 'admin') {
                return '/admin-dashboard';
            } elseif ($user_status == 'host') {
                return '/host-dashboard';
            } elseif ($user_status == 'member') {
                return '/host-dashboard';
            }
            
            // return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
