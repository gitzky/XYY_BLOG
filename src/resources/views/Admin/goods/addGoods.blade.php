<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品添加--layui后台管理模板</title>
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
<p class="edit_title" style="height:30px;border-bottom:1px solid #ccc;margin-bottom:20px;">添加商品</p>
<body class="childrenBody">
	<form class="layui-form" action="" style="width:80%;" method="post">
		{{csrf_field()}}
		<div class="layui-form-item">
			<label class="layui-form-label">商品名称</label>
			<div class="layui-input-block">

				<input type="text" class="layui-input userName" name="userName" lay-verify="required" value="">
			</div>
		</div>
		
		<div class="layui-form-item">
			
		    <div class="layui-inline">
			    <label class="layui-form-label">类型：</label>
				<div class="layui-input-block">
					<select name="userGrade" class="userGrade" lay-filter="userGrade">
						<option value="宝马" 	</option>宝马
						<option value="奔驰"	</option>奔驰
				        <option value="奥迪"	</option>奥迪
				        <option value="大众"	</option>大众
				    </select>
				</div>
		    </div>
		    <div class="layui-inline">
			    <label class="layui-form-label">颜色：</label>
				<div class="layui-input-block">
					<select name="userStatus" class="userStatus" lay-filter="userStatus">
						<option value="白色" </option>白色
						<option value="黑色" </option>黑色
						<option value="银色" </option>银色
				    </select>
				</div>
		    </div>
		     <div class="layui-inline">
			    <label class="layui-form-label">型号：</label>
				<div class="layui-input-block">
					<select name="userStatus" class="userStatus" lay-filter="userStatus">
						<option value="small" </option>small
						<option value="middle" </option>middle
						<option value="big" </option>big
				    </select>
				</div>
		    </div>
		    
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片：</label>

			<div class="layui-input-block">
				<div class="goods_image" style="width:400px;height:200px;border:1px solid #ccc;background:#ccc;text-align:center;line-height:200px;margin-bottom:20px">img</div>
				<input type="file" class="layui-input userName" name="userName" lay-verify="required" value="">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品价格：</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input userName" name="userName" lay-verify="required" value="">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品库存：</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input userName" name="userName" lay-verify="required" value="">
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" type="submit" lay-submit="" lay-filter="editUser">添加</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="/adm/layui/layui.js"></script>
	<script type="text/javascript" src="/adm/user/addUser.js"></script>
</body>
</html>