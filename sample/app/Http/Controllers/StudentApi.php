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


     function updateStudent(Request $req){

        $student= Student::find($req->id);

        $student->name=$req->name;
        $student->department=$req->department;
        $student->email=$req->email;
        $student->area=$req->area;
        
        if($student->save()){

            return ["result"=>"Student Updated SuccessFully"];
        }else return ["result"=>"Something Wrong!"];



    }

     function deleteStudent($id){

        $student=Student::destroy($id);

        
        if($student){

            return ["result"=>"Student Delete SuccessFully"];
        }else return ["result"=>"Something Wrong!"];



    }


    function searchStudent($name){

        
        $student=Student::where('name','like',"%$name%")->get();

        
        if($student){

            return ["result"=>$student];
        }else return ["result"=>"Something Wrong!"];



    }

    
    
}
