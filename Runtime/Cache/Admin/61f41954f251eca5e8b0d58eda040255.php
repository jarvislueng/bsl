<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<!-- 

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1

Version: 1.3

Author: KeenThemes

Website: http://www.keenthemes.com/preview/?theme=metronic

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

<meta charset="utf-8" />

<title>Metronic | Admin Dashboard Template</title>

<meta content="width=device-width, initial-scale=1.0" name="viewport" />

<meta content="" name="description" />

<meta content="" name="author" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="<?php echo (MEDIA); ?>css/bootstrap.min.css"
	rel="stylesheet" type="text/css" />

<link href="<?php echo (MEDIA); ?>css/bootstrap-responsive.min.css"
	rel="stylesheet" type="text/css" />

<link href="<?php echo (MEDIA); ?>css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />

<link href="<?php echo (MEDIA); ?>css/style-metro.css" rel="stylesheet"
	type="text/css" />

<link href="<?php echo (MEDIA); ?>css/style.css" rel="stylesheet"
	type="text/css" />

<link href="<?php echo (MEDIA); ?>css/style-responsive.css"
	rel="stylesheet" type="text/css" />

<link href="<?php echo (MEDIA); ?>css/default.css" rel="stylesheet"
	type="text/css" id="style_color" />

<link href="<?php echo (MEDIA); ?>css/uniform.default.css"
	rel="stylesheet" type="text/css" />

<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->

<link href="<?php echo (MEDIA); ?>css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />

<link href="<?php echo (MEDIA); ?>css/daterangepicker.css"
	rel="stylesheet" type="text/css" />

<link href="<?php echo (MEDIA); ?>css/fullcalendar.css" rel="stylesheet"
	type="text/css" />

<link href="<?php echo (MEDIA); ?>css/jqvmap.css" rel="stylesheet"
	type="text/css" media="screen" />

<link href="<?php echo (MEDIA); ?>css/jquery.easy-pie-chart.css"
	rel="stylesheet" type="text/css" media="screen" />

<!-- END PAGE LEVEL STYLES -->

<link rel="shortcut icon" href="<?php echo (MEDIA); ?>image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html"> <img
					src="<?php echo (MEDIA); ?>image/logo.png" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed"
					data-toggle="collapse" data-target=".nav-collapse"> <img
					src="<?php echo (MEDIA); ?>image/menu-toggler.png" alt="" />

				</a>

				<!-- END RESPONSIVE MENU TOGGLER -->

				<!-- BEGIN TOP NAVIGATION MENU -->

				<ul class="nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> <img alt=""
							src="<?php echo (MEDIA); ?>image/avatar1_small.jpg" /> <span
							class="username">Bob Nilson</span> <i class="icon-angle-down"></i>

					</a>

						<ul class="dropdown-menu">

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock
									Screen</a></li>

							<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>

						</ul></li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU -->

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->

			<ul class="page-sidebar-menu">

				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div> <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM --> <!-- <form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form> --> <!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="start active "><a
					href="http://localhost/sjby_admin/index.php"> <i class="icon-home"></i>

						<span class="title"></span> <span class="selected"></span>

				</a></li>

				<li class=""><a href="javascript:;"> <i class="icon-cogs"></i> <span
						class="title">系统设置</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="<?php echo U('Admin/SetMenu/addmenu');?>"> 菜单设置 </a>

						</li>

						<li><a href="layout_horizontal_menu1.html"> 权限设置 </a></li>

						<li><a href="layout_horizontal_menu2.html"> 管理员设置 </a></li>

						<li><a href="layout_promo.html"> </a></li>

						<li><a href="layout_email.html"> 管理员日志 </a></li>

						<li><a href="layout_ajax.html"> Content Loading via Ajax</a></li>

						<li><a href="layout_sidebar_closed.html"> Sidebar Closed Page</a>

						</li>

						<li><a href="layout_blank_page.html"> Blank Page</a></li>

						<li><a href="layout_boxed_page.html"> Boxed Page</a></li>

						<li><a href="layout_boxed_not_responsive.html"> Non-Responsive
								Boxed Layout</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-bookmark-empty"></i>

						<span class="title">UI Features</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="ui_general.html"> General</a></li>

						<li><a href="ui_buttons.html"> Buttons</a></li>

						<li><a href="ui_modals.html"> Enhanced Modals</a></li>

						<li><a href="ui_tabs_accordions.html"> Tabs & Accordions</a></li>

						<li><a href="ui_jqueryui.html"> jQuery UI Components</a></li>

						<li><a href="ui_sliders.html"> Sliders</a></li>

						<li><a href="ui_tiles.html"> Tiles</a></li>

						<li><a href="ui_typography.html"> Typography</a></li>

						<li><a href="ui_tree.html"> Tree View</a></li>

						<li><a href="ui_nestable.html"> Nestable List</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-table"></i> <span
						class="title">Form Stuff</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="form_layout.html"> Form Layouts</a></li>

						<li><a href="form_samples.html"> Advance Form Samples</a></li>

						<li><a href="form_component.html"> Form Components</a></li>

						<li><a href="form_wizard.html"> Form Wizard</a></li>

						<li><a href="form_validation.html"> Form Validation</a></li>

						<li><a href="form_fileupload.html"> Multiple File Upload</a></li>

						<li><a href="form_dropzone.html"> Dropzone File Upload</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-briefcase"></i>

						<span class="title">Pages</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="page_timeline.html"> <i class="icon-time"></i>

								Timeline
						</a></li>

						<li><a href="page_coming_soon.html"> <i class="icon-cogs"></i>

								Coming Soon
						</a></li>

						<li><a href="page_blog.html"> <i class="icon-comments"></i> Blog
						</a></li>

						<li><a href="page_blog_item.html"> <i class="icon-font"></i> Blog
								Post
						</a></li>

						<li><a href="page_news.html"> <i class="icon-coffee"></i> News
						</a></li>

						<li><a href="page_news_item.html"> <i class="icon-bell"></i> News
								View
						</a></li>

						<li><a href="page_about.html"> <i class="icon-group"></i> About Us
						</a></li>

						<li><a href="page_contact.html"> <i class="icon-envelope-alt"></i>

								Contact Us
						</a></li>

						<li><a href="page_calendar.html"> <i class="icon-calendar"></i>

								Calendar
						</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-gift"></i> <span
						class="title">Extra</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="extra_profile.html"> User Profile</a></li>

						<li><a href="extra_lock.html"> Lock Screen</a></li>

						<li><a href="extra_faq.html"> FAQ</a></li>

						<li><a href="inbox.html"> Inbox</a></li>

						<li><a href="extra_search.html"> Search Results</a></li>

						<li><a href="extra_invoice.html"> Invoice</a></li>

						<li><a href="extra_pricing_table.html"> Pricing Tables</a></li>

						<li><a href="extra_image_manager.html"> Image Manager</a></li>

						<li><a href="extra_404_option1.html"> 404 Page Option 1</a></li>

						<li><a href="extra_404_option2.html"> 404 Page Option 2</a></li>

						<li><a href="extra_404_option3.html"> 404 Page Option 3</a></li>

						<li><a href="extra_500_option1.html"> 500 Page Option 1</a></li>

						<li><a href="extra_500_option2.html"> 500 Page Option 2</a></li>

					</ul></li>

				<li><a class="active" href="javascript:;"> <i class="icon-sitemap"></i>

						<span class="title">3 Level Menu</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="javascript:;"> Item 1 <span class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 2</a></li>

								<li><a href="#">Sample Link 3</a></li>

							</ul></li>

						<li><a href="javascript:;"> Item 1 <span class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

							</ul></li>

						<li><a href="#"> Item 3 </a></li>

					</ul></li>

				<li><a href="javascript:;"> <i class="icon-folder-open"></i> <span
						class="title">4 Level Menu</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="javascript:;"> <i class="icon-cogs"></i> Item 1 <span
								class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="javascript:;"> <i class="icon-user"></i> Sample
										Link 1 <span class="arrow"></span>

								</a>

									<ul class="sub-menu">

										<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>

										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>

										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>

									</ul></li>

								<li><a href="#"><i class="icon-user"></i> Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i> Sample Link 2</a></li>

								<li><a href="#"><i class="icon-bell"></i> Sample Link 3</a></li>

							</ul></li>

						<li><a href="javascript:;"> <i class="icon-globe"></i> Item 2 <span
								class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="#"><i class="icon-user"></i> Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i> Sample Link 1</a></li>

								<li><a href="#"><i class="icon-bell"></i> Sample Link 1</a></li>

							</ul></li>

						<li><a href="#"> <i class="icon-folder-open"></i> Item 3

						</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-user"></i> <span
						class="title">Login Options</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="login.html"> Login Form 1</a></li>

						<li><a href="login_soft.html"> Login Form 2</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-th"></i> <span
						class="title">Data Tables</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="table_basic.html"> Basic Tables</a></li>

						<li><a href="table_responsive.html"> Responsive Tables</a></li>

						<li><a href="table_managed.html"> Managed Tables</a></li>

						<li><a href="table_editable.html"> Editable Tables</a></li>

						<li><a href="table_advanced.html"> Advanced Tables</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-file-text"></i>

						<span class="title">Portlets</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="portlet_general.html"> General Portlets</a></li>

						<li><a href="portlet_draggable.html"> Draggable Portlets</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-map-marker"></i>

						<span class="title">Maps</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="maps_google.html"> Google Maps</a></li>

						<li><a href="maps_vector.html"> Vector Maps</a></li>

					</ul></li>

				<li class="last "><a href="charts.html"> <i class="icon-bar-chart"></i>

						<span class="title">Visual Charts</span>

				</a></li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">Widget settings form goes here</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<!-- <div class="color-mode-icons icon-color"></div> -->

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default"
										data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label> <span>Layout</span> <select
									class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

								</select>

								</label> <label> <span>Header</span> <select
									class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

								</select>

								</label> <label> <span>Sidebar</span> <select
									class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

								</select>

								</label> <label> <span>Footer</span> <select
									class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

								</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							<!-- Dashboard <small>statistics and more</small> -->

						</h3>

						<ul class="breadcrumb">

							<li><i class="icon-home"></i> <a href="index.html">Home</a> <i
								class="icon-angle-right"></i></li>

							<li><a href="#">Dashboard</a></li>

							<!-- <li class="pull-right no-text-shadow">

								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

									<i class="icon-calendar"></i>

									<span></span>

									<i class="icon-angle-down"></i>

								</div>

							</li> -->

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<div id="dashboard">

					<!-- BEGIN DASHBOARD STATS -->

					<div class="row-fluid">

						<div class="span3 responsive" data-tablet="span6"
							data-desktop="span3">

							<div class="dashboard-stat blue">

								<div class="visual">

									<i class="icon-comments"></i>

								</div>

								<div class="details">

									<div class="number">1349</div>

									<div class="desc">昨日新增用户</div>

								</div>

								<!-- <a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>    -->

							</div>

						</div>

						<div class="span3 responsive" data-tablet="span6"
							data-desktop="span3">

							<div class="dashboard-stat green">

								<div class="visual">

									<i class="icon-shopping-cart"></i>

								</div>

								<div class="details">

									<div class="number">549</div>

									<div class="desc">昨日活跃人数</div>

								</div>

								<!-- <a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>     -->

							</div>

						</div>

						<div class="span3 responsive" data-tablet="span6  fix-offset"
							data-desktop="span3">

							<div class="dashboard-stat purple">

								<div class="visual">

									<i class="icon-globe"></i>

								</div>

								<div class="details">

									<div class="number">+89%</div>

									<div class="desc">昨日充值总额</div>

								</div>
								<!-- 
								<a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>  -->

							</div>

						</div>

						<div class="span3 responsive" data-tablet="span6"
							data-desktop="span3">

							<div class="dashboard-stat yellow">

								<div class="visual">

									<i class="icon-bar-chart"></i>

								</div>

								<div class="details">

									<div class="number">12,5M$</div>

									<div class="desc">昨日付费率</div>

								</div>
								<!-- 
								<a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>    -->

							</div>

						</div>

					</div>

					<!-- END DASHBOARD STATS -->

				</div>

				<!-- END PAGE CONTAINER-->

			</div>

			<!-- END PAGE -->

		</div>

		<!-- END CONTAINER -->

		<!-- BEGIN FOOTER -->

		<div class="footer">

			<div class="footer-inner"></div>

			<div class="footer-tools">

				<span class="go-top"> <i class="icon-angle-up"></i>

				</span>

			</div>

		</div>
		<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->

<script src="<?php echo (MEDIA); ?>js/jquery-1.10.1.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="<?php echo (MEDIA); ?>js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/bootstrap.min.js"
	type="text/javascript"></script>

<!--[if lt IE 9]>

	<script src="<?php echo (MEDIA); ?>js/excanvas.min.js"></script>

	<script src="<?php echo (MEDIA); ?>js/respond.min.js"></script>  

	<![endif]-->

<script src="<?php echo (MEDIA); ?>js/jquery.slimscroll.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.blockui.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.cookie.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.uniform.min.js"
	type="text/javascript"></script>

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.russia.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.world.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.europe.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.germany.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.usa.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.vmap.sampledata.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.flot.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.flot.resize.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.pulsate.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/date.js" type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/daterangepicker.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.gritter.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/fullcalendar.min.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.easy-pie-chart.js"
	type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/jquery.sparkline.min.js"
	type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="<?php echo (MEDIA); ?>js/app.js" type="text/javascript"></script>

<script src="<?php echo (MEDIA); ?>js/index.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   // Index.init();

		   // Index.initJQVMAP(); // init index page's custom scripts

		   // Index.initCalendar(); // init index page's custom scripts

		   // Index.initCharts(); // init index page's custom scripts

		   // Index.initChat();

		   // Index.initMiniCharts();

		   // Index.initDashboardDaterange();

		   // Index.initIntro();

		});

	</script>