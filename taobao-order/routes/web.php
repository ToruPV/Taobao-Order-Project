<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products', 
'App\Http\Controllers\ProductController@index')->name("product.index");
 Route::get('/products/{id}', 
'App\Http\Controllers\ProductController@show')->name("product.show");
//Định tuyến trang Admin
Route::get('/admin', 
'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
//Định tuyến tảng danh sách sản phẩm của phần Admin
Route::get('/admin/products', 
'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");

