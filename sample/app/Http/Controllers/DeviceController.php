<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function routeModelBinding(Device $key){

        return $key->all();


    }
}
