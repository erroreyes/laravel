<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class group_route
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->password && $request->password!=='012') {
            return redirect('dashboard');
        }
        return $next($request);
    }
}

