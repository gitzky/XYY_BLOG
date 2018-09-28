<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>品牌列表--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/adm/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/adm/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="/adm/css/user.css" media="all" />
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal usersAdd_btn">添加商品品牌</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div>
		<div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">　本页面刷新后除新添加的文章外所有操作无效，关闭页面所有数据重置</div>
		</div>
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>
				<col width="50">
				
				<col width="40%">
				<col width="40%">
				<col width="30%">
			
				
		    </colgroup>
		    <thead>
				<tr>
					<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
					<th>品牌</th>
					
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="">
		    	<tr>
			    	<td><input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose"></td>
		    		
		    		<td>宝马</td>
		    		<td>
						<a class="layui-btn layui-btn-mini users_edit" data-id="'+currData[i].id+'"><i class="iconfont icon-edit"></i> 编辑</a>
						<a class="layui-btn layui-btn-danger layui-btn-mini users_del" data-id="'+currData[i].id+'"><i class="layui-icon">&#xe640;</i> 删除</a>
			        </td>
		    	</tr>
		    	<tr>
			    	<td><input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose"></td>
		    	
		    		<td>奔驰</td>
		    		<td>
						<a class="layui-btn layui-btn-mini users_edit" data-id="'+currData[i].id+'"><i class="iconfont icon-edit"></i> 编辑</a>
						<a class="layui-btn layui-btn-danger layui-btn-mini users_del" data-id="'+currData[i].id+'"><i class="layui-icon">&#xe640;</i> 删除</a>
			        </td>
		    	</tr>
		    	<tr>
			    	<td><input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose"></td>
		    	
		    		<td>奥迪</td>
		    		<td>
						<a class="layui-btn layui-btn-mini users_edit" data-id="'+currData[i].id+'"><i class="iconfont icon-edit"></i> 编辑</a>
						<a class="layui-btn layui-btn-danger layui-btn-mini users_del" data-id="'+currData[i].id+'"><i class="layui-icon">&#xe640;</i> 删除</a>
			        </td>
		    	</tr>
		    	<tr>
			    	<td><input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose"></td>
		    	
		    		<td>大众</td>
		    		<td>
						<a class="layui-btn layui-btn-mini users_edit" data-id="'+currData[i].id+'"><i class="iconfont icon-edit"></i> 编辑</a>
						<a class="layui-btn layui-btn-danger layui-btn-mini users_del" data-id="'+currData[i].id+'"><i class="layui-icon">&#xe640;</i> 删除</a>
			        </td>
		    	</tr>


		    </tbody>
		</table>
	</div>
	<div id="page"></div>
	
</body>
</html>