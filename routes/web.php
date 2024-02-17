<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddTeacherController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\AddSubjectController;
use App\Http\Controllers\AddQuestionController;
use App\Http\Controllers\DisplayResultController;
use App\Http\Controllers\ResultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dbconnect',function(){
    return view('dbconnect');
});
Route::view('admin','adminlogin');
Route::post('admin',[AdminController::class,'login']);
Route::view('display','adminhome');
Route::view('adminerror','adminerrorpage');
Route::view('add_teach','add_teacher');
Route::post('add_teach',[AddTeacherController::class,'addData']);
Route::get('list',[AddTeacherController::class,'show']);
Route::get('delete_t/{tno}',[AddTeacherController::class,'remove']);
Route::view('teacher','teacherlogin');
Route::post('teacher',[AddTeacherController::class,'login']);
Route::view('display_t','teacherhome');
Route::view('teacher_error','teacher_errorpage');
Route::get('logout',[AddTeacherController::class,'logout']);
//Route::view('student','studentlogin');
//Route::post('student',[AddStudentController::class,'login']);
Route::view('student','studentregister');
Route::post('student',[AddStudentController::class,'register']);
Route::view('login_s','studentlogin');
Route::post('login_s',[AddStudentController::class,'login']);
Route::view('display_s','studenthome');
Route::view('student_error','student_errorpage');
Route::get('logout_s',[AddStudentController::class,'logout']);
Route::view('subject','add_subject');
Route::post('subject',[AddSubjectController::class,'add']);
Route::view('add_qs','addquestion');
Route::post('add_qs',[AddQuestionController::class,'add']);
Route::get('viewqs',[AddQuestionController::class,'show']);
Route::get('d_qs/{qno}',[AddQuestionController::class,'remove']);
Route::get('edit_qs/{qno}',[AddQuestionController::class,'showData']);
Route::post('edit_qs',[AddQuestionController::class,'updateqs']);
//Route::view('check','check_sub');
//Route::post('check',[AddQuestionController::class,'check']);
Route::get('view_sub',[AddSubjectController::class,'show']);
Route::get('d_sub/{subcode}',[AddSubjectController::class,'remove']);
Route::get('delete_stud',[AddStudentController::class,'show']);
Route::get('remove_stud/{rollno}',[AddStudentController::class,'remove']);
Route::get('start_quiz',[AddQuestionController::class,'display']);
Route::post('submit_ans',[ResultController::class,'showans']);
Route::get('print',[DisplayResultController::class,'showresult']);
Route::get('result',[ResultController::class,'display']);
Route::view('check','check_sub');
Route::post('check',[ResultController::class,'check']);
//Route::get('result_show',[ResultController::class,'show']);
Route::get('show_quiz_res',[ResultController::class,'show']);
//Route::view('timer','timer');