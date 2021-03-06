<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Mosaddek">
<meta name="keyword"
	content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<link rel="shortcut icon" href="/Public/img/favicon.html">

<title>奔·八路后台登录</title>

<!-- Bootstrap core CSS -->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/css/bootstrap-reset.css" rel="stylesheet">
<!--&lt;!&ndash;external css&ndash;&gt;-->
<link href="/Public/assets/font-awesome/css/font-awesome.css"
	rel="stylesheet" />
<!--&lt;!&ndash; Custom styles for this template &ndash;&gt;-->
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/style-responsive.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.8.3.min.js"></script>
<script src="/Public/js/sha1.js"></script>
<script src="/Public/js/md5.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
    <script src="/Public/js/html5shiv.js"></script>
    <script src="/Public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body">
	<input type="hidden" id="code" value="<?php echo ($code); ?>"
		style="display: none;" />
	<input type="hidden" id="stamp" value="<?php echo ($stamp); ?>"
		style="display: none;" />
	<div class="container">
		<form class="form-signin" id="loginForm"
			action="<?php echo U('Admin/Login/login/checkLogin');?>"
			method="post">
			<h2 class="form-signin-heading">登录</h2>
			<div class="login-wrap">
				<input type="text" id="account" name="account" class="form-control"
					placeholder=" 请 输 入 帐 号 "> <input type="password" id="password"
					name="password" class="form-control" placeholder=" 请 输 入 密 码 "> <label
					class="checkbox"> <input type="checkbox" value="remember-me"> 记住密码
					<span class="pull-right"> <a href="#"> 找回密码?</a></span>
				</label>
				<button class="btn btn-lg btn-login btn-block" type="submit"
					name="sub" value="登 录">登 录</button>
				<div>
					<p style="color: red"><?php echo ($errMsg); ?></p>
				</div>
			</div>
		</form>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#loginForm').submit(function(){
			var account  = $('#account').val();
			var password = $('#password').val();

			if (account == "" || password == "") {
				alert("帐号和密码不能为空");
				return false;
			}

			var code  	  = $('#code').val();
			var stamp 	  = $('#stamp').val();
			var final_pwd = Sha1.hash(code.toString() + hex_md5(password) + stamp.toString());
			$('#password').val(final_pwd);
			return true;
		});
	});
</script>
</body>
</html>