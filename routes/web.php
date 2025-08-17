<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\PDFController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageStudentController;
use App\Http\Controllers\internController;

use App\Models\Users;


Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



//บุคลากร
Route::middleware(['personnel'])->group(function () {

    Route::get('/personnel/index', function () {
        return view('index_personnel');
    })->name('personnel.index');
    
    Route::get('/personnel/ManageStudent',[ManageStudentController::class,'index'])->name('ManageStudent');

    Route::get('/personnel/CreateStudent', function () {
        return view('CreatStudent');
    })->name('personnel.CreateStudent');

    Route::post('/personnel/CreateStudent/Create',[ManageStudentController::class,'create'])->name('CreateStudent');

});



//นักศึกษา
Route::middleware(['student'])->group(function () {

    //เเสดงประวัติการสมัคร
    // Route::get('/student/index', function () {
    //     return view('index_student');
    // })->name('student.index');


    Route::get('/student/index',[internController::class,'index'])->name('student.index');


    //เเบบฟอร์มการสมัคร
    Route::get('/student/internshipform', function () {
        return view('internform');
    })->name('student.internshipform');

    //บันทึกส่งเอกสารฝึกงาน
    Route::post('/student/CreateInternship/Create',[internController::class,'create'])->name('CreateInternship');

});