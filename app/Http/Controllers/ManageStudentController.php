<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Users;


class ManageStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ดึงข้อมูลผู้ใช้ทั้งหมดพร้อมกับสถานะของผู้ใช้
        $users = Users::with('userRole')->get();

        return view('ManageStudent', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'User_name' => 'required|string|unique:user,User_name',
            'First_name' => 'required|string',
            'Last_name' => 'required|string',
            'Birthday' => 'nullable|date',
            'Email' => 'required|email|unique:user,Email',
            'phone' => 'required|string|min:10',
            'Ethnicity' => 'nullable|string',
            'Nationality' => 'nullable|string',
            'Religion' => 'nullable|string',
            'Address' => 'nullable|string',
            'Grade' => 'nullable|string',
            'Year' => 'nullable|string',
            'Treatment' => 'nullable|string',
            'password' => 'required|string|min:8',
        ], [
            'User_name.required' => 'กรุณากรอกชื่อผู้ใช้',
            'User_name.unique' => 'รหัสนักศึกษานี้ถูกลงทะเบียนไปเเล้ว',
            'First_name.required' => 'กรุณากรอกชื่อจริง',
            'Last_name.required' => 'กรุณากรอกนามสกุล',
            'Birthday.date' => 'รูปแบบวันเกิดไม่ถูกต้อง',
            'Email.required' => 'กรุณากรอกอีเมล',
            'phone.min' => 'เบอร์มือถือต้องมีอย่างน้อย 10 ตัว',
            'Email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'Email.unique' => 'อีเมลนี้ถูกใช้ไปแล้ว',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
            'password.min' => 'รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร',
        ]);

        // สุ่ม user_id 11 หลัก โดยตรวจสอบไม่ให้ซ้ำ
        do {
            $userId = substr(time() . mt_rand(100, 999), 0, 10);
        } while (Users::where('user_id', $userId)->exists());

        // สร้าง User
        $user = Users::create([
            'user_id' => $userId,
            'User_name' => $request->User_name,
            'First_name' => $request->First_name,
            'Last_name' => $request->Last_name,
            'Birthday' => $request->Birthday,
            'Email' => $request->Email,
            'phone' => $request->phone,
            'Ethnicity' => $request->Ethnicity,
            'Nationality' => $request->Nationality,
            'Religion' => $request->Religion,
            'Address' => $request->Address,
            'Grade' => $request->Grade,
            'Year' => $request->Year,
            'Treatment' => $request->Treatment,
            'password' => Hash::make($request->password), // เข้ารหัสรหัสผ่าน
            'user_role_iduser_role' => 2,
        ]);

        return redirect()->route('personnel.CreateStudent')->with('success', "เพิ่มนักศึกษาเรียบร้อยเเล้ว $request->User_name");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
