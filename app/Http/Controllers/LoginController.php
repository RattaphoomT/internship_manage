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
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Stu_id' => 'required',
            'password' => 'required',
        ]);

        // ใช้ Stu_id แทน user_id
        $user = Users::where('Stu_id', $request->Stu_id)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            switch ($user->user_role_iduser_role) { // ตรวจสอบ user_status_user_status_id
                case 1:
                    return redirect()->route('personnel.index')->with('success', 'เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ '. $user->nick_name );
                case 2:
                    return redirect()->route('personnel.index')->with('success', 'เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ '. $user->nick_name );
                case 3:
                    return redirect()->route('personnel.index')->with('success', 'เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ '. $user->nick_name );
                default:
                    return redirect()->route('first')->with('error', 'เข้าสู่ระบบไม่สำเร็จ');
            }
        }

        return back()->withErrors(['user_id' => 'ไม่พบผู้ใช้งานในฐานข้อมูล']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'ออกจากระบบเรียบร้อย');
    }
}
