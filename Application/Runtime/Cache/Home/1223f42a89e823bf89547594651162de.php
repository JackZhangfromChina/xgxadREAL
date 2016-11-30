<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="red" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
    <title>详情页</title>
    <script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="bj-white">
	<div class="imgshow-box">
		<img src="<?php echo C('SITE_URL'); echo ($detail['filepath']); ?>" />
	</div>
	<div class="detail-width border-have detail-title">
		<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>vote.jpg" />
		<div class="introduce">
			<p>星享APP</p>
			<p>一个有温度的分享社区</p>
		</div>
		<div class="bdsharebuttonbox">
			<a href="#" class="bds_more" data-cmd="more"></a>
			<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
			<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
			<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a
			><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
			<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
		</div>
		<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"",
			"bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},
			"share":{}};
		with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
		</script>

		<!--<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>iconfont_fenxiang@2x.png" class="share-img">-->
	</div>
	<p class="detail-width border-have explain-box">
		<span class="explain">收益说明</span>
		<span class="float-right">最高收益<b class="red-color">￥<em>2.00</em></b></span>
		<span class="float-right space-right"><b class="red-color">￥<em>0.50</em></b>阅读/人均</span>
	</p>
	<p class="detail-width border-have explain-box">
		<span class="explain">任务说明</span>
	</p>
	<div class="detail-width">
		<ul>
			<li><b>1</b>领取任务后活动分享至朋友圈</li>
			<li><b>2</b>领取任务后活动分享至朋友圈</li>
			<li><b>3</b>领取任务后活动分享至朋友圈</li>
		</ul>
	</div>
	<h3 class="answer">看完广告答对问题可获得奖励</h3>
	<div class="detail-width answer-box">
		<p class="border-have">
			星享APP是一个做什么的APP？
		</p>
		<ul>
			<li>挣钱</li>
			<li>直播</li>
			<li>图片分享、直播的社交平台</li>
		</ul>
		<input type="button" value="提交" class="button-style" id="sumbit-redbag"/>
	</div>
	<!--模态框-->
	<div class="modal-box">
		<!--红包弹出框-->
		<div class="modal-content">
			<p>趣广告带你抢红包</p>
			<div class="hongbao-button"></div>
		</div>
		<!--回答框-->
		<div class="daankuang">
			
		</div>
	</div>
</body>
<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
</html>