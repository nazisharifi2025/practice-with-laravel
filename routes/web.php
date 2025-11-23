<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('student' , [StudentController::class, 'Read']);
Route::get('teacher' , [TeacherController::class, 'insert']);
Route::get('readth' , [TeacherController::class, 'readth']);
// Route::get('allteacher', function(){
//     return view("teacher");
// });