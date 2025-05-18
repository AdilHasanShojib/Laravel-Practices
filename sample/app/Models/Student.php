<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps=false;


    function getNameAttribute($val){

        return ucfirst($val);


    }

    function getAreaAttribute($val){

        return "BD-".$val;


    }

    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }





}
