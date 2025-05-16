<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function Login(Request $req){
     $req->session()->put('user',$req->input('user'));

     //$req->session()->put('allData',$req->input('user'));  //All data fetch

     //echo session('user');

     return redirect('profile');

    }

    function Logout(){
     
     session()->pull('user');

     return redirect('profile');


     

    }




}
