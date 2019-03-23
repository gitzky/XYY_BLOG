<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//后台商品管理控制器
class PostController extends Controller
{
    
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


    function uploadImg(Request $request)
    {   

        //执行上传图像
        if ($request->hasFile('file')) {
            $file = $request->file('file');  //获取UploadFile实例
            if ( $file->isValid()) { //判断文件是否有效
                //$filename = $file->getClientOriginalName(); //文件原名称
                $extension = $file->getClientOriginalExtension(); //扩展名
                $filename = time() . "." . $extension;    //重命名
                $path=base_path("../img\uploads");
                $res=$file->move($path, $filename); //移动至指定目录
            }
        }else{
            return false;
        }

        if($res){
            return "/img/uploads/".$filename;
        }else{
            return "/img/w.jpg";
        }
    }


    function postAdd(){
        $data=$_GET['data'];
  
        $data=json_decode($data);
        //$data->newsKey=explode(',',$data->newsKey);
        $formCon['newsType']=$data->newsType;
        $formCon['newsName']=$data->newsName;
        $formCon['newsAuthor']=$data->newsAuthor;
        $formCon['newsTime']=$data->newsTime;
        $formCon['newsKey']=$data->newsKey;
        $formCon['newsIntro']=$data->newsIntro;
        $formCon['newsIntroImg']=$data->newsIntroImg;
        $formCon['newsContent']=$_GET['content'];

        $res=DB::table('posts')->insert($formCon);
        if($res){
            $list['code']=1;
            $list['status']="success";
        }else{
            $list['code']=0;
            $list['status']="error";
        }
        return json_encode($list);

    }

    function getData(){
        $data=DB::table('posts')->get()->toArray();
        return json_encode($data);
    }

    function delPost(){
        $id=$_GET['newsId'];
        $res=DB::table('posts')->delete($id);
        if($res){
            $data['code']='1';
            $data['msg']='success';
        }else{
            $data['code']='0';
            $data['msg']='error';
        }
        return json_encode($data);
    }

}
