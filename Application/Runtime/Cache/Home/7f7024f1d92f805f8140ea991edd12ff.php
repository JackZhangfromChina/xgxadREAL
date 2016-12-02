<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>个人中心-资料</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-white">
		<!--头部-->
		<header>
			<a href="<?php echo U('center');?>">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Fanhui_bai@2x.png" />
				</div>
			</a>
		</header>
		<ul class="person-detail">
			<li>
				<p>头像</p>
				<span>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui-_hui@3x.png" />
				</span>
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" class="small-icon" />
			</li>
			<li>
				<p>手机号</p>
				<span>
					<b class="tele-sapce">15345678945</b>
				</span>
			</li>
			<li>
				<p>昵称</p>
				<span>
					<b>未设</b>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui-_hui@3x.png" />
				</span>
			</li>
			<li>
				<p>性别</p>
				<span>
					<b>女</b>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui-_hui@3x.png" />
				</span>
			</li>
		</ul>
	</body>
</html>