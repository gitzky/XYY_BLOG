<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{ 

	function isPc(){
		//获取USER AGENT
		 $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
		  
		 //分析数据
		 $is_pc = (strpos($agent, 'windows nt')) ? true : false;  
		 $is_iphone = (strpos($agent, 'iphone')) ? true : false;  
		 $is_ipad = (strpos($agent, 'ipad')) ? true : false;  
		 $is_android = (strpos($agent, 'android')) ? true : false;  
		 
		    
		 if($is_iphone||$is_android){  
		     return false;
		 } else{
		    return true;
		 } 
	}
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

   		$postTypes=DB::table('post_type')->get();
  		

   		$isPc=$this->isPc();
  		if($isPc){

   			return view('Home/index',["title"=>$title,"content"=>$content,'postTypes'=>$postTypes]);
  		}else{
  			return view('Home/index',["title"=>$title,"content"=>$content,'postTypes'=>$postTypes]);
  			// return "手机暂时不能访问";
  		}
   }
}
