<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->check() && auth()->user()->role == $role) {
            return $next($request);
        }

        // Redirect or show an error page if the user is not authorized
        return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
    }
}
