<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//后台商品管理控制器
class PostController extends Controller
{
    //商品管理首页，列表页-------(商品编码规则：1-1-1-1-33【类型id-颜色id-尺寸id-价格id-商品id】)
    public function list()
    {
    	return view("Admin/post/postList");
    }

  
    public function add()
    {	


        $res=DB::table('post_type')->get();
  
    	return view("Admin/post/postAdd",['res'=>$res]);
    }

 
    public function postType()
    {	
    	
    	$res=DB::table('post_type')->get();
  
    	return view("Admin/post/postType",['res'=>$res]);
    }

    public function updateType($data)
    {	
    	
 
    	$arr = json_decode($data,true);
    	

    	foreach ($arr as $key => $value) {
            $res=DB::table('post_type')->insert($value);

    	}

    	return 1;

    }

     public function delType($data)
    {	
    	
 
    	$arr = json_decode($data,true);
    	var_dump($arr);
 		foreach ($arr as $key => $value) {
 		var_dump($value);

 		DB::table('post_type')->where('id','=',$value)->delete();
 		}

    }


}
