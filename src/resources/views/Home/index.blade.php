@extends('Home/layouts/index');
<!-- 导航区；替换区块占位的li标签的class内容。当前页的导航名高亮 -->

@section('index', 'active')
@section('articles', '')
@section('about', '')
@section('comment', '')
<!-- //内容区板块占位替换、content内容 -->
@section('content')

<div class="container">
	<div class="row w_main_row">
		
		<!--左侧开始-->
		<div class="col-lg-9 col-md-9 w_main_left">
			
			<!--轮播图开始-->
			<div class="panel panel-default">

				<div id="w_carousel" class="carousel slide w_carousel" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#w_carousel" data-slide-to="0" class="active"></li>
						<li data-target="#w_carousel" data-slide-to="1"></li>
						<li data-target="#w_carousel" data-slide-to="2"></li>
						<li data-target="#w_carousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/slider/slide1.jpg" alt="...">
							<div class="carousel-caption">
								<h3>First slide label</h3>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
						<div class="item">
							<img src="img/slider/slide2.jpg" alt="...">
							<div class="carousel-caption">...</div>
						</div>
						<div class="item">
							<img src="img/slider/slide3.jpg" alt="...">
							<div class="carousel-caption">...</div>
						</div>
						<div class="item">
							<img src="img/slider/slide4.jpg" alt="...">
							<div class="carousel-caption">...</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#w_carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#w_carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>



			<div class="panel panel-default contenttop">
				<a href="article_detail.html">
					<strong>博主置顶</strong>
					<h3 class="title">嫁人就嫁程序员</h3>
					<p class="overView">个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中。。。</p>
				</a>
			</div>



			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">最新发布</h3>
				</div>

				<div class="panel-body">

					<!--文章列表开始-->
					<div class="contentList">

						@forelse($list as $v)
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="contentleft">
									<h4><a class="title" href="article_detail">{{$v->newsName}}</a></h4>
									<p>
										<a class="label label-default">Nginx</a>
										<a class="label label-default">tomcat负载均衡</a>
									</p>
									<p class="overView">{{$v->newsIntro}}</p>
									<p><span class="count"><i class="glyphicon glyphicon-user"></i><a href="#">admin</a></span> <span class="count"><i class="glyphicon glyphicon-eye-open"></i>阅读:1003</span><span class="count"><i class="glyphicon glyphicon-comment"></i>评论:2</span><span class="count"><i class="glyphicon glyphicon-time"></i>2017-01-16</span></p>
								</div>
								<div class="contentImage">
									<div class="row">
										<a href="#" class="thumbnail w_thumbnail">
											<img src="{{$v->newsIntroImg}}" alt="...">
										</a>
									</div>
								</div>
							</div>
						</div>
						@empty
						<h2>暂时没有文章</h2>
						@endforelse
						
						

					</div>
					<!--文章列表结束-->

				</div>
			</div>
		
		</div>

		<!--右侧开始-->
		<div class="col-lg-3 col-md-3 w_main_right">

			<div class="panel panel-default sitetip">
				<a class="notice" href="article_detail.html">
					<strong>站点公告</strong>
					<h3 class="title">{!! $title !!}</h3>
					<p class="overView">{!! $content !!}</p>
				</a>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">热门标签</h3>
				</div>
				<div class="panel-body">
					<div class="labelList">
					@forelse($postTypes as $v)
						<a class="label label-default" href="#">{{$v->type}}</a>
					@empty
						<a href="javascript:;">暂无热门标签</a>
					@endforelse		
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">热门文章</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled sidebar">
						<li>
							<a href="/post/04928311">排序算法之冒泡排序 － java实现</a>
						</li>
						<li>
							<a href="/post/32097759">快速搭建基于二进制日志文件的 mysql 复制</a>
						</li>
						<li>
							<a href="/post/09196557">web 服务器负载均衡教程，快速搭建高可用服务器集群</a>
						</li>
						<li>
							<a href="/post/20654391">使用 redis 和 spring-session 实现 tomcat、glassfish 等 web 服务器集群 session 共享</a>
						</li>
						<li>
							<a href="/post/41501569">使用 Nginx 实现 tomcat、glassfish 等 web 服务器负载均衡</a>
						</li>
						
					</ul>
				</div>
			</div>

			

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">关注微信公众号</h3>
				</div>
				<div class="panel-body">
					<img src="img/qrcode.jpg" style="height: 230.5px;width: 230.5px;" />
				</div>
			</div>

		</div>
	</div>
</div>
		


<!-- 内容区结束 -->
 

 @endsection