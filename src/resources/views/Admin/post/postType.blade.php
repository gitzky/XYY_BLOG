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
	<script src="/js/jquery.min.js"></script>
</head>
<body class="childrenBody">
	<form class="layui-form" style="width:80%">
			

		<div class="layui-collapse" lay-accordion style="margin:30px">
		  <div class="layui-colla-item">
		    <h2 class="layui-colla-title">文章类别</h2>
		    <div class="layui-colla-content layui-show">
		    	<div class="layui-btn-container "id="typeWrap">
		    		@forelse($res as $v)
		    		<span id="{{$v->id}}" class="{{$v->class}}" style="display:inline-block;margin:10px"><span isInDataBase="{{$v->in}}" class="title">{{$v->type}}</span><i class="layui-icon">  &#x1006;</i></span>
		    		@empty
		    		<span>暂时没有类别，您可以添加类别</span>
		    		@endforelse
		    	</div>
		    </div>
		  </div>

		  <div class="layui-colla-item">
		   	<div class="layui-form-item">
			    <label class="layui-form-label">新增类别</label>
			    <div class="layui-input-block">
			    	<input type="text" style="margin-top:15px"  value="" placeholder="请输入类别" id="titleType" class="layui-input">
			    </div>
			</div>
		  </div>
		</div>
		
		
			
		<div class="layui-form-item" style="margin-left: 5%;">
		    <div class="layui-input-block">
				<button type="button" class="layui-btn addType layui-btn-primary" lay-filter="addType">添加</button>
		    	<button class="layui-btn" lay-submit="" lay-filter="changeType">立即提交</button>
		    </div>
		</div>
	</form>
	 <script type="text/javascript" src="/adm/layui/layui.js"></script>
	 <script type="text/javascript" src="/adm/post/type.js"></script>
</body>
</html>
<script>




</script>