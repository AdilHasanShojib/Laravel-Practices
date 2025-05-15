<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function users(){

     $users= DB::select('select * from users');
     return view('users',['xyz'=>$users]);
    }


    function queries(){

        //All Data

        //$res=DB::table('users')->where('name','sunny')->get();
        //return view('users',['xyz'=>$res]);
        

        //Data Inserted

       /* $res=DB::table('users')->insert([
            'name'=>'Nayem',
            'area'=>'savar',
            'email'=>'nayem@gmail.com'
        ]); */

        
        //Data Updated

        //$res=DB::table('users')->where('name','Nayem')->update(['area'=>'Savar']);

        // Data Deleted
        $res=DB::table('users')->where('name','Nayem')->delete();


        if($res){
            return "data Updated";
        }
        else{
            return "data Not Updated";
        }
    }


    function get(){

       return "Get Route Method";


    }

     function post(){

       return "Post Route Method";


    }


     function put(){

       return "Put Route Method";


    }

    function delete(){

       return "Delete Route Method";


    }





}
