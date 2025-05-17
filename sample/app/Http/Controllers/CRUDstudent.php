<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CRUDstudent extends Controller
{
    function add(Request $req){
       
        $student= new Student();
        $student->name=$req->name;
        $student->department=$req->department;
        $student->email=$req->email;
        $student->area=$req->area;
        $student->save();
        if($student){
            echo "New Student Added";
        }
        else echo "Something Wrong!";


    }
}
