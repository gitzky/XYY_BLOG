<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>小元元博客</title>
	

	<link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="shortcut icon" type="image/x-icon" href="home/favicon.ico" />
	<link href="/favicon.ico" rel="shortcut icon"/>



	</head>

	<script src="js/jquery.min.js"></script>
	<script src="plugin/jquery.min.js"></script>
	<script src="plugin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugin/jquery.page.js"></script>
	<script src="js/common.js"></script>
	<!--<script src="js/snowy.js"></script>-->

	<body>

		<div class="w_header">
			<div class="container">
				<div class="w_header_top">
					<a href="#" class="w_logo"></a>
					<span class="w_header_nav">

					 <!-- <!‐‐ 这里是一个class的区块占位（单行占位） ‐‐> -->

					<ul>
						<li><a href="/" class="@yield('index')">首页</a></li>
						<li><a href="articles" class="@yield('articles')">文章</a></li>
						<li><a href="about" class="@yield('about')">关于</a></li>
						<li><a href="comment" class="@yield('comment')">留言</a></li>
					</ul>

					<!-- <!‐‐ 这里是一个区块占位 ‐‐> -->
				</span>
					<div class="w_search">
						<div class="w_searchbox">
							<input type="text" placeholder="search" />
							<button>搜索</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	
					
	  	<!-- ==================区块占位（内容区占位）================= -->

		<div class="w_container">

		     @yield('content')
		  
		</div>

		<!-- ===================区块占位结束=================================== -->

		<div class="w_foot">
			<div class="w_foot_copyright">Copyright &copy; 2017-2020, www.genban.org. All Rights Reserved. <span>|</span>
				<a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow">皖ICP备17002922号</a>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		var $backToTopEle = $('<a href="javascript:void(0)" class="Hui-iconfont toTop" title="返回顶部" alt="返回顶部" style="display:none">^</a>').appendTo($("body")).click(function() {
			$("html, body").animate({ scrollTop: 0 }, 120);
		});
		var backToTopFun = function() {
			var st = $(document).scrollTop(),
				winh = $(window).height();
			(st > 0) ? $backToTopEle.show(): $backToTopEle.hide();
			/*IE6下的定位*/
			if(!window.XMLHttpRequest) {
				$backToTopEle.css("top", st + winh - 166);
			}
		};

		$(function() {
			$(window).on("scroll", backToTopFun);
			backToTopFun();
		});
	</script>

</html>