<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>公告添加--layui后台管理模板</title>
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
	<h1 style="font-size:20px;padding:0 3%">公告</h1>
	<div class="layui-collapse" lay-accordion style="margin:30px;width:80%">
	    
	    <div class="layui-colla-item">
		    <h2  id="noticeTitle" class="layui-colla-title">{!! $title !!}</h2>
		    <div class="layui-colla-content layui-show">
		    	<div class="layui-btn-container "id="noticeWrap">
		    		{!! $content !!}
		    	</div>
		    </div>
		</div>

	  	
	</div>

	<form class="layui-form" style="">
		<div class="layui-collapse" lay-accordion style="margin:30px;width:80%">
		  
	  		<input type="text" name="title"  id="title" placeholder="请输入标题"  autocomplete="off" class="layui-input">

		  	<div class="layui-colla-item" style="width:100%;">
		    	<div class="layui-colla-content layui-show">
		    		<div class="layui-btn-container">
		    			<textarea class="layui-form-item" style=" width:100%;height:300px"  name="contents" id="contents" ></textarea>
		    		</div>
		    	</div>
		  	</div>
		</div>
			<!-- <textarea name="contents" id="contents" style="width:100%; height: 400px;"  lay-verify="contents"></textarea> -->
		<div class="layui-form-item" style="margin-left:3%;">
		    <span id="btn" class="layui-btn" lay-submit="" lay-filter="changeType">立即发布</span>
		</div>
	</form>
</body>
</html>

<script src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/adm/layui/layui.js"></script>
<script>

layui.config({
	base : "/adm/js/"
}).use(['layer','jquery'],function(){
	
	layer = parent.layer === undefined ? layui.layer : parent.layer;
	
 	var ue=UE.getEditor('contents'); 

	$("#btn").click(function(){
		var title=$("#title").val();
		var html = ue.getContent()
		// location.href="/admin/setNotice"
		 $("#noticeWrap").html(html)
		 $("#noticeTitle").html(title)
		 $.get("/admin/setNotice",{content:html,title:title},function(data){
		 	 if(data){
		 	 	layer.msg('公告发布成功')
		 	 }
		 })

	})

})
</script>