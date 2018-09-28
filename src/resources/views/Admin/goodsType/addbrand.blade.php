<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>会员添加--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/adm/layui/css/layui.css" media="all" />
	<style type="text/css">
		.layui-form-item .layui-inline{ width:33.333%; float:left; margin-right:0; }
		@media(max-width:1240px){
			.layui-form-item .layui-inline{ width:100%; float:none; }
		}
	</style>
</head>
<p class="edit_title" style="height:30px;border-bottom:1px solid #ccc;margin-bottom:20px;">修改会员</p>
<body class="childrenBody">
	<form class="layui-form" action="/admin/update/{{$res[0]->id}}" style="width:80%;" method="post">
		{{csrf_field()}}
		<div class="layui-form-item">
			<label class="layui-form-label">登录名</label>
			<div class="layui-input-block">

				<input type="text" class="layui-input userName" name="userName" lay-verify="required" value="{{$res[0]->userName}}">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">邮箱</label>
			<div class="layui-input-block">
				<input type="text" name="userEmail" class="layui-input userEmail" lay-verify="email" value="{{$res[0]->userEmail}}">
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-inline">
			    <label class="layui-form-label">性别</label>
			    <div class="layui-input-block userSex">
			      	<input type="radio" name="userSex"  value="男" title="男" {{$res[0]->userSex=='男'?'checked':''}}>
			      	<input type="radio" name="userSex" value="女" title="女"  {{$res[0]->userSex=='男'?'':'checked'}}>
			      	<input type="radio" name="userSex" value="" title="保密">
			    </div>
		    </div>
		    <div class="layui-inline">
			    <label class="layui-form-label">会员等级</label>
				<div class="layui-input-block">
					<select name="userGrade" class="userGrade" lay-filter="userGrade">
						<option value="注册会员" 	{{$res[0]->userGrade=='注册会员'?'selected':''}}>注册会员</option>
						<option value="中级会员"	{{$res[0]->userGrade=='中级会员'?'selected':''}}>中级会员</option>
				        <option value="高级会员"	{{$res[0]->userGrade=='高级会员'?'selected':''}}>高级会员</option>
				        <option value="超级会员"	{{$res[0]->userGrade=='超级会员'?'selected':''}}>超级会员</option>
				    </select>
				</div>
		    </div>
		    <div class="layui-inline">
			    <label class="layui-form-label">会员状态</label>
				<div class="layui-input-block">
					<select name="userStatus" class="userStatus" lay-filter="userStatus">
						<option value="正常使用" {{$res[0]->userStatus=='正常使用'?'selected':''}}>正常使用</option>
						<option value="限制用户" {{$res[0]->userStatus=='限制用户'?'selected':''}}>限制用户</option>
				    </select>
				</div>
		    </div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">站点描述</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入站点描述" name="linksDesc" class="layui-textarea linksDesc"></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" type="submit" lay-submit="" lay-filter="editUser">立即修改</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="/adm/layui/layui.js"></script>
	<script type="text/javascript" src="/adm/user/addUser.js"></script>
</body>
</html>