<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin_helper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( Auth::check() &&  Auth::user()->role_id === 2 ){return $next($request);}else{
            return redirect('/login-as-role')->with('kind_role_message',' admin or admin_helper can do it only ');
        }

        // redirect('/login-as-admin-help');
    }
}
