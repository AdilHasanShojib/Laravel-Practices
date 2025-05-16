<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('users',[UserController::class,'users']);
Route::get('queries',[UserController::class,'queries']);
Route::get('students',[StudentController::class,'getStudents']);
Route::get('students',[StudentController::class,'queries']);


//Laravel Route Methods

Route::view('route','forms');
//Route::get('route',[UserController::class,'get']);
//Route::post('routeMethods',[UserController::class,'post']);
//Route::put('routeMethods',[UserController::class,'put']);
//Route::delete('routeMethods',[UserController::class,'delete']);


//Any & match Route
//Route::any('routeMethods',[UserController::class,'any']);  // working same as get,post,put,delete
//Route::match(['post','get'],'routeMethods',[UserController::class,'group1']); // match 2 function
//Route::match(['put','delete'],'routeMethods',[UserController::class,'group2']); // match 2 function


Route::post('login',[UserController::class,'login']);