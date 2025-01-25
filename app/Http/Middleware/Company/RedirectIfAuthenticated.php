<?php

namespace App\Http\Middleware\Company;

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
        if (Auth::guard('company')->check()) {
            return redirect()->route('company.dashboard.index');
        }
        return $next($request);
    }
}