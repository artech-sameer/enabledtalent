<?php

namespace App\Http\Middleware\Company;

use Closure;
use Auth;
class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'company'){
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('company.login.form');
        }
        return $next($request);
    }

}