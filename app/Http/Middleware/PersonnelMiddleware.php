<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonnelMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        // ตรวจสอบว่า user ไม่ได้ล็อกอิน
        if (!Auth::check()) {
            // ถ้าไม่ล็อกอิน ให้ไปหน้า login
            return redirect()->route('login')->with('error', 'กรุณาเข้าสู่ระบบ');
        }

        // ตรวจสอบ Role ของผู้ใช้
        if (Auth::user()->user_role_iduser_role != 1) {
            // ถ้าไม่ใช่ เจ้าหน้าที่ (user_role_iduser_role != 1) ให้ไปหน้า login
            return redirect()->route('login')->with('error', 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้');
        }

        // ถ้าไม่มีปัญหาใดๆ ให้ไปหน้าต่อไป
        return $next($request);
    }
}
