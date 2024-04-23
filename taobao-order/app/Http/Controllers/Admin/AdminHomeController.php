<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Trang quản trị - Admin - Dịch vụ Order Taobao-Wechat";
    return view('admin.home.index')->with("viewData", $viewData);
    }
}
