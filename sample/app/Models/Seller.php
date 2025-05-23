<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    function productData(){
        //return $this->hasOne('App\Models\Product');          // one to one

        return $this->hasMany('App\Models\Product');          // one to many
    }
}
