<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    function list(){

        $products= Seller::find(1)->productData;

        return $products;


    }

     function manyToOne(){

        $products= Product::with('sellerData')->get();

        return $products;


    }
}
