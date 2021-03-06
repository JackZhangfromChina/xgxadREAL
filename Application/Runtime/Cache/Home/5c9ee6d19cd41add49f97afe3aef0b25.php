<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>登录</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>  
	</head>
	<body class="bj-blue">
	<header class="login-header">
		登录
	</header>
	<section>
		<form action="<?php echo U('User/login');?>" method="post">
			<ul class="login-box">
				<li>
					<label>手机</label>
					<input type="text" class="lr-input telephone" name="telephone" id="" placeholder="请输入手机号" />
					<span class="clear"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Login_Shanchu@2x.png"/></span>
				</li>
				<li>
					<label>密码</label>
					<input type="password"class="lr-input password" name="password"  placeholder="请输入密码" />
					<span class="show-none"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Login_Biyan@2x.png" class="lr-img"/></span>
				</li>
				<input type="submit" class="lr-button" id="login" value="登录" />
				<p>
					<a href="register.html" class="red-color">立即注册</a>
					<a href="modifyPwd.html" class="gray-color">忘记密码？</a></p>
			</ul>
		<p class="show-content"></p>
		</form>
	</section>
	</body>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
</html>