<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>注册</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-blue">
		<header class="login-header">
			<a href="#">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Iconfont_Fanhui_hei@2x.png" />
				</div>
			</a>
			注册
		</header>
		<section>
			<form action="<?php echo U('register');?>" method="post">
				<ul class="login-box">
					<li>
						<label>手机</label>
						<input type="text" class="lr-input telephone" placeholder="请输入用户名"  id="lu"/>
						<span class="clear"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
					</li>
					<li>
						<label>验证码</label>
						<input type="text" name="capture" class="lr-input" class="confirm" placeholder="请输入验证码" />
						<span>
							<input type="button" class="lr-yzm" name="" id="code" value="验证码" />
						</span>
					</li>
					<li>
						<label>密码</label>
						<input type="text"class="lr-input password"  placeholder="请创建不少于6位密码" />
						<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>/Login_Biyan@2x.png" class="lr-img"/></span>
					</li>
					<input type="button" class="lr-button" id="next" value="下一步" />
				</ul>
			</form>
			<p class="show-content"></p>
		</section>
	</body>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function(){
			//定义一个函数,用于完成倒计时效果
			$("#code").click(function(){
				var telephone = $("#lu").val();
				//获取输入的手机号码
				//ajax请求文件，调用短信发送的接口
				$.ajax({
					type:'POST',
					url:"/xgxAD/index.php/Home/User/sendMsg",
					data:{"telephone":telephone},
					success:function(msg){
						console.log(msg);
						//判断调用短信发送接口是否成功，
						if(msg==0){
							//调用接口已经成功
							alert('短信验证码已经发送成功');
						}
					}
				});
			});
		});

	</script>
</html>