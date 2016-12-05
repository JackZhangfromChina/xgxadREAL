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
			<a href="<?php echo U('Index/index');?>">
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
		</header><
		<form action="<?php echo U('register');?>" method="post">
		<section class="register-content">

				<ul class="login-box">
					<li>
						<label>手机</label>
						<input type="text" class="lr-input telephone" name="telephone" id="telephone" placeholder="请输入用户名" />
						<span class="clear"><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
					</li>
					<li>
						<label>验证码</label>
						<input type="text" class="lr-input" class="confirm" id="capture" name="capture" placeholder="请输入验证码" />
						<span>
							<input type="button" class="lr-yzm" name="" id="code" value="验证码" />
						</span>
					</li>
					<li>
						<label>密码</label>
						<input type="text"class="lr-input password" id="pwd" name="password" placeholder="请创建不少于6位密码" />
						<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Biyan@2x.png" class="lr-img"/></span>
					</li>
					<input type="button" class="lr-button" id="next" value="下一步" />
				</ul>

			<p class="show-content"></p>
		</section>
		<section class="information-content disapear">
			<div class="lr-icon">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>iconfont_touxiang@2x.png" />
				<p class="red-color">添加头像</p>
			</div>

				<ul class="login-box">
					<li>
						<label>昵称</label>
						<input type="text" class="lr-input" id="nickname" name="nickname"/>
						<span><img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Login_Shanchu@2x.png"/></span>
					</li>
					<li>
						<label>性别</label>
						<input type="text" class="lr-input" name="sex" id="sex" />
					</li>
					<li>
						<label>年龄</label>
						<input type="text" class="lr-input" name="age"  id="age"/>
					</li>
					<input type="button" class="lr-button" id="complete" value="完成" />
				</ul>

		</section>
		<section class="putout-box interest-content disapear">
			<p class="kind-title">请选择您的目标受众兴趣标签</p>

				<a href="javascript:void(0)" class="type-style putout-spacer" id="all-check">全选
					<input type="checkbox" name="interest" value="all"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">旅游
					<input type="checkbox" name="interest[]" value="旅游"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">逛街
					<input type="checkbox" name="interest[]" value="逛街"/>
				</a>
				<a href="javascript:void(0)" class="type-style">淘宝
					<input type="checkbox" name="interest[]" value="淘宝"/>
				</a>
				<a href="javascript:void(0)" class="type-style big-width putout-spacerb">吃喝玩乐
					<input type="checkbox" name="interest[]" value="吃喝玩乐"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacerb">爬山
					<input type="checkbox" name="interest[]" value="爬山"/>
				</a>
				<a href="javascript:void(0)" class="type-style">游泳
					<input type="checkbox" name="interest[]" value="游泳"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">游戏
					<input type="checkbox" name="interest[]" value="游戏"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">电影
					<input type="checkbox" name="interest[]"  value="电影"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">美食
					<input type="checkbox" name="interest[]" value="美食"/>
				</a>
				<a href="javascript:void(0)" class="type-style">野炊
					<input type="checkbox" name="interest[]" value="野炊"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">蹦极
					<input type="checkbox" name="interest[]" value="蹦极"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">日光浴
					<input type="checkbox" name="interest[]" value="日光浴"/>
				</a>
				<a href="javascript:void(0)" class="type-style putout-spacer">散步
					<input type="checkbox" name="interest[]" value="散步"/>
				</a>
				<a href="javascript:void(0)" class="type-style">骑车旅行
					<input type="checkbox" name="interest[]"  value="骑车旅行"/>
				</a>
				<a href="index.html">
					<input type="submit" value="进入趣广告"  class="button-style into-button"/>
				</a>

		</section>
		</form>
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

	<!--获取表单数据-->
	<script type="text/javascript">
		$(function(){
			// 设置属性值
			$("input:submit").on('click' ,function() {
				var interest = "";
				$("input:checkbox[name='interest']:checked").each(function() {
					interest += $(this).val() + " ";
				});
				$.ajax({
					url:"/xgxAD/index.php/Home/User/doAjax",
					type:"post",
					data:{"interest":interest},
					success:function(){
						alert("数据传递成功");
					},
					datatype:json
				});
				//alert(interest);

				//alert($("input[name='text']").val());
				//alert($('.question input:text').val());
				//alert($('input:text').val());
				// alert(interest);
				// alert($('input:text').val());
				// alert($("#province option:selected").val());
				//alert($("#sex option:selected").val());
				// $.post(url:<?php echo U('doajax');?>,
				//data: 'post',
				//dataType:'json',
				//success:function(obj){
				// 	 	}

				// 	 );

			});
		});
	</script>
</html>