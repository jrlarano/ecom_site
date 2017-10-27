<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
// use Collective\Html\FormFacade as Form;

class IndexController extends Controller
{
    public function index()
    {
        // return view('index');
        $products = \App\Product::all();
        return view('index')->with('products',$products);
        // foreach($products as $product) {
        // 	// $slug = new Slug();
        // 	$test = str_slug($product->name);
        // 	echo $test.'<br/>';
        // 	// echo $product->name;
        // }
    }

    public function addItem()
    {
        // return view('home');
        $users = \App\User::all()->where('id',1);
        // echo $users->name;
        return view('home')->with($users);
    }

    public function displayProduct($slug)
	{
		$slug = explode("-", $slug);
		$id = array_pop($slug);
		$name = implode(" ", $slug);
	    $product = \App\Product::where(['id'=>$id,'name'=>$name])->first();
	    return view('pdp')->with('product',$product);
	}
}
