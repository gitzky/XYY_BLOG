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

    function uploadImg(Request $request)
    {   

        //执行上传图像
        if ($request->hasFile('file')) {
            $file = $request->file('file');  //获取UploadFile实例
            if ( $file->isValid()) { //判断文件是否有效
                //$filename = $file->getClientOriginalName(); //文件原名称
                $extension = $file->getClientOriginalExtension(); //扩展名
                $filename = time() . "." . $extension;    //重命名
                $path=base_path("../img\uploads\upload");
                $res=$file->move($path, $filename); //移动至指定目录
            }
        }else{
            return "<script>alert('您还没有上传图片哦');window.location.href='/home/user_set'</script>";
        }

        if($res){
            return 1;
        }
        
       
    }
}
