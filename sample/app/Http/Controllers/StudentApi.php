<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentApi extends Controller
{
    function list(){
        return Student::all();
    }


    function addStudent(Request $req){

        $student= new Student();

        $student->name=$req->name;
        $student->department=$req->department;
        $student->email=$req->email;
        $student->area=$req->area;
        
        if($student->save()){

            return ["result"=>"Student Added SuccessFully"];
        }else return ["result"=>"Something Wrong!"];



    }

    
    
}
