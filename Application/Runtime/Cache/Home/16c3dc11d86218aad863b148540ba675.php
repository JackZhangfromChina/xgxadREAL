<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>提现</title>
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
			提现
		</header>
		<p class="recharge-num">金额：￥<b>500</b></p>
		<h4 class="recharge-title">选择提现方式</h4>
		<ul class="recharge-type">
			<li>
				<span class="float-left choose"></span>
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Zhifubao@2x.png" />
				<b>支付宝帐号</b>
			</li>
			<li>
				<span class="float-left"></span>
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Weixin@2x.png" />
				<b>微信帐号</b>
			</li>
			<input type="text" placeholder="请输入支付宝/微信帐号" />
		</ul>
		<input type="button" value="确认充值" class="money-button bg-red"/>
	</body>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
</html>