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

	<div class="layui-form" style="width:90%">
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
				    <select name="type" lay-verify="required" lay-search class="newsType">
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
				<textarea placeholder="请输入内容摘要" class="layui-textarea newsIntro" ></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">摘要配图</label>
			<div class="layui-input-block">
				<span style="display:inline-block;width:160px;height:auto;background-color:#ccc;border:1px solid #ccc">
					<img id="returnImgUrl" style="width:100%;" src="/uploads/image/20180927/1538035664471130.jpg" alt="">
				</span>
				<input type="hidden" name="photo" value="" class="newsIntroImg">
				<div id="app"></div>
				
				 
				
			</div>
		</div>
		<div class="layui-form-item"style="height:400px">
			<label class="layui-form-label">文章内容</label>
			<div class="layui-input-block">
		    	<textarea style="position:absolute;z-index:0;width:100%;height:350px;" name="contents" id="contents" >111</textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addNews">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>

	</div>


		  	
		

	<script type="text/javascript" src="/adm/layui/layui.js"></script>
	<script type="text/javascript" src="/adm/post/postAdd.js"></script>
</body>
</html>


​

<script src="/js/jquery.min.js"></script>
<script src="/js/uploadImg.js"></script>

<script>
/*
1.引入uploadImg.js
2. el:绑定需要上传图片的按钮("#id")
3. url:图片上传请求接口
3. seccess:成功后的回调

*/





window.onload=function(){


	UploadImg({
		el:"#app",
		url:"/admin/uploadImg",
		success:function (res){
			$("#returnImgUrl")[0].src=res;

		}
	})
}

</script>