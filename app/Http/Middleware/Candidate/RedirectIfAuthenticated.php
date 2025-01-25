<?php

namespace App\Http\Middleware\Candidate;

use Closure;
use Auth;
class RedirectIfAuthenticated
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
        if (Auth::guard('candidate')->check()) {
            return redirect()->route('candidate.dashboard.index');
        }
        return $next($request);
    }
}