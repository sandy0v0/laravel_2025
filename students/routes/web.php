<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });


// 通常單獨的會寫在最上面(避免衝突)，laravel是由上往下執行
Route::get('/students_hello', [StudentController::class,'sayHello']);
// resource通常放在下面
Route::resource('students', StudentController::class);
