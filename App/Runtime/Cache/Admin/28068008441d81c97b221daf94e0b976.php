<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Mosaddek">
<meta name="keyword"
	content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<link rel="shortcut icon" href="/Public/img/favicon.html">

<title>奔·八路后台</title>

<!-- Bootstrap core CSS -->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/css/bootstrap-reset.css" rel="stylesheet">
<!--external css-->
<link href="/Public/assets/font-awesome/css/font-awesome.css"
	rel="stylesheet" />
<link
	href="/Public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"
	rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="/Public/css/owl.carousel.css"
	type="text/css">
<!-- Custom styles for this template -->
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/style-responsive.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="all"
	href="/Public/css/daterangepicker.css" />
<link rel="stylesheet" type="text/css" media="all"
	href="/Public/css/bootstrap-table.min.css" />
<link rel="stylesheet" type="text/css" media="all"
	href="/Public/css/mystyle.css" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
    <script src="/Public/js/html5shiv.js"></script>
    <script src="/Public/js/respond.min.js"></script>
    <![endif]-->
<!--Frist load js-->
<!-- <script src="/Public/js/jquery.js"></script> -->
<script src="/Public/js/jquery-1.8.3.min.js"></script>
</head>

<body class="default-bg-color">

	<section id="container" class="white-bg">
		<!--header start-->
		<header class="header default-bg-color">
			<div class="sidebar-toggle-box">
				<div data-original-title="Toggle Navigation" data-placement="right"
					class="icon-reorder tooltips"></div>
			</div>
			<!--logo start-->
			<a href="#" class="logo">后台<span>管理</span></span></a>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu"></div>
			<div class="top-nav ">
				<!--search & user info start-->
				<ul class="nav pull-right top-menu">
					<li><input type="text" class="form-control search"
						placeholder="Search"></li>
					<!-- user login dropdown start-->
					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="#"> <img alt=""
							src="/Public/img/avatar1_small.jpg"> <span class="username"><?php echo ($user_info["username"]); ?></span>
							<b class="caret"></b>
					</a>
						<ul class="dropdown-menu extended logout">
							<div class="log-arrow-up"></div>
							<li><a href="#"><i class=" icon-suitcase"></i>暂无</a></li>
							<li><a href="<?php echo U('Admin/Login/Login/changePwd');?>"><i
									class="icon-cog"></i>修改密码</a></li>
							<li><a href="#"><i class="icon-bell-alt"></i>暂无</a></li>
							<li><a href="<?php echo U('Admin/Login/Login/loginOut');?>"><i
									class="icon-key"></i>退出系统</a></li>
						</ul></li>
					<!-- user login dropdown end -->
				</ul>
				<!--search & user info end-->
			</div>
		</header>
		<!--header end-->
		<!--sidebar start-->
		<section class="navbar-left">
			<div id="sidebar" class="nav-collapse clearfix">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu clearfix">
					<li class=""><a class=""
						href="<?php echo U('Admin/Settings/Index/index');?>"> <i
							class="icon-dashboard"></i> <span>首页</span>
					</a></li>
					<li class="sub-menu active"><a href="javascript:void(0);" class="">
							<i class="icon-cogs"></i> <span>设置</span> <span class="arrow"></span>
					</a>
						<ul class="sub">
							<li><a class=""
								href="<?php echo U('Admin/Article/Index/index');?>">资讯文章</a></li>
							<li><a class="" href="#">单页管理</a></li>
							<li><a class="" href="#">人员展示</a></li>
							<li><a class="" href="#">底部设置</a></li>
							<li><a class="" href="#">首页轮播图片</a></li>
							<li><a class="" href="#">导航栏</a></li>
							<li><a class="" href="#">友情链接</a></li>
						</ul></li>
				</ul>
				<!-- sidebar menu end-->
			</div>
		</section>
		<!--sidebar end-->
		<script type="text/javascript">
    	$(function(){
    		var url  = window.location.href;
    		var ele  = $("#sidebar a");
    		var nav  = $('#menu_breadcrumb').html();
    		var flag = 1;
    		if (nav != null) {
    			for(var i = ele.length - 1; i >= 0; i--) {
    				if (nav == ele[i].innerHTML) {
	    				$(ele[i].parentNode).addClass("active");
	    				$(ele[i].parentNode.parentNode.parentNode).addClass("active");
	    				flag = 0;
	    				break;
    				}
    			}

    		}
    		if (flag) {
    			for(var i = 0, n = ele.length; i < n; i++) {
	    			var href 	 = ele[i].href;
	    			var href_arr = href.split(/\/[^\/]*.html/);
	    			if (url.indexOf(href_arr[0]) == 0) {
                        $(ele[i].parentNode).addClass("active");
	    				$(ele[i].parentNode.parentNode.parentNode).addClass("active");
	    				break;
	    			}
	    		}
    		}
    	});
    </script>
		<!--main content start-->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<!--state overview start-->
				<div class="row state-overview">
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol terques">
								<i class="icon-user"></i>
							</div>
							<div class="value">
								<h1>22</h1>
								<p>新增用户</p>
							</div>
						</section>
					</div>
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol red">
								<i class="icon-tags"></i>
							</div>
							<div class="value">
								<h1>140</h1>
								<p>新增充值</p>
							</div>
						</section>
					</div>
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol yellow">
								<i class="icon-shopping-cart"></i>
							</div>
							<div class="value">
								<h1>345</h1>
								<p>活跃人数</p>
							</div>
						</section>
					</div>
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol blue">
								<i class="icon-bar-chart"></i>
							</div>
							<div class="value">
								<h1>34,500</h1>
								<p>在线人数</p>
							</div>
						</section>
					</div>
				</div>
				<!--state overview end-->
			</section>
		</section>
		<!--script for this page-->
		<!--main content end-->
	</section>
</body>
<!-- js placed at the end of the document so the pages load faster -->
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/jquery.scrollTo.min.js"></script>
<script src="/Public/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/Public/js/jquery.sparkline.js" type="text/javascript"></script>
<script
	src="/Public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/Public/js/owl.carousel.js"></script>
<script src="/Public/js/jquery.customSelect.min.js"></script>
<script type="text/javascript" src="/Public/js/moment.min.js"></script>
<script type="text/javascript" src="/Public/js/daterangepicker.js"></script>
<script src="/Public/js/bootstrap-table.min.js"></script>
<script src="/Public/js/bootstrap-table-zh-CN.min.js"></script>
<script src="/Public/js/bootbox.min.js"></script>
<script src="/Public/js/myjs.js"></script>
<script src="/Public/js/bootstrap-switch.js"></script>

<!--common script for all pages-->
<script src="/Public/js/common-scripts.js"></script>
</html>