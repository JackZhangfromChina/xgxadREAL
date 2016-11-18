<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="red" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
    <title>首页</title>
    <script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<!--头部-->
	<header>
		<a href="#">
			<div class="header-back">
				南京
			</div>
		</a>
		<ul class="header-biaoti">
			<li class="text-active">最新<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Xia@2x.png"/></span></li>
			<li>热门<!--<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Xia@2x.png"/></span>--></li>
		</ul>
	</header>
	<!--banner图-->
	<div class="banner">
		<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>banner.png" />
	</div>
	<!--广告动态盒子-->
	<section>
		<!--广告发布信息-->
		<div class="title">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
			<div class="introduce">
				<p>星享APP</p>
				<p>一个有温度的分享社区</p>
			</div>
			<input type="button" value="未参与" class="join-button"/>
		</div>
		<!--广告图-->
		<a href="detailspage.html" class="img-box">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
		</a>
		<!--广告具体内容-->
		<div class="detail">
			<p>
				<span class="space-right">已领<b>1234</b>人</span>
				已阅<b>12345</b>人
				<span class="float-right"><b class="red-color space-right">￥<em>2.00</em></b>最高收益</span>
			</p>
			<p>
				<span>奖励池：￥<b>2.000</b>元</span>
				<span class="float-right">剩余：￥<b>260.60</b>元</span>
			</p>
		</div>
	</section>
	<!--广告动态盒子-->
	<section>
		<!--广告发布信息-->
		<div class="title">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
			<div class="introduce">
				<p>星享APP</p>
				<p>一个有温度的分享社区</p>
			</div>
			<input type="button" value="未参与" class="join-button"/>
		</div>
		<!--广告图-->
		<a href="detailspage.html" class="img-box">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
		</a>
		<!--广告具体内容-->
		<div class="detail">
			<p>
				<span class="space-right">已领<b>1234</b>人</span>
				已阅<b>12345</b>人
				<span class="float-right"><b class="red-color space-right">￥<em>2.00</em></b>最高收益</span>
			</p>
			<p>
				<span>奖励池：￥<b>2.000</b>元</span>
				<span class="float-right">剩余：￥<b>260.60</b>元</span>
			</p>
		</div>
	</section>
	<section>
		<!--广告发布信息-->
		<div class="title">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
			<div class="introduce">
				<p>星享APP</p>
				<p>一个有温度的分享社区</p>
			</div>
			<input type="button" value="未参与" class="join-button" />
		</div>
		<!--广告图-->
		<a href="detailspage.html" class="img-box">
			<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
		</a>
		<!--广告具体内容-->
		<div class="detail">
			<p>
				<span class="space-right">已领<b>1234</b>人</span>
				已阅<b>12345</b>人
				<span class="float-right"><b class="red-color space-right">￥<em>2.00</em></b>最高收益</span>
			</p>
			<p>
				<span>奖励池：￥<b>2.000</b>元</span>
				<span class="float-right">剩余：￥<b>260.60</b>元</span>
			</p>
		</div>
	</section>
	<div class="footerH"></div>
	<footer>
		<div class="iconfonts"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Shouye_h@2x.png"/></div>
		<div class="iocnfontf">
			<a href="<?php echo U('Index/fabu');?>"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fabu@2x.png" class="imgs"/></a>
		</div>
		<div class="iconfontg">
			<a href="<?php echo U('User/login');?>">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Wo_hui@2x.png"/>
			</a>
		</div>
	</footer>
</body>
<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
</html>