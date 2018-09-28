<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
   function index()
   {

   		$notices=DB::table('notice')->get();
   		if($notices){
   			$title=$notices[0]->title;
   			$content=$notices[0]->content;
   		}else{
   			$title="暂时没有公告！";
   			$content="暂时没有公告！";
   		}
   		var_dump($title);
   		return view('Home/index',["title"=>$title,"content"=>$content]);
   }
}
