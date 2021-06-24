<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        $role = Auth::user()->role_id;
        if($role === 1  && Auth::check() ){return $next($request);}{
        return redirect('/login-as-role')->with('kind_role_message','the admin only can do it ');    }
    }
        //abort(403);
}
