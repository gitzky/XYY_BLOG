@extends('Home/layouts/index');
<!-- 导航区；替换区块占位的li标签的class内容。当前页的导航名高亮 -->

@section('index', '')
@section('about', '')
@section('articles', '')
@section('comment', 'active')
<!-- //内容区板块占位替换、content内容 -->
@section('content')

<link rel="stylesheet" type="text/css" href="css/common.css"/>




		<div class="container">
			<div class="row w_main_row">
				<ol class="breadcrumb w_breadcrumb">
				  <li><a href="#">首页</a></li>
				  <li class="active">评论</li>
				  <span class="w_navbar_tip">你，生命中最重要的过客，之所以是过客，因为你未曾为我停留。</span>
				</ol>
				
				<div class="col-lg-9 col-md-9 w_main_left">
					
					
					
					<!--PC版-->
					<!--<div id="SOHUCS" sid="5eab7e4c363e4cb8bed0efa3604e6b42"></div>
					<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
					<script type="text/javascript">
					window.changyan.api.config({
					appid: 'cysPwLFm1',
					conf: 'prod_6c6350e206c502f569b865b4bf121e60'
					});
					</script>-->
					
					<!-- 多说评论框 start -->
						<div class="ds-thread" data-thread-key="5eab7e4c363e4cb8bed0efa3604e6b42" data-title="请替换成文章的标题" data-url="请替换成文章的网址"></div>
					<!-- 多说评论框 end -->
					<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
					<script type="text/javascript">
					
						</script>
					<!-- 多说公共JS代码 end -->

					
					
				</div>
				<div class="col-lg-3 col-md-3 w_main_right">
					<img src="img/slider/aboutphoto.png" />
				</div>


			
			
			</div>
		</div>
@endsection