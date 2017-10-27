<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Product;
use App\User;

class AdminController extends Controller
{
    public function showAddProductForm()
    {
        return view('admin/addProduct');
        // $users = \App\User::all()->where('id',1);
        // echo $users->name;
        // return view('home')->with($users);
    }

    public function addProduct(Request $request)
    {
    	$product = new Product;
    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->sku = $request->sku;
    	$product->image = $request->image;
    	$product->price = $request->price;
    	$product->categoryId = $request->categoryId;
    	$product->stock = $request->stock;
    	$product->long_description = $request->longDescription;
    	if($product->save()){
    		if($request->hasFile('photo')) {
	    		$photo = $request->file('photo')->storeAs('/public/img/products', $product->id.'.jpg');
	    		// $photo = $request->file('photo')->storeAs('/public/img/products', $product->id.'.'.$request->photo->extension());
	    	} 
    	}
    	
		// $request->file('photo')->move('/img/products', $request->image);
		
  //   	if (Input::file('photo')->isValid())
		// {
		    // Input::file('photo')->move('/img/products', $request->image);
		// }
        return view('admin/addProduct');
        // $users = \App\User::all()->where('id',1);
        // echo $users->name;
        // return view('home')->with($users);

        // $requestArr = [
    				// 	$request->name,
				    // 	$request->description,
				    // 	$request->sku,
				    // 	$request->image,
				    // 	$request->price,
				    // 	$request->categoryId,
				    // 	$request->stock,
				    // 	$request->longDescription
				    // 	];
    }
}
