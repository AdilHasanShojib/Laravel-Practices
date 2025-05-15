<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function getStudents(){
        $students= \App\Models\Student::all();
        return view('students',['data'=>$students]);
    }

    function queries(){
        //$response= Student::all();
        //$response= Student::get();

        //$response= Student::where('name','Anamul Haque')->get();
        //return view('students',['data'=>$response]);

           //Data Inserted

       $response=Student::insert([
            'name'=>'Niloy',
            'department'=>'Math',
            
        ]); 

         // Data Updated

         //$response=Student::where('name','Niloy')->update(['name'=>'Niloy Saha']);


         // Data Deleted 
         $response=Student::where('name','Niloy')->delete();

        
        if($response){
            return "Data Updated";
        }
        else{
            return "Data Not Updated";
        }

        



        
        
    }
}
