<?php

namespace App\Http\Middleware;

use Closure;

class LoggedMiddleware
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
        if(!$request->session()->has('logged_in')){
            return redirect('login');
        }
        return $next($request);
    }
}
