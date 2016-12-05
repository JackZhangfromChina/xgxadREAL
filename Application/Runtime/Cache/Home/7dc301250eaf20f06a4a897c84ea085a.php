<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>修改密码</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo C('SITE_URL'); echo C('JS_URL');?>jquery-1.8.3.min.js"></script>
	<!-- 	 <script type="text/javascript">
				$(function(){
					var telephone =$("#telephone").val();
					$("#modify").on('click',function(){
						$.post('sendMsg',
							{'telephone' :telephone},
							function(msg){
								alert(msg);
							if(msg==0){
								//调用接口已经成功
								alert('短信验证码已经发送成功');
							}
						});
					});
				});
			
			
			
			</script>  -->
	</head>
	<body class="bj-blue">
	<header class="login-header">
		<a href="#">
			<div class="header-back">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Fanhui_hei@2x.png" />
			</div>
		</a>
		修改密码
	</header>
	<section>
		<form action="<?php echo U('modifyPwd');?>" method="post">
			<ul class="login-box">
				<li>
					<label>手机</label>
					<input type="text" class="lr-input"  id="telephone" name="telephone" placeholder="请输入手机号码" />
					<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
				</li>
				<li>
					<label>验证码</label>
					<input type="text" class="lr-input" id ="capture" name="capture" placeholder="请输入验证码" />
					<span>
						<input type="button" class="lr-yzm" name="" id="modify" value="发验证码" />
					</span>
				</li>
				<li>
					<label>密码</label>
					<input type="text"class="lr-input" name="password"  placeholder="请创建新密码" />
					<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Biyan@2x.png" class="lr-img"/></span>
				</li>
				<li>
				<input type="submit" class="lr-button"  value="提交" />
				</li>
			</ul>

		</form>
	</section>

<script  type="text/javascript" >
		$(function(){
			//定义一个函数,用于完成倒计时效果
			$("#modify").click(function(){
				
				//获取输入的手机号码
				var telephone = $("#telephone").val();
				//ajax请求文件，调用短信发送的接口
				//console.log(telephone);
				$.ajax({
					type:"POST",
					url:"SendMsg",
					data:{"telephone":telephone},
					success:function(msg){
						//alert(msg);
						//判断调用短信发送接口是否成功，
						if(msg==0){
							//调用接口已经成功
							alert('短信`验证码已经发送成功');
						}
					}
				});
			});
		});
</script> 



	</body>
</html>