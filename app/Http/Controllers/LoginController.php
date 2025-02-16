<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginform');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Stu_id'   => 'required',
            'password' => 'required',
        ]);

        // ค้นหาผู้ใช้จาก Stu_id
        $user = Users::where('Stu_id', $request->Stu_id)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->regenerate(); // ✅ ป้องกัน Session Fixation Attack

            // ตรวจสอบ user_role_id
            switch ($user->user_role_iduser_role) { 
                case 1:
                    return redirect()->route('personnel.index')
                        ->with('success', 'เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ '. $user->nick_name);
                case 2:
                    return redirect()->route('personnel.index')
                        ->with('success', 'เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ '. $user->nick_name);
                case 3:
                    return redirect()->route('personnel.index')
                        ->with('success', 'เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ '. $user->nick_name);
                default:
                    return redirect()->route('login.form')->with('error', 'เข้าสู่ระบบไม่สำเร็จ');
            }
        }

        return redirect()->route('login.form')->with('error', 'เข้าสู่ระบบไม่สำเร็จ');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate(); // ✅ ทำลายเซสชันเดิม
        session()->regenerateToken(); // ✅ ป้องกัน CSRF Attack

        return redirect()->route('login.form')->with('success', 'ออกจากระบบเรียบร้อย');
    }
}
