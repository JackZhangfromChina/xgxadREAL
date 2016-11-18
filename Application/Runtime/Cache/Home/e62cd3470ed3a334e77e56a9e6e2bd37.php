<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="red" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
    <title>发布页</title>
    <script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="bj-white">
	<header>
		<a href="index.html">
			<div class="header-back">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Fanhui_bai@2x.png" />
			</div>
		</a>
		发布
	</header>
<section class="putout-box">
	<p class="putout-title">可添加图片(2张)</p>
	<div class="box-border">
		<div class="img-border">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Tupian@2x.png" />
		</div>
	</div>
	<p class="putout-title">设置问题（正确答案按钮请保持<span class="red-color">红色</span>）</p>
	<div class="box-border">
		<p>问题:<b>星享APP是一个做什么的APP?</b></p>
		<b class="putout-answer">答案：</b>
		<ul>
			<li class="margin-b"><span>赚钱</span></li>
			<li class="margin-b"><span>直播</span></li>
			<li class="correct-bj"></li>
		</ul>
	</div>
	<div class="some-more">
		<p>目标受众性别：<b>全部</b></p>
		<p>目标受众年龄：<b>全部</b></p>
		<p>目标受众城市：<b class="balck-color">南京</b></p>
		<p>预算：<b class="red-color">￥500</b>元</p>
	</div>
	<a href="putout-end.html">
		<input type="button" value="下一步"  class="button-style"/>
	</a>
</section>
</body>
</html>