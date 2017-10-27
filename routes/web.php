<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.ecom');
// });

Route::get('/', 'IndexController@index')->name('home');
// Route::get('/add-item', 'IndexController@addItem')->name('add-item');
Route::get('/admin/add-product', 'AdminController@showAddProductForm')->name('add-product');
Route::post('/admin/add-product', 'AdminController@addProduct');
// Route::get('/{slug}-{id}', function(){
//     $post = \App\Product::where('id', $id)->firstOrFail(); 
// });
Route::get('/product/{slug}', 'IndexController@displayProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
