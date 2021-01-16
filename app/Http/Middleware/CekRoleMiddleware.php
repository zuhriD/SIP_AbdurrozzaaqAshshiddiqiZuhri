<?php

namespace App\Http\Middleware;

use Closure;

class CekRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        if (in_array(session('role_id'),$roles)) {
           return $next($request);
        }
        return redirect('/');
        
    }
}