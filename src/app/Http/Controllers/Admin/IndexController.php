<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//后台首页控制器
class IndexController extends Controller
{
   //加载后台首页方法
    public function index()
    {
       // 获取登录用户的id；
        $a_id=session('a_id');
        //获取登陆者的详细信息；
        $user_detailes=DB::table('userdetail')->where('uid','=',$a_id)->get()->toArray()[0];
        // 获取登录者的昵称
        $nickName=$user_detailes->nickName;
        $realName=$user_detailes->realName;
  
    	return view("Admin/index",['nickName'=>$nickName,'realName'=>$realName]);
        
    }
    //加载后台首页main方法
    public function main()
    {
        
        return view("Admin/main");
    }

    






}
