<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\PDFController;

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

});



Route::get('/pdf', [PDFController::class, 'generatePDF'])->name('pdf.generate');



// Route::get('/create-mock-user', function () {
//     $user = Users::create([
//         'user_id' => 12345,
//         'User_name' => '643021335-2',
//         'First_name' => 'สมชาย',
//         'Last_name' => 'ใจดี',
//         'Birthday' => '2002-08-30',
//         'Email' => 'somchai@example.com',
//         'Ethnicity' => 'ไทย',
//         'Nationality' => 'ไทย',
//         'Religion' => 'พุทธ',
//         'Address' => '123/4 หมู่ 5 กรุงเทพฯ',
//         'Grade' => 3.50,
//         'Year' => 3,
//         'Treatment' => 'บัตรทอง',
//         'password' => Hash::make('12345678'),
//         'user_role_iduser_role' => 1, 
//     ]);

//     return response()->json(['message' => 'User created!', 'user' => $user]);
// });



