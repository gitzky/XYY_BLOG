<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImgController extends Controller
{
    //商品管理首页，列表页
    public function allimages()
    {
    	//显示所有商品列表
    	return view("Admin/img/allimages");
    }

    //商品添加页
    public function addimages()
    {	
    	//显示添加商品模板
    	return view("Admin/img/addimages");
    }
}
