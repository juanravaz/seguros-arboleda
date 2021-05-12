<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TechnicianMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role != "admin" && auth()->user()->role != "technician")
        {
            return redirect('/');
        }

        return $next($request);
    }
}
