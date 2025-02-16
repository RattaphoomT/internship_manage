<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;


Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/layout', function () {
//     return view('layout');
// });



Route::get('/index_personnel', function () {
    return view('index_personnel');
})->name('personnel');


Route::middleware(['web','personnel'])->group(function () {

    Route::get('/personnel/index', function () {
        return view('index_personnel');
    })->name('personnel.index');

});



// Route::get('/create-mock-user', function () {
//     $user = Users::create([
//         'Stu_id' => '643021335-5',
//         'CurriculumID' => 1,
//         'Name' => 'สมชาย',
//         'Lastname' => 'ใจดี',
//         'Date' => '2002-08-30',
//         'Tel' => '0999999999',
//         'Ethnicity' => 'ไทย',
//         'Nationality' => 'ไทย',
//         'Religion' => 'พุทธ',
//         'Address' => '123/4 หมู่ 5 กรุงเทพฯ',
//         'Grade' => '3.50',
//         'Email' => 'somchai@example.com',
//         'Treatment' => 'ไม่มี',
//         'Skil' => 'PHP, Laravel',
//         'Reward' => 'ชนะเลิศแข่งขันโปรแกรมมิ่ง',
//         'password' => Hash::make('12345678'),
//         'user_role_iduser_role' => 1,
//     ]);

//     return response()->json(['message' => 'User created!', 'user' => $user]);
// });



