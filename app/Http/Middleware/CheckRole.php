<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->check()) {
            if (auth()->user()->role == $role) {
                return $next($request); 
            } else {
                return redirect()->route('home')->with('error', 'Access Denied');
            }
        }
        return redirect()->route('login')->with('error', 'You need to log in first.');
    }
}
