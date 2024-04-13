<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Trang chủ - Dịch vụ Order Taobao-Wechat";
    return view('home.index')->with("viewData", $viewData);
    }
    public function about(){
        $viewData= [];
        $viewData["title"] = "Giới thiệu - Dịch vụ Order Taobao-Wechat";
        $viewData["subtitle"] = "Về chúng tôi";
        $viewData["description"] = "Giới thiệu về Order Taobao-Wechat";
        $viewData["author"] = "Đăng bởi: Nguyễn Đình Tài";
        return view('home.about')->with("viewData", $viewData);
        }
}
