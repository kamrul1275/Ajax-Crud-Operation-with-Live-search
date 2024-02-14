<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    function IndexProduct(){

        $products = Product::latest()->paginate(5);
        return view('Product.product',compact('products'));
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


$Products = new Product();
$Products->name = $request->name;
$Products->price = $request->price;
$Products->save();



return response()->json([

'status'=>'success',


]);

 
}//end method   updateProduct



// strat updateProduct
function updateProduct(Request $request){
    $validated = $request->validate([
        'up_name' => 'required',
        'up_price' => 'required',
    ], [
        'up_name.required' => "name is required",
    
        'up_price.required' => "price is required",
    ]);

    Product::where('id', $request->up_id)->update([
        'name' => $request->up_name,
        'price' => $request->up_price,
    ]);

    return response()->json([
        'status' => 'success',
    ]);
}



    
}
