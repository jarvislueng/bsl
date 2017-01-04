<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
					<li class="sub-menu active"><a href="javascript:void(0);"
						class=""> <i class="icon-cogs"></i> <span>设置</span> <span
							class="arrow"></span>
					</a>
						<ul class="sub">
							<li><a class="" href="<?php echo U('Admin/Article/Index/index');?>">资讯文章</a></li>
							<li><a class="" href="#">首页轮播图片</a></li>
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
<section id="main-content">
	<section class="wrapper">
		<!--breadcrumbs start -->
		<div class="col-lg-12">
			<ul class="breadcrumb">
				<li><a href=""><i class="icon-home"></i> 首页</a></li>
				<li><a href="#">系统设置</a></li>
				<li class="active" id='menu_breadcrumb'>资讯文章</li>
			</ul>
		</div>
		<!--breadcrumbs end -->
		<div class="col-lg-12">
			<div id="toolbar">
	<?php if($toolbar_form_param != null) {?>
	<div style="float: left;">
		<form class="form-inline" role="form" id="<?php echo ($tablename); ?>_search_form">
			<?php if(is_array($toolbar_form_param)): foreach($toolbar_form_param as $key=>$toolbar): if($toolbar['type'] == 1): ?><div class="form-group" style="float: left; margin-right: 20px;">
				<label><?php echo ($toolbar['field_title']); ?> </label> <input type="text"
					name="<?php echo ($toolbar['field_name']); ?>" id="<?php echo ($toolbar['field_id']); ?>"
					class="form-control"
					style="width: auto; margin-left: 5px; <?php echo ($toolbar['style']); ?>"
					value="<?php echo ($toolbar['default_value']); ?>" />
			</div>
			<?php elseif($toolbar['type'] == 2): ?>
			<div class="form-group" style="float: left; margin-right: 20px;">
				<label><?php echo ($toolbar['field_title']); ?> </label> <select
					id="<?php echo ($toolbar['field_id']); ?>" name="<?php echo ($toolbar['field_name']); ?>"
					class="form-control"
					style="width: auto; margin-left: 5px; <?php echo ($toolbar['style']); ?>">
					<?php if(is_array($toolbar['option'])): foreach($toolbar['option'] as $key=>$options): if($toolbar['default_value'] == $options['key']): ?><option value="<?php echo ($options['key']); ?>" selected="true"><?php echo ($options['value']); ?></option>
					<?php else: ?>
					<option value="<?php echo ($options['key']); ?>"><?php echo ($options['value']); ?></option><?php endif; endforeach; endif; ?>
				</select>
			</div>
			<?php elseif($toolbar['type'] == 3): ?>
			<div class="form-group" style="float: left; margin-right: 20px;">
				<label><?php echo ($toolbar['field_title']); ?> </label>
				<div class="datepicker"
					style="margin-bottom: 2px; width: 150px; padding: 0px 15px 0px 0px; margin-left: 5px; <?php echo ($toolbar['style']); ?>">
					<input type="text" id="<?php echo ($toolbar['field_id']); ?>"
						name="<?php echo ($toolbar['field_name']); ?>"
						class="single_date_picker form-control"
						value="<?php echo ($$toolbar['default_value']); ?>"> <i
						class="glyphicon glyphicon-calendar fa fa-calendar"></i>
				</div>
			</div>
			<?php elseif($toolbar['type'] == 4): ?>
			<div class="form-group" style="float: left; margin-right: 20px;">
				<label><?php echo ($toolbar['field_title']); ?> </label>
				<div class="datepicker"
					style="margin-bottom: 2px; width: 250px; padding: 0px 15px 0px 0px; margin-left: 5px; <?php echo ($toolbar['style']); ?>">
					<input type="text" id="<?php echo ($toolbar['field_id']); ?>"
						name="<?php echo ($toolbar['field_name']); ?>"
						class="double_date_picker form-control"
						value="<?php echo ($$toolbar['default_value']); ?>"> <i
						class="glyphicon glyphicon-calendar fa fa-calendar"></i>
				</div>
			</div><?php endif; endforeach; endif; ?>
		</form>
	</div>
	<div style="float: left; margin-right: 20px;">
		<button type="button" id="<?php echo ($tablename); ?>_search"
			class="btn btn-primary">查询</button>
	</div>
	<?php } ?>
	<?php if(is_array($toolbar_btn_param)): foreach($toolbar_btn_param as $key=>$toolbar_btn): ?><div style="float: left;">
		<button type="button" id="<?php echo ($toolbar_btn['field_id']); ?>"
			name="<?php echo ($toolbar_btn['field_name']); ?>"
			class="btn <?php echo ($toolbar_btn['class']); ?>"
			onclick="<?php echo ($toolbar_btn['default_value']); ?>"><?php echo ($toolbar_btn['field_title']); ?></button>
	</div><?php endforeach; endif; ?>
</div>
<table id="<?php echo ($tablename); ?>_table"></table>


<script type="text/javascript">
$(function(){
	$_table = $("#<?php echo ($tablename); ?>_table");
	$_table.bootstrapTable(
		<?php echo ($table_param); ?>
	);
	
	$("#<?php echo ($tablename); ?>_search").click(function(){
		var content = $("#<?php echo ($tablename); ?>_search_form").serialize();
		var url = "<?php echo ($table_url); ?>";
		if (url.indexOf('?') != -1) {
			url += '&' + content;
		} else {
			url += '?' + content;
		}
		$_table.bootstrapTable('refresh',{url:url});
	});
});

</script>
		</div>
	</section>
</section>
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