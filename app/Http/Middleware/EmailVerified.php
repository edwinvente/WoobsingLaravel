<?php

namespace App\Http\Middleware;

use Closure;

class EmailVerified
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
        if ($request->input('email') && !$request->input('password_confirmation')) {
            return redirect('/verify');
        }
        return $next($request);
    }
}
