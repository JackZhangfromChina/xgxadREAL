<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>我的广告</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-white">
		<!--头部-->
		<header>
			<a href="<?php echo U('User/center');?>">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Fanhui_bai@2x.png" />
				</div>
			</a>
			星享APP
		</header>
		<section>
		<!--广告发布信息-->
		<div class="title">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
			<div class="introduce">
				<p>星享APP</p>
				<p>一个有温度的分享社区</p>
			</div>
			<input type="button" value="投放中" />
		</div>
		<!--广告图-->
		<div class="img-box">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
		</div>
		<!--广告具体内容-->
		<div class="detail">
			<p>
				<span class="space-right">点击<b class="red-color">1234</b>人</span>
				参与<b class="red-color">12345</b>人
				<span class="float-right">有效阅读<b class="red-color">100</b>人</span>
			</p>
			<p>
				<span>实时扣费：<b class="red-color">￥<em>-260.60</em></b></span>
			</p>
		</div>
	</section>
	</body>
</html>