<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// 上面use 查 The Basics->Controllers->Resource Controllers
// 裡面的 use App\Http\Controllers\PhotoController; 去改
// https://laravel.com/docs/11.x/controllers#resource-controllers


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('students.index');
});


// 通常單獨的會寫在最上面(避免衝突)，laravel是由上往下執行
Route::get('/students_hello', [StudentController::class,'sayHello']);
// resource通常放在下面
Route::resource('students', StudentController::class);



