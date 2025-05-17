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
            return redirect('studentList');
        }
        else echo "Something Wrong!";


    }

    function list(){
        $student=Student::all();

        return view('studentList',['user'=>$student]);
    }


   
    function delete($id){
     $isDeleted= Student::destroy($id);

     if($isDeleted){

        return redirect('studentList');
     }


   }

   function edit($id){

    $edit=Student::find($id);

    return view('studentEdit',['user'=>$edit]);


   }

   function editStudent(Request $req, $id){

       $student=Student::find($id);

        $student->name=$req->name;
        $student->department=$req->department;
        $student->email=$req->email;
        $student->area=$req->area;
        

        if($student->save()){
            return redirect('studentList');
        }else{
            return "Update Operations Failed!";
        }


    
        


   }

   function search(Request $req){
    $student=Student::where('name','like',"%$req->search%")->get();

    return view('studentList',['user'=>$student,'search'=>$req->search]);


   }





}
