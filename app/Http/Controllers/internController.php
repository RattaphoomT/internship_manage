<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Internship;
use App\Models\Company;
use App\Models\Document;
use App\Events\InternshipUpdated;

class internController extends Controller
{


    public function index()
    {
        // ดึงข้อมูลการฝึกงานทั้งหมด
        $internships = Internship::with(['company', 'document'])->get();

        // ส่งข้อมูลไปที่ view
        return view('index_student', compact('internships'));
    }


    public function create(Request $request)
    {
        $request->validate([
            
            'user_user_id' => 'required|integer',
            'internshipstatus_Internship_Status_id' => 'required|integer',
            'Company_Name' => 'required|string',
            'Comlink' => 'nullable|string',
            'Position' => 'nullable|string',
            'HRname' => 'required|string',
            'HR_contact' => 'required|string|min:10',
            'Company_detail' => 'nullable|string',
            'Company_Adress' => 'required|string',
            'StartDate' => 'required|date',
            'EndDate' => 'required|date|after_or_equal:StartDate',
            'Delivery_Date' => 'nullable|date',
            'DeliveryOption' => 'required|string',

            // 🔹 ตรวจสอบไฟล์ที่อัปโหลด
            'Doc_CP_intern01' => 'required|file|mimes:pdf|max:2048', 
            'Doc_CP_intern04' => 'required|file|mimes:pdf|max:2048',
            'Doc_CP_intern02' => 'required|file|mimes:pdf|max:2048',
            'Doc_CP_intern03' => 'required|file|mimes:pdf|max:2048',
            'Doc_5' => 'nullable|file|mimes:pdf|max:2048',
            'Doc_6' => 'nullable|file|mimes:pdf|max:2048',
            'Doc_7' => 'nullable|file|mimes:pdf|max:2048',  
        ], [
            'Company_Name.required' => 'กรุณากรอกชื่อบริษัท',
            'HRname.required' => 'กรุณากรอกชื่อ HR',
            'HR_contact.required' => 'กรุณากรอกเบอร์โทร HR',
            'HR_contact.min' => 'เบอร์โทร HR ต้องมีอย่างน้อย 10 ตัว',
            'Company_Adress.required' => 'กรุณากรอกที่อยู่บริษัท',
            'StartDate.required' => 'กรุณาเลือกวันเริ่มต้น',
            'StartDate.date' => 'รูปแบบวันที่เริ่มต้นไม่ถูกต้อง',
            'EndDate.required' => 'กรุณาเลือกวันสิ้นสุด',
            'EndDate.date' => 'รูปแบบวันที่สิ้นสุดไม่ถูกต้อง',
            'EndDate.after_or_equal' => 'วันสิ้นสุดต้องไม่ก่อนวันเริ่มต้น',
            'DeliveryOption.required' => 'กรุณาเลือกตัวเลือกการส่งเอกสาร',
        
            // 🔹 ข้อความแจ้งเตือนเกี่ยวกับไฟล์
            'Doc_CP_intern01' => 'กรุณาอัปโหลดเอกสาร CP-Intern01 - รายละเอียดบริษัท',
            'Doc_CP_intern01.mimes' => 'เอกสาร CP-Intern01 ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_CP_intern01.max' => 'ขนาดไฟล์เอกสาร CP-Intern01 ต้องไม่เกิน 2MB',

            'Doc_CP_intern02' => 'กรุณาอัปโหลดเอกสาร CP-Intern02',
            'Doc_CP_intern02.mimes' => 'เอกสาร CP-Intern02 ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_CP_intern02.max' => 'ขนาดไฟล์เอกสาร CP-Intern02 ต้องไม่เกิน 2MB',

            'Doc_CP_intern03' => 'กรุณาอัปโหลดเอกสาร CP-Intern03',
            'Doc_CP_intern03.mimes' => 'เอกสาร CP-Intern03 ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_CP_intern03.max' => 'ขนาดไฟล์เอกสาร CP-Intern03 ต้องไม่เกิน 2MB',

            'Doc_CP_intern04' => 'กรุณาอัปโหลดเอกสาร Resume',
            'Doc_CP_intern04.mimes' => 'เอกสาร Resume ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_CP_intern04.max' => 'ขนาดไฟล์เอกสาร Resume ต้องไม่เกิน 2MB',


            'Doc_5.mimes' => 'เอกสาร Doc_5 ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_5.max' => 'ขนาดไฟล์เอกสาร Doc_5 ต้องไม่เกิน 2MB',

            'Doc_6.mimes' => 'เอกสาร Doc_6 ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_6.max' => 'ขนาดไฟล์เอกสาร Doc_6 ต้องไม่เกิน 2MB',

            'Doc_7.mimes' => 'เอกสาร Doc_7 ต้องเป็นไฟล์ PDF เท่านั้น',
            'Doc_7.max' => 'ขนาดไฟล์เอกสาร CP-Intern01Doc_7 ต้องไม่เกิน 2MB',
            
        ]);


        // Save Company Data
        $company = Company::create([
            'Company_Name' => $request->input('Company_Name'),
            'Company_Adress' => $request->input('Company_Adress'),
            'Company_detail' => $request->input('Company_detail'),
            'Comlink' => $request->input('Comlink'),
            'HRname' => $request->input('HRname'),
            'HR_contact' => $request->input('HR_contact'),
        ]);

        // Save Documents
        $document = Document::create([
            'Doc_CP_intern01' => $request->file('Doc_CP_intern01')->store('documents', 'public'),
            'Doc_CP_intern02' => $request->file('Doc_CP_intern02')->store('documents', 'public'),
            'Doc_CP_intern03' => $request->file('Doc_CP_intern03')->store('documents', 'public'),
            'Doc_CP_intern04' => $request->file('Doc_CP_intern04')->store('documents', 'public'),
            'Doc_5' => $request->file('Doc_5') ? $request->file('Doc_5')->store('documents', 'public') : null,
            'Doc_6' => $request->file('Doc_6') ? $request->file('Doc_6')->store('documents', 'public') : null,
            'Doc_7' => $request->file('Doc_7') ? $request->file('Doc_7')->store('documents', 'public') : null,
        ]);

        // Save Internship Data
        $internship = Internship::create([
            'StartDate' => $request->input('StartDate'),
            'EndDate' => $request->input('EndDate'),
            'Position' => $request->input('Position'),
            'DeliveryOption' => $request->input('DeliveryOption'),
            'Delivery_Date' => $request->input('Delivery_Date'),
            'company_CompanyId' => $company->CompanyId,
            'document_Doc_id' => $document->Doc_id,
            'user_user_id' => $request->input('user_user_id'),
            'internshipstatus_Internship_Status_id' => $request->input('internshipstatus_Internship_Status_id'),
        ]);
        
        event(new InternshipUpdated($internship));

        return redirect()->route('student.internshipform')->with('success', "ส่งเอกสารฝึกงานสำเร็จ");
    }
}
