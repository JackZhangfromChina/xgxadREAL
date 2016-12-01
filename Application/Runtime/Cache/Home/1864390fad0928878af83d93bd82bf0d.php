<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>我的钱包明细</title>
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
			明细
		</header>
		<ul class="income-record">
			<li>
				<div>
					<p>充值</p>
					<p>2016-11-6 11.11.11</p>
				</div>
				<b class="income-num">-500</b>
			</li>
			<li>
				<div>
					<p>提现</p>
					<p>2016-11-6 11.11.11</p>
				</div>
				<b class="income-num">+0.80</b>
			</li>
			<li>
				<div>
					<p>充值</p>
					<p>2016-11-6 11.11.11</p>
				</div>
				<b class="income-num">-500</b>
			</li>
			<li>
				<div>
					<p>提现</p>
					<p>2016-11-6 11.11.11</p>
				</div>
				<b class="income-num">+0.80</b>
			</li>
			<li>
				<div>
					<p>充值</p>
					<p>2016-11-6 11.11.11</p>
				</div>
				<b class="income-num">-500</b>
			</li>
			<li>
				<div>
					<p>提现</p>
					<p>2016-11-6 11.11.11</p>
				</div>
				<b class="income-num">+0.80</b>
			</li>
		</ul>
	</body>
</html>