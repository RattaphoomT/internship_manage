<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonnelMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        dd(Auth::guard('web')->user());

        if (Auth::guard('web')->check() && Auth::guard('web')->user()->user_role_iduser_role == 1) {
            return $next($request);
        }

        return redirect()->route('login.form')->with('error', 'กรุณาเข้าสู่ระบบด้วยผู้ใช้ระดับ เจ้าหน้าที่');
    }
}