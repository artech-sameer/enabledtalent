<?php

namespace App\Http\Middleware\Candidate;

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
    public function handle($request, Closure $next, $guard = 'candidate'){
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('candidate.login.form');
        }
        return $next($request);
    }

}