<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserAuthController extends Controller
{
    function login(Request $request){

        $user= User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password,$user->password)){
            return ['result'=>"User Not Found!","Success"=>false];
        }

        else{
             $success['token']=$user->createToken('MyApp')->plainTextToken;
             $success['name']= $user->name;
             return ['success'=>true,"result"=>$success,"msg"=>"User Login Successful"];
        }


       

    }

    function signUp(Request $request){

        $input=$request->all();
        $input["password"]=bcrypt($input["password"]);
        $user= User::create($input);
        $success['token']=$user->createToken('MyApp')->plainTextToken;
        $success['name']= $user->name;
        return ['success'=>true,"result"=>$success,"msg"=>"User Register Successful"];
              
    }
}
