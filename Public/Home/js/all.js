//首页底部导航点击事件
$(".iconfonts img").on("click",function(){
	$(this).attr("src","img/Iconfont_Shouye_h@2x.png");
	$(".iconfontg img").attr("src","img/Iconfont_Wo_hui@2x.png");
})
$(".iconfontg img").on("click",function(){
	$(this).attr("src","img/Iconfont_Wo_h@2x.png");
	$(".iconfonts img").attr("src","img/Iconfont_Shouye_hui@2x.png");
})
//拆红包事件
$(".hongbao-button").on("click",function(){
	window.location.href="redbag-record.html";
})
//支付和提现事件
$(".recharge-type span").on("click",function(){
	$(".recharge-type span").removeClass("choose");
	$(this).addClass("choose");
})
//首页参与事件
var isValue = localStorage.getItem("x");
	if(isValue){
		$("input.join-button").eq(isValue).css("background","#959595");
		$("input.join-button").eq(isValue).val("已参加");
	}
	$(".img-box").on("click",function(){
		var is = $(this).index();
		console.log(is);
		localStorage.setItem("x",is);
		console.log(localStorage.getItem("x"));
	})
	//点击回答问题事件
	$(".answer-box li").on("click",function(){
		var answer = $(this).index();
		$(".answer-box li").removeClass("correct-bj");
		$(this).addClass("correct-bj");
		$("#sumbit-redbag").on("click",function(){
			if(answer == 2){
				$(".modal-box").show();
				$(".daankuang").show();
				$(".daankuang").text("恭喜你回答正确");
				setTimeout(function(){
					$(".daankuang").hide();
					$(".modal-content").show();
				},1500);
			}
			else{
				$(".modal-box").show();
				$(".daankuang").show();
				$(".daankuang").text("回答错误");
			}
		
		})
	})
	//登录验证
	$(".clear").on("click",function(){
		$(".telephone").val("");
	})
	$(".show-none").on("click",function(){
		$(this).find("img").attr("src","img/Login_Zhengyan@2x.png");
		$(".password").attr("type","text");
	})
	$("#login").on("click",function(){
		var userName = $(".telephone").val();
		var pwd = $(".password").val();
		if(userName == ""&&pwd == ""){
			$(".show-content").show();
			$(".show-content").text("用户名和密码不能为空");
			disappear();
		}
		 else if(userName == ""){
			$(".show-content").show();
			$(".show-content").text("用户名不能为空");
			disappear();
		}
		else{
			if(pwd ==""){
				$(".show-content").show();
				$(".show-content").text("密码不能为空");
				disappear();
			}
			else{
				window.location.href = "http://localhost/xgxAD/index.php/home/user/center";
			}
		}
	});
	//注册页面
	$("#code").on("click",function(){
		var count = 60;
		setInterval(function(){
			$("#code").attr("disabled",true);
			$("#code").val(count--);
		},1000);
	})
	$("#next").on("click",function(){
		var userName = $(".telephone").val();
		var pwd = $(".password").val();
		var confirm = $(".confirm").val();
		if(userName == ""&&pwd == ""){
			$(".show-content").show();
			$(".show-content").text("用户名和密码不能为空");
			disappear();
		}
		 else if(userName == ""){
			$(".show-content").show();
			$(".show-content").text("用户名不能为空");
			disappear();
		}
		else{
			if(pwd ==""){
				$(".show-content").show();
				$(".show-content").text("密码不能为空");
				disappear();
			}
			else{
				window.location.href = "information.html";
			}
		}
	});
	function disappear(){
		setTimeout(function(){
			$(".show-content").hide();	
		},2000);
	}
