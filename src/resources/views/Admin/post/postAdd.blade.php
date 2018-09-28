<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文章添加--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/adm/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/adm/css/font_eolqem241z66flxr.css" media="all" />
	<script src="/uedit/ueditor.config.js"></script>
	<script src="/uedit/ueditor.all.js"></script>
</head>
<body class="childrenBody">
	<form class="layui-form" style="width:90%">
		<div class="layui-form-item">
			<label class="layui-form-label">文章标题</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input newsName" lay-verify="required" placeholder="请输入文章标题">
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-inline">		
				<label class="layui-form-label">文章作者</label>
				<div class="layui-input-inline">
					<input type="text" class="layui-input newsAuthor" lay-verify="required" placeholder="请输入文章作者">
				</div>
			</div>
			<div class="layui-inline" >		
				<label class="layui-form-label">文章类别</label>
			    <div class="layui-input-block">
				    <select name="type" lay-verify="required" lay-search>
						<option value=""></option>
						@foreach($res as $v)
					   	<option value="{{$v->type}}">{{$v->type}}</option>
					    @endforeach
					</select> 	
			    </div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">发布时间</label>
				<div class="layui-input-inline">
					<input type="text" class="layui-input newsTime" lay-verify="date" onclick="layui.laydate({elem:this})">
				</div>
			</div>


			
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">关键字</label>
			<div class="layui-input-block">
				@foreach($res as $v)
				<input type="checkbox" name="" title="{{$v->type}}" >
				@endforeach
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">内容摘要</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入内容摘要" class="layui-textarea" ></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">摘要配图</label>
			<div class="layui-input-block">
				<span style="display:inline-block;width:160px;height:160px;background-color:#ccc;border:1px solid #ccc">
					<img style="width:100%;" src="/uploads/image/20180927/1538035664471130.jpg" alt="">
				</span>
				<span style="display:inline-block;position:absolute;top:125px;left:180px">
				
				  	<input type="file" name="file" >
				
				</span>
				
			</div>
		</div>
		<div class="layui-form-item"style="height:400px">
			<label class="layui-form-label">文章内容</label>
			<div class="layui-input-block">
		    	<textarea style="position:absolute;z-index:0;width:100%;height:350px;" name="contents" id="contents" ></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addNews">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="/adm/layui/layui.js"></script>
	<script type="text/javascript" src="/adm/post/postAdd.js"></script>
</body>
</html>
<script>
layui.use('upload', function(){
  layui.upload({
	  url: '/admin/uploadImg'
	  ,success: function(res){
	    console.log(res); //上传成功返回值，必须为json格式
	  }
	});   
});
 
</script>