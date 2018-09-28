<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facedes\Input;

class NoticeController extends Controller
{
    //
    function notice()
    {
    	$res=DB::table('notice')->get();
    	if($res){
    		$content=$res[0]->content;
    		$title=	$res[0]->title;
    	}else{
    		$content="暂无公告";
    		$title="暂无公告";
    	}

    	
    	return view("/Admin/notice/notice",["content"=>$content,"title"=>$title]);
    }

    function updateNotice()
    {
    	// $res=DB::table('notice')->get();
    	$data["content"]=$_GET['content'];
    	$data["title"]=$_GET['title'];
    	$res=DB::table('notice')->where('id','=','1')->update($data);
    	if($res){
    		return 1;
    	}

    }

    function uploadImg()
    {

    }
}
