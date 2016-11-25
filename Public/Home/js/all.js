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
				window.location.href = "person-center.html";
			}
		}
	});
	//注册页面
	$("#code").on("click",function(){
		var count = 60;
		var timeout=setInterval(function(){
			$("#code").attr("disabled",true);
			$("#code").val(count--);
			if(count == -1){
				clearInterval(timeout);
				$("#code").removeAttr("disabled");
				$("#code").val("验证码");
			}
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
	//全选
	$("#all-check input").on("click",function(){
		if($(this).is(":checked"))
	   {
	   		$(".type-style input").attr("checked",'true');
	   		$(".type-style").addClass("input-active");
	    
	   }
	   else
	   {
	   		$(".type-style input").removeAttr("checked");
	   		$(".type-style").removeClass("input-active");
	    
   		}
	})
	//单个独选
	$(".type-style input").on("click",function(){
		if($(this).is(":checked"))
	   {
	   		$(this).attr("checked",'true');
	    	$(this).parent().addClass("input-active");
	    
	   }
	   else
	   {
	    	$(this).removeAttr("checked");
	   		$(this).parent().removeClass("input-active");
	    
   		}
	})
	//发布页
	//下一步
	$("#nextstep").on("click",function(){
		$(".putout-start").addClass("disapear");
		$(".putout-end").removeClass("disapear");
	})
	//动态生成转换
	$(".question").on("click",function(){
		var parents = $(this).parent();
		createIput(parents);
		$(this).hide();
	})
	$(".box-border span").on("click",function(){
		var parents = $(this).parent();
		createIput(parents);
		$(this).hide();
	})
	$(".accunt-num").on("click",function(){
		var parents = $(this).parent();
		createIput(parents);
		$(this).hide();
	})
	function createIput(parents){
		var inputs = document.createElement("input");
		inputs.type = "text";
		inputs.placeholder = "请输入你要编写的文字";
		parents.append(inputs);
		
	}
	$(".box-border li").on("click",function(){
		$(".box-border li").removeClass("correct-bj");
		$(this).addClass("correct-bj");
	})
	//select选中值
//	console.log($(".some-more option:selected").val());
//	$("select").change(function(){
//		$("select option").on("click",function(){
//			console.log($(this).html());
//		})
//	})
// console.log($('select option:selected').val())
