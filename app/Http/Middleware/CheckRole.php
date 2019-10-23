<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $classUser)
    {
        if (! $request->user()->hasClassUser($classUser)) {
            return url('/');
        }
        return $next($request);
    }
}
