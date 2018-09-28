<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{   

     //加载后台用户列表方法
    public function allusers()
    {
        $users = DB::table('user')->orderBy('userEndTime','desc')->get();
    
        $users=json_encode($users);
        file_put_contents('adm/json/usersList.json', $users);

        return view("Admin/user/allusers");
    }

     //加载后台新增用户方法
    public function adduser()
    {
        return view("Admin/user/adduser");
    }
     //加载后台新增用户到数据库
    public function insert($data)
    {   
        var_dump($data);
        // $data=json_decode($data);

        // $data0['userName']=$data->userName;
        // $data0['userEmail']=$data->userEmail;
        // $data0['userSex']=$data->userSex;
        // $data0['userStatus']=$data->userStatus;
        // $data0['userGrade']=$data->userGrade;
        // $data0['userEndTime']=$data->userEndTime;
        // $data0['linksDesc']=$data->linksDesc;

        // $id=DB::table('user')->insertGetId($data0);
        // var_dump($id);
        // // ---------------------------------------
        // $data1['uid']=$id;
        // $data1['nickName']=$data->userName;
        // $data1['email']=$data->userEmail;
        // $data1['sex']=$data->userSex;

        // $res=DB::table('userdetail')->insert($data1);
        // if($res){
        //     return 1;
        // }else{
        //     return 0;
        // }
        



        // 随机插入20个用户
      
      
         $str="1234567890abcdefghijklmnopqrst";
            
    

        
        $sex=['男','女'];
        $arr=['注册会员','中级会员','高级会员','超级会员'];
        $arr1=['正常使用','限制用户'];
        $data=[];
        for($i=0;$i<10;$i++){

            $word="";
            for($j=0;$j<5;$j++){
                $word.=$str[rand(0,26)];
            }
           
            $data['userName']='zhangsan'.$i;
            $data['userEmail']=$word."@qq.com";
            $data['userSex']=$sex[rand(0,1)];
            $data['userStatus']=$arr[rand(0,3)];
            $data['userGrade']=$arr1[rand(0,1)];
            $data['userEndTime']=rand(1990,2018).'-'.rand(1,12).'-'.rand(1,28).' '.rand(0,23).':'.rand(0,59).':'.rand(0,59);
            $data['linksDesc']="我是张三".$i."号";
            $id=DB::table('user')->insertGetId($data);
            $data1['uid']=$id;
            $data1['nickName']= $data['userName'];
            $data1['email']=$data['userEmail'];
            $data1['sex']= $data['userSex'];
            $res=DB::table('userdetail')->insert($data1);
            // var_dump($data);
            // var_dump($data1);
            var_dump($res);
        }
        


    }

    //加载后台删除用户方法
    public function delete($id)
    { 
        DB::table('user')->where('id','=',$id)->delete();
        return($id);
    }

     //加载后台显示编辑用户的方法
    public function edit($id)
    { 
       $res=DB::table('user')->where('id','=',$id)->get();
        // var_dump($res[0]);
        return view("Admin/user/editUser",['res'=>$res]);
       
    }

    //加载后台修改用户的方法
    public function update(Request $request,$id)
    {   
        $user=$request->except('_token');

        $res=DB::table('user')
            ->where('id', $id)
            ->update($user);
    
        return redirect()->action("Admin\UserController@allusers");

    
    }

     //加载后台修改用户密码方法
    public function changepwd()
    {
        
        return view("Admin/user/changepwd");
    }

     //加载后台用户详情以及修改方法
    public function userinfo()
    {   

        // 获取登录用户的id；
        $a_id=session('a_id');
        if($a_id){
            //获取登陆者的详细信息；和状态

            $user_detailes=DB::table('userdetail')
                ->join('user','userdetail.uid','=','user.id')
                ->select('userdetail.*','user.userStatus')
                ->where('uid','=',$a_id)
                ->get()->toArray()[0];
                 $address=$user_detailes->address;
                 $hobby=$user_detailes->hobby;
               
                $address=explode(',',$address);
                $hobby=explode(',',$hobby);
            //    var_dump($user_detailes,$address,$hobby);
                
            return view("Admin/user/userinfo",['user_detailes'=>$user_detailes,'address'=>$address,'hobby'=>$hobby]);
        }
    }
   
    public function login()
    {
        return view("Admin/login/login",['password'=>'','username'=>'']);
    }
    
     public function doLogin(Request $request)
    {   

        
        //获取提交的用户名和密码
        $username=$request->except('_token')['userName'];
        $password=$request->except('_token')['password'];

        // 判断提交的用户名在不在数据库中；如果在返回数组，否则返回空数组
        $res = DB::table('user')->where('userName', '=', $username)->get()->toArray();
       
        
        if($res){
            //判断用户的权限和状态
            $userStatus=$res[0]->userStatus;
            $userGrade=$res[0]->userGrade;

            //判断密码是否相等
           if($res[0]->password==$password){
                if($userStatus!='注册会员'){
                    if($userGrade=='正常使用'){

                        //条件都满足可以登录、设置session、并加载跳转到后台首页的方法
                         session(['a_id'=>$res[0]->id]);
                        return redirect()->action("Admin\IndexController@index");

                    }else{
                        //用户状态被限制。不能登录
                        return view("Admin/login/login",['username'=>'用户状态被限制！不能登录','password'=>'']); 
                    }


                }else{
                    //注册会员，不能登录后台！
                     return view("Admin/login/login",['username'=>'注册会员，不能登录后台！','password'=>'']);
                }

           }else{
                //密码和数据库不匹配
                return view("Admin/login/login",['password'=>'the password is wrong','username'=>$username]);
           }
            
        }else{
            //用户名不在数据库中
            return view("Admin/login/login",['username'=>'the user is not found','password'=>'']);

        }

    }



  
    //加载logout退出页
     public function logout()
    {   
        session(['a_id'=>'']);
        return back();
    }





}
