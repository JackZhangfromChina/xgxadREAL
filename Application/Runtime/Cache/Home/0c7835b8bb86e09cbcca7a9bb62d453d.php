<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>填写资料</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-blue">
	<header class="login-header">
		<a href="<?php echo U('center');?>">
			<div class="header-back">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui_hei@2x.png" />
			</div>
		</a>
	</header>
	<section>
		<div class="lr-icon">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>iconfont_touxiang@2x.png" />
			<p class="red-color">添加头像</p>
		</div>
		<form action="" method="post">
			<ul class="login-box">
				<li>
					<label>昵称</label>
					<input type="text" class="lr-input"  />
					<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
				</li>
				<li>
					<label>性别</label>
					<input type="text" class="lr-input"  />
				</li>
				<li>
					<label>年龄</label>
					<input type="text" class="lr-input"  />
				</li>
				<a href="interest.html"><input type="button" class="lr-button" id="" value="完成" /></a>
			</ul>
		</form>
	</section>
	</body>
</html>