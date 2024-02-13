<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{


    function IndexProduct(){
        return view('Product.product');
    }//end method


function addProduct(Request $request){

    $validated = $request->validate([
        'name' => 'required|unique:products|max:255',
        'price' => 'required',
    ],


[
    'name.required' => "name is required",
    'name.unique' => "name is already exist",
    'price.required' => "price is required",
],



);

}


    
}
