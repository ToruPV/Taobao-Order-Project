<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Sản phẩm - Dịch vụ Order Taobao-Wechat";
    $viewData["subtitle"] = "Danh sách sản phẩm";
    $viewData["products"] = Product::all();
    return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
    $viewData= [];
    $product = Product::findOrFail($id);
    $viewData["title"] = $product ->getName() . " - Dịch vụ Order Taobao-Wechat";
    $viewData["subtitle"] = $product ->getName() . " - Thông tin sản phẩm";
    $viewData["product"] = $product;
    return view('product.show')->with("viewData", $viewData);
    }
   
       
}
