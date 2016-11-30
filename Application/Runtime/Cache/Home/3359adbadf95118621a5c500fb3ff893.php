<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>填写资料</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo C('SITE_URL'); echo C('JS_URL');?>jquery-1.8.3.min.js"></script>
	</head>
	<body class="bj-blue">
		<header class="login-header register-header">
			<a href="#">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui_hei@2x.png" />
				</div>
			</a>
			注册
		</header>
		<header class="login-header information-header disapear">
			<a href="javascript:void(0)">
				<div class="header-back information-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui_hei@2x.png" />
				</div>
			</a>
		</header>
		<header class="login-header interest-header disapear">
			<a href="">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Cha_hui@2x.png" class="delete"/>
				</div>
			</a>
		</header>
		<section class="register-content">
			<form action="" method="post">
				<ul class="login-box">
					<li>
						<label>手机</label>
						<input type="text" class="lr-input telephone"  id="telephone" placeholder="请输入用户名" />
						<span class="clear"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
					</li>
					<li>
						<label>验证码</label>
						<input type="text" class="lr-input" class="confirm" id="capture" placeholder="请输入验证码" />
						<span>
							<input type="button" class="lr-yzm" name="" id="code" value="验证码" />
						</span>
					</li>
					<li>
						<label>密码</label>
						<input type="text"class="lr-input password"  placeholder="请创建不少于6位密码" />
						<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Biyan@2x.png" class="lr-img"/></span>
					</li>
					<input type="button" class="lr-button" id="nextstep" value="下一步" />
				</ul>
			</form>
			<p class="show-content"></p>
		</section>
		<section class="information-content disapear">
			<div class="lr-icon">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>iconfont_touxiang@2x.png" />
				<p class="red-color">添加头像</p>
			</div>
			<form action="" method="post">
				<ul class="login-box">
					<li>
						<label>昵称</label>
						<input type="text" class="lr-input"  />
						<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
					</li>
					<li>
						<label>性别</label>
						<input type="text" class="lr-input"  />
					</li>
					<li>
						<label>年龄</label>
						<input type="text" class="lr-input"  />
					</li>
					<input type="button" class="lr-button" id="complete" value="完成" />
				</ul>
			</form>
		</section>
		<section class="putout-box interest-content disapear">
			<p class="kind-title">请选择您的目标受众兴趣标签</p>
			<form action="" method="post">
				<a href="javascript:void(0)" class="type-style putout-spacer" id="all-check">全选
					<input type="checkbox"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">旅游
					<input type="checkbox"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">逛街
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style">淘宝
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style big-width putout-spacerb">吃喝玩乐
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacerb">爬山
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style">游泳
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">游戏
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">电影
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">美食
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style">野炊
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">蹦极
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">日光浴
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">散步
					<input type="checkbox" />
				</a>
				<a href="javascript:void(0)" class="type-style">骑车旅行
					<input type="checkbox" />
				</a>
				<a href="index.html">
					<input type="submit" value="进入趣广告"  class="button-style into-button"/>
				</a>
			</form>
		</section>
	</body>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
	<!--<script type="text/javascript">
		$('#capture').on('blur' , function(){

		});
	</script>-->

	<script  type="text/javascript" >
		$(function(){
			//定义一个函数,用于完成倒计时效果
			$("#code").click(function(){
				//获取输入的手机号码
				var telephone = $("#telephone").val();
				//ajax请求文件，调用短信发送的接口
				$.ajax({
					type:'POST',
					url:'/xgxAD/index.php/Home/User/sendMsg',
					data:{"telephone":telephone},
					success:function(msg){
						//alert(msg);
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