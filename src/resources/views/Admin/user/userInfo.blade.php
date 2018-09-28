<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>个人资料--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/adm/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/adm/css/user.css" media="all" />
</head>
<body class="childrenBody">
	<form class="layui-form">
		<div class="user_left">
			<div class="layui-form-item">
			    <label class="layui-form-label">用户名</label>
			    <div class="layui-input-block">
			    	<input type="text" value="{{$user_detailes->nickName}}" disabled class="layui-input layui-disabled">
			    </div>
			</div>
			<div class="layui-form-item">
			    <label class="layui-form-label">用户组</label>
			    <div class="layui-input-block">
			    	<input type="text" value="{{$user_detailes->userStatus}}" disabled class="layui-input layui-disabled">
			    </div>
			</div>
			<div class="layui-form-item">
			    <label class="layui-form-label">真实姓名</label>
			    <div class="layui-input-block">
			    	<input type="text" value="" placeholder="{{$user_detailes->realName}}" lay-verify="required" class="layui-input">
			    </div>
			</div>
			<div class="layui-form-item" pane="">
			    <label class="layui-form-label">性别</label>
			    <div class="layui-input-block">
			    	<input type="radio" name="sex" value="男" title="男"  {{$user_detailes->sex=='男'?'checked':''}}>
	     			<input type="radio" name="sex" value="女" title="女" {{$user_detailes->sex=='女'?'checked':''}}>
	     			<input type="radio" name="sex" value="保密" title="保密" {{$user_detailes->sex==''?'checked':''}}>
			    </div>
			</div>
			<div class="layui-form-item">
			    <label class="layui-form-label">手机号码</label>
			    <div class="layui-input-block">
			    	<input type="tel" value="{{$user_detailes->phone}}" placeholder="请输入手机号码" lay-verify="required|phone" class="layui-input">
			    </div>
			</div>
			<div class="layui-form-item">
			    <label class="layui-form-label">出生年月</label>
			    <div class="layui-input-block">
			    	<input type="text" value="{{$user_detailes->birthday}}" lay-verify="required|date" onclick="layui.laydate({elem: this,max: laydate.now()})" class="layui-input">
			    </div>
			</div>
			
			<div class="layui-form-item">
			    <label class="layui-form-label">兴趣爱好</label>
			    <div class="layui-input-block">
			    	<input type="checkbox" name="like1[javascript]" title="Javascript"{{in_array('Javascript',$hobby)?'checked':''}} >
				    <input type="checkbox" name="like1[html]" title="HTML(5)"{{in_array('HTML(5)',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[css]" title="CSS(3)"{{in_array('CSS(3)',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[php]" title="PHP"{{in_array('PHP',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[.net]" title=".net"{{in_array('.net',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[ASP]" title="ASP"{{in_array('ASP',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[C#]" title="C#"{{in_array('C#',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[Angular]" title="Angular"{{in_array('Angular',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[VUE]" title="VUE"{{in_array('VUE',$hobby)?'checked':''}}>
				    <input type="checkbox" name="like1[XML]" title="XML"{{in_array('XML',$hobby)?'checked':''}}>
			    </div>
			</div>
			<div class="layui-form-item">
			    <label class="layui-form-label">邮箱</label>
			    <div class="layui-input-block">
			    	<input type="text" value="{{$user_detailes->email}}" placeholder="请输入邮箱" lay-verify="required|email" class="layui-input">
			    </div>
			</div>
			<div class="layui-form-item">
			    <label class="layui-form-label">自我评价</label>
			    <div class="layui-input-block">
			    	<textarea palceholder="输出自我介绍" class="layui-textarea">{{$user_detailes->introduce}}</textarea>
			    </div>
			</div>
		</div>
		<div class="user_right">
			<input type="file" name="dddd" class="layui-upload-file" lay-title="掐指一算，我要换一个头像了">
			<p>由于是纯静态页面，所以只能显示一张随机的图片</p>
			<img src="" class="layui-circle" id="userFace">
		</div>
		<div class="layui-form-item" style="margin-left: 5%;">
		    <div class="layui-input-block">
		    	<button class="layui-btn" lay-submit="" lay-filter="changeUser">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="/adm/layui/layui.js"></script>
	<script type="text/javascript" src="/adm/user/address.js"></script>
	<script type="text/javascript" src="/adm/user/user.js"></script>
</body>
</html>