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
			我的钱包
			<a href="<?php echo U('User/walletDetail');?>" class="money-detail">明细</a>
		</header>
		<div class="money-box">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Jinbi@2x.png" />
			<p class="mywallet">我的钱包</p>
			<p class="money-num">￥<b>28.60</b></p>
		</div>
		<a href="<?php echo U('User/recharge');?>">
			<input type="button" value="充值" class="money-button bg-red" />
		</a>
		<a href="<?php echo U('User/tixian');?>">
			<input type="button" value="提现" class="money-button bg-gray" />
		</a>
	</body>
</html>