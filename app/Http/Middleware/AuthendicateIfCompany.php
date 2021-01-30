<?php

namespace App\Http\Middleware;

use Closure;

class AuthendicateIfCompany
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
        if(Auth::user()->userable_type == 'App\Models\Company')
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }
}
