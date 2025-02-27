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
            'User_name'   => 'required',
            'password' => 'required',
        ]);

        // ค้นหาผู้ใช้จาก Stu_id
        $user = Users::where('User_name', $request->User_name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            // ตรวจสอบ user_role_iduser_role
            switch ($user->user_role_iduser_role) { 
                case 1:
                    return redirect()->route('personnel.index')
                        ->with('success', 'ยินดีต้อนรับคุณ '. $user->First_name);
                case 2:
                    return redirect()->route('student.index')
                        ->with('success', 'ยินดีต้อนรับคุณ '. $user->First_name);
                case 3:
                    
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
