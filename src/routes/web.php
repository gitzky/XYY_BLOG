<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('/Home/index');
// });

// Route::get('/index', function () {
//     return view('/Home/index');
// });
	
		
// Route::get('/articles', function () {
//     return view('/Home/articles');
// });

// Route::get('/about', function () {
//     return view('/Home/about');
// });

		
// Route::get('/comment', function () {
//     return view('/Home/comment');
// });	

// Route::get('/article_detail', function () {
//     return view('/Home//article_detail');
// });

// Route::get('/admin/index', function () {
//     return view('/Admin/index');
// });

// Route::get('/admin/main', function () {
//     return view('/Admin/main');
// });




// /*
// -------------------------------------------------------------------------------------------------------------
// 		定义前台路由组
// -------------------------------------------------------------------------------------------------------------
// */
Route::get('/', 'Home\IndexController@index');
Route::namespace('Home')->group(function(){
    
    Route::get('/index', 'IndexController@index');
   
    Route::get('/articles', function () {
        return view('/Home/articles');
    });

    Route::get('/about', function () {
        return view('/Home/about');
    });

            
    Route::get('/comment', function () {
        return view('/Home/comment');
    });  

    Route::get('/article_detail', function () {
        return view('/Home//article_detail');
    });




});
/* 
-------------------------------------------------------------------------------------------------------------
        定义后台路由组
-------------------------------------------------------------------------------------------------------------
*/

Route::get('/admin/user/login','Admin\UserController@login');
Route::any('/admin/user/doLogin','Admin\UserController@doLogin');
Route::any('/admin/user/doLogout','Admin\UserController@logout');
Route::prefix('admin')->namespace('Admin')->middleware('login')->group(function(){  
// Route::prefix('admin')->namespace('Admin')->group(function(){  

//后台主页路由
Route::get('index','IndexController@index');

Route::get('main','IndexController@main');
// ----------------------------------------------------

// 后台用户模块路由
Route::get('allUsers','UserController@allusers');
Route::get('addUser','UserController@adduser');
Route::get('insert/{data}','UserController@insert');
Route::get('delete/{id}','UserController@delete');
Route::get('editUser/{id}','UserController@edit');
Route::post('update/{id}','UserController@update');

Route::get('changePwd','UserController@changepwd');
Route::get('userInfo','UserController@userinfo');


// ----------------------------------------------------

// 后台文章模块路由
Route::get('list','PostController@list');
Route::get('getData','PostController@getData');
Route::get('delPost','PostController@delPost');


Route::get('add','PostController@add');
Route::get('postAdd','PostController@postAdd');


Route::get('postType','PostController@postType');
Route::get('updateType/{data}','PostController@updateType');
Route::get('delType/{data}','PostController@delType');


// ----------------------------------------------------
//公告
Route::get('notice','NoticeController@notice');
Route::any('setNotice','NoticeController@updateNotice');


Route::any('uploadImg','PostController@uploadImg');


// ----------------------------------------------------

// 后台商品类型路由
Route::get('goodbrand','TypeController@goodbrand');
Route::get('goodcolor','TypeController@goodcolor');
Route::get('goodsize','TypeController@goodsize');


// ----------------------------------------------------

// 后台图片管理路由
Route::get('allimages','ImgController@allimages');
Route::get('addimages','ImgController@addimages');



// ----------------------------------------------------

});


