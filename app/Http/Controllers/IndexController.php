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
        return view('home');
    }

    public function addItem()
    {
        // return view('home');
        $users = \App\User::all()->where('id',1);
        // echo $users->name;
        return view('home')->with($users);
    }
}
