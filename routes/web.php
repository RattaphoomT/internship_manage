<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\PDFController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageStudentController;

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



Route::get('/pdf', [PDFController::class, 'generatePDF'])->name('pdf.generate');



// Route::get('/create-mock-user', function () {
//     $user = Users::create([
//         'user_id' => 12344,
//         'User_name' => '643021335-5',
//         'First_name' => 'รัฐภูมิ',
//         'Last_name' => 'ธนาโชติอัครโภคิน',
//         'Birthday' => '2002-08-30',
//         'Email' => 'rattaphoom@kkumail.com',
//         'Ethnicity' => 'ไทย',
//         'Nationality' => 'ไทย',
//         'Religion' => 'พุทธ',
//         'Address' => '123/4 หมู่ 5 กรุงเทพฯ',
//         'Grade' => 3.50,
//         'Year' => 4,
//         'Treatment' => 'บัตรทอง',
//         'password' => Hash::make('12345678'),
//         'user_role_iduser_role' => 2, 
//     ]);

//     return response()->json(['message' => 'User created!', 'user' => $user]);
// });



