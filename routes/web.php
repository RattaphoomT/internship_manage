<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/index_personnel', function () {
    return view('index_personnel');
})->name('personnel');

