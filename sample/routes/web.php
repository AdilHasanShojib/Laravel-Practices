<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\User;
use App\Http\Controllers\CRUDstudent;
use App\Http\Controllers\Upload;
use App\Http\Controllers\SellerController;



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


//Route::post('login',[UserController::class,'login']);

//session in laravel

// Route::view('login','login');
// Route::view('profile','profile');
// Route::post('login',[User::class,'login']);
// Route::get('logout',[User::class,'logout']);

//Flash Session in laravel

// Route::view('add','add');
// Route::post('add',[User::class,'addUser']);


//CRUD operations with html form

Route::view('addStudent','crudStudent');
Route::post('addStudent',[CRUDstudent::class,'add']);

Route::view('getStudent','studentList');
Route::get('studentList',[CRUDstudent::class,'list']);

Route::get('delete/{id}',[CRUDstudent::class,'delete']);

Route::get('edit/{id}',[CRUDstudent::class,'edit']);
Route::put('edit-student/{id}',[CRUDstudent::class,'editStudent']);


// search data

Route::get('search',[CRUDstudent::class,'search']);

// delete Multiple data

Route::post('delete-multi',[CRUDstudent::class,'deleteMultiple']);

//Upload images with Database

Route::view('upload','upload');
Route::post('upload',[Upload::class,'upload']);

Route::get('imgList',[Upload::class,'imgList']);

//Layouts Using Template Inheritance

Route::view('lLogin','layoutLogin');

//Mutators(Modify data when inserting in DB)

Route::get('mutators',[StudentController::class,'mutators']);

//Database Relationships

Route::get('productList',[SellerController::class,'list']);   // One to one Relationships

Route::get('manyList',[SellerController::class,'manyToOne']);  // many to one Relationships











