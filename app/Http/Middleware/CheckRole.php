<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // تحقق من أن المستخدم مسجل في الجلسة
        if (auth()->check()) {
            // تحقق من إذا كان للمستخدم الدور المطلوب
            if (auth()->user()->role == $role) {
                return $next($request); // السماح بالوصول إلى المسار
            } else {
                // توجيه المستخدم إلى صفحة الخطأ أو الصفحة الرئيسية
                return redirect()->route('home')->with('error', 'Access Denied');
            }
        }

        // إذا كان المستخدم غير مسجل
        return redirect()->route('login')->with('error', 'You need to log in first.');
    }
}
