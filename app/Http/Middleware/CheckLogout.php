<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;


class CheckLogout
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
        if(!Cookie::has('logged_user')) {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
