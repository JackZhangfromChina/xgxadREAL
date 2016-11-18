<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>注册</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-blue">
		<header class="login-header">
			<a href="#">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont_Fanhui_hei@2x.png" />
				</div>
			</a>
			注册
		</header>
		<section>
			<form action="" method="post">
				<ul class="login-box">
					<li>
						<label>手机</label>
						<input type="text" class="lr-input telephone" placeholder="请输入用户名" />
						<span class="clear"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Login_Shanchu@2x.png"/></span>
					</li>
					<li>
						<label>验证码</label>
						<input type="text" class="lr-input" class="confirm" placeholder="请输入验证码" />
						<span>
							<input type="button" class="lr-yzm" name="" id="code" value="验证码" />
						</span>
					</li>
					<li>
						<label>密码</label>
						<input type="text"class="lr-input password"  placeholder="请创建不少于6位密码" />
						<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Login_Biyan@2x.png" class="lr-img"/></span>
					</li>
					<input type="button" class="lr-button" id="next" value="下一步" />
				</ul>
			</form>
			<p class="show-content"></p>
		</section>
	</body>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
</html>