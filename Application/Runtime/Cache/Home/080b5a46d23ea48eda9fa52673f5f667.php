<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>我的收益详情</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-white">
		<!--头部-->
		<header>
			<a href="person-center.html">
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
				<input type="button" class="get-after" value="已领取" />
			</div>
			<!--广告图-->
			<div class="img-box">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
			</div>
			<!--广告具体内容-->
			<div class="detail">
				<p>
					<span class="space-right">已领<b>1234</b>人</span>
					已阅<b>12345</b>人
					<span class="float-right"><b class="red-color space-right">￥<em>2.00</em></b>最高收益</span>
				</p>
				<p>
					<span>已领取：<b class="red-color">￥<em>0.80</em></b></span>
				</p>
			</div>
		</section>
	</body>
</html>