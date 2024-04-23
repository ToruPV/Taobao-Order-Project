<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
 {
 $viewData = [];
 $viewData["title"] = "Trang quản trị - Sản phẩm - Dịch vụ Order Taobao-Wechat";
 $viewData["products"] = Product::all();
 return view('admin.product.index')->with("viewData", $viewData);
 }
}
