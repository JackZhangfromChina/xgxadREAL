<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>/all.css"/>
		<title>个人中心</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>/common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-white">
		<!--头部-->
		<header>
			<a href="index.html">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Head_Fanhui_bai@2x.png" />
				</div>
			</a>
			<a href="information.html" class="person-set">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Head_Shezhi@2x.png" />
			</a>
		</header>
		<div class="person-icon">
			<div  class="person-img">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/vote.jpg"/>
				<a href="<?php echo U('User/detail');?>">
					<div class="person-prev">
						<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont-Gengduo@2x.png" />
					</div>
				</a>
			</div>
			<p>阿拉蕾</p>
		</div>
		<ul class="person-detail">
			<li>
				<p>我的钱包</p>
				<a href="<?php echo U('User/wallet');?>">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont_Fanhui-_hui@3x.png" />
				</a>
			</li>
			<li>
				<p>我的收益</p>
				<a href="<?php echo U('User/income');?>">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont_Fanhui-_hui@3x.png" />
				</a>
			</li>
			<li>
				<p>我的广告</p>
				<a href="<?php echo U('User/myAD');?>">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont_Fanhui-_hui@3x.png" />
				</a>
			</li>
			<li>
				<p>我的银行卡</p>
				<a href="<?php echo U('User/bankCard');?>">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont_Fanhui-_hui@3x.png" />
				</a>
			</li>
		</ul>
	</body>
</html>