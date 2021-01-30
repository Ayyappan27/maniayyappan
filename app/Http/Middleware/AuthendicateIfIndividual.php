<?php

namespace App\Http\Middleware;

use Closure;

class AuthendicateIfIndividual
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
        if(Auth::user()->userable_type == 'App\Models\Individual')
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }
}
