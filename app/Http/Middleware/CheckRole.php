<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // التحقق من إذا كان المستخدم مسجلاً
        if (auth()->check()) {
            // التحقق من دور المستخدم الحالي
            if (auth()->user()->role == $role) {
                return $next($request);
            } else {
                // إذا لم يكن للمستخدم الدور المطلوب
                return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
            }
        }

        // إذا لم يكن المستخدم مسجلاً
        return redirect()->route('login')->with('error', 'You need to log in first.');
    }
}
