<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_role_iduser_role == 2) {
            return $next($request);
        }

        return redirect()->route('login.form')->with('error', 'กรุณาเข้าสู่ระบบด้วยผู้ใช้ระดับ นักศึกษา');
    }
}
