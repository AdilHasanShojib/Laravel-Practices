<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentApi;
use App\Http\Controllers\StudentResource;
use App\Http\Controllers\UserAuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//API Signup with Laravel sanctum
Route::post('signUp',[UserAuthController::class,'signUp']);
Route::post('login',[UserAuthController::class,'login']);






//API Authentication with Laravel sanctum
Route::group(['middleware'=>"auth:sanctum"],function(){

    //API Method Performs

Route::get('students',[StudentApi::class,'list']);
Route::post('add-student',[StudentApi::class,'addStudent']);
Route::put('update-student',[StudentApi::class,'updateStudent']);
Route::delete('delete-student/{id}',[StudentApi::class,'deleteStudent']);

// Search Student based on name
Route::get('search-student/{name}',[StudentApi::class,'searchStudent']);


//API with Resource Controller
Route::resource('studentResource',StudentResource::class);


});

Route::get('login',[UserAuthController::class,'login'])->name('login');
