<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/index\view\login\index.html";i:1535983743;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LAUCHER-FASSS-LOGINs</title>
	<link rel="stylesheet" href="__STATIC__/index/src/jquery.toast.css">
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<style type="text/css">
		.login-page {
		  width: 360px;
		  padding: 8% 0 0;
		  margin: auto;
		}
		a{cursor:url(/static/index/img/core-img/link.cur), pointer;}
		.vcode{cursor:url(/static/index/img/core-img/link.cur), pointer;}
		.form {
		  position: relative;
		  z-index: 1;
		  background: #FFFFFF;
		  max-width: 360px;
		  margin: 0 auto 100px;
		  padding: 45px;
		  text-align: center;
		/*  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);*/
		}
		.form input {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form button {
		  font-family: "Microsoft YaHei","Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: #4CAF50;
		  width: 100%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
		  background: #43A047;
		}
		.form .message {
		  margin: 15px 0 0;
		  color: #b3b3b3;
		  font-size: 12px;
		}
		.form .message a {
		  color: #4CAF50;
		  text-decoration: none;
		}
		.form .register-form {
		  display: none;
		}
		.container {
		  position: relative;
		  z-index: 1;
		  max-width: 300px;
		  margin: 0 auto;
		}
		.container:before, .container:after {
		  content: "";
		  display: block;
		  clear: both;
		}
		.container .info {
		  margin: 50px auto;
		  text-align: center;
		}
		.container .info h1 {
		  margin: 0 0 15px;
		  padding: 0;
		  font-size: 36px;
		  font-weight: 300;
		  color: #1a1a1a;
		}
		.container .info span {
		  color: #4d4d4d;
		  font-size: 12px;
		}
		.container .info span a {
		  color: #000000;
		  text-decoration: none;
		}
		.container .info span .fa {
		  color: #EF3B3A;
		}

		.shake_effect{
		 	-webkit-animation-name: shake;
  			animation-name: shake;
  			-webkit-animation-duration: 1s;
  			animation-duration: 1s;
		}
		@-webkit-keyframes shake {
		  from, to {
		    -webkit-transform: translate3d(0, 0, 0);
		    transform: translate3d(0, 0, 0);
		  }

		  10%, 30%, 50%, 70%, 90% {
		    -webkit-transform: translate3d(-10px, 0, 0);
		    transform: translate3d(-10px, 0, 0);
		  }

		  20%, 40%, 60%, 80% {
		    -webkit-transform: translate3d(10px, 0, 0);
		    transform: translate3d(10px, 0, 0);
		  }
		}

		@keyframes shake {
		  from, to {
		    -webkit-transform: translate3d(0, 0, 0);
		    transform: translate3d(0, 0, 0);
		  }

		  10%, 30%, 50%, 70%, 90% {
		    -webkit-transform: translate3d(-10px, 0, 0);
		    transform: translate3d(-10px, 0, 0);
		  }

		  20%, 40%, 60%, 80% {
		    -webkit-transform: translate3d(10px, 0, 0);
		    transform: translate3d(10px, 0, 0);
		  }
		}
		p.center{
			color: #fff;font-family: "Microsoft YaHei";
		}
		/*滑动条*/
		::-webkit-scrollbar
		{
		    width: 6px;
		    height: 6px;
		}
		::-webkit-scrollbar-track-piece
		{
		    background-color: #CCCCCC;
		    -webkit-border-radius: 6px;
		}
		::-webkit-scrollbar-thumb:vertical
		{
		    height: 5px;
		    background-color: #EE00EE;
		    -webkit-border-radius: 6px;
		}
		::-webkit-scrollbar-thumb:horizontal
		{
		    width: 5px;
		    background-color: #8A2BE2;
		    -webkit-border-radius: 6px;
		}
	</style>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
		<div id="wrapper" class="login-page">
		  <div id="login_form" class="form">
		    <form class="register-form" id="register-form">
		      <input type="text" placeholder="用户名" id="r_user_name" name="user_login"/>
		      <input type="password" placeholder="密码" id="r_password" name="user_pass" />
		      <input type="text" placeholder="电子邮件" id="r_emial" name="user_email"/>
		      <div style="position: relative;">
		      <input type="text" placeholder="验证码" id="zcyzm" name="zcyzm"/>
		      <img class="vcode" src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?time='+Math.random();" title="换一张" style="position:absolute;right:1px;top:1px;" >
              </div>
		      <button id="create" >创建账户</button>
		      <p class="message next">已经有了一个账户? <a href="#">立刻登录</a></p>
		    </form>
		    <form class="login-form" id="login-form">
		      <input type="text" placeholder="用户名或邮箱" id="user_name" name="login_name" />
		      <input type="password" placeholder="密码" id="password" name="user_pass"/>
		      <div style="position: relative;">
		      <input type="text" placeholder="验证码" id="yzm" name="yzm"/>
		      <img class="vcode" id="vcode" src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?time='+Math.random();" title="换一张" style="position:absolute;right:1px;top:1px;" >
              </div>
		      <button id="login">登　录</button>
		      <p class="message next">还没有账户? <a href="#">立刻创建</a></p>
		    </form>
		    <div class="text-c message"> 
			     <a href="javascript:;"  onclick="qq_login()"><i class="Hui-iconfont" style="font-size:25px;">&#xe67b;</i></a>&nbsp;
			     <a href="javascript:;" onclick="wx_login()"><i class="Hui-iconfont" style="font-size:25px;">&#xe694;</i></a>&nbsp;
			     <a href="javascript:;" onclick="git_login()"><i class="Hui-iconfont" style="font-size:25px;">&#xe6d1;</i></a>
		    </div>
		  </div>
		</div>
	<script type="text/javascript" src="__STATIC__/index/js/jquery/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
	function check_login()
	{
		if($("#user_name").val()==""){
			$("#login_form").removeClass('shake_effect');  
		  		setTimeout(function()
		 	 {
	 	 	$("#login_form").addClass('shake_effect')
		  		},1); 
    	  	layer.msg('管理员名好像没写哦！', {
            icon: 5,//提示的样式
            time:2000,
      	  });
     		 return false;
   		}
  		if($("#password").val()==""){
  			$("#login_form").removeClass('shake_effect');  
		  		setTimeout(function()
		 	 {
	 	 	$("#login_form").addClass('shake_effect')
		  		},1); 
        	layer.msg('密码都不写怎么登录？', {
            icon: 5,//提示的样式
            time:2000,
        }); 
     		return false; 
  		}
  		if($("#yzm").val()==""){
  			$("#login_form").removeClass('shake_effect');  
		  		setTimeout(function()
		 	 {
	 	 	$("#login_form").addClass('shake_effect')
		  		},1); 
      		layer.msg('验证码好像没写哦！', {
            icon: 5,//提示的样式
            time:2000,
        });
     		return false;
  		} 
  		var index = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
  		$.ajax({
     		type:"POST",
    		url:"<?php echo url('login'); ?>",
   	   		data:$("#login-form").serializeArray(),
   	    	dataType:'json',
   	   		success:function(data){
          		if (data=='success') {
          			layer.close(index);
          			$.toast({
					    heading: 'Hi!又等到你的',
					    text: '登陆成功！请等待跳转ing',
					    icon: 'success',
					    position: 'mid-center',
					    textAlign: 'center',
					    beforeHide: function () {
					    	window.parent.location.reload();
					        layer.closeAll();
					    },
					})
          		}else if(data=='yzmerror'){
          			layer.close(index);
          			$.toast({
					    heading: '抱歉，登录失败！',
					    text: '验证码填写错误！请重新登录。',
					    position: 'mid-center',
					    textAlign: 'center',
					    showHideTransition: 'plain',
					    icon: 'warning'
					})
					// IE自动刷新验证码
					    if(document.all) {
					        document.getElementById("vcode").click();
					    }
					    // 其它浏览器
					    else {
					        var e = document.createEvent("MouseEvents");
					        e.initEvent("click", true, true);
					        document.getElementById("vcode").dispatchEvent(e);
					    }					
    					$("#login_form").removeClass('shake_effect');  
		  				setTimeout(function()
				 	 	{
			 	 			$("#login_form").addClass('shake_effect')
				  		},1); 
				  
          		}
          		else{
          			layer.close(index);
          			$.toast({
					    heading: '抱歉，登录失败！',
					    text: '请检查用户名或密码错误！',
					    position: 'mid-center',
					    textAlign: 'center',
					    showHideTransition: 'plain',
					    icon: 'warning'
					})
					$("#login_form").removeClass('shake_effect');  
		  				setTimeout(function()
				 	 {
			 	 	$("#login_form").addClass('shake_effect')
				  		},1); 
          		}
    		}
  		});
  	}
	function check_register(){
		var name = $("#r_user_name").val();
		var pass = $("#r_password").val();
		var email = $("r_email").val();
		if(name!="" && pass=="" && email != "")
		 {
		  alert("注册成功！");
		  $("#user_name").val("");
		  $("#password").val("");
		 }
		 else
		 { 
		 	$("#login_form").removeClass('shake_effect');  
		  		setTimeout(function()
		 	 {
	 	 	$("#login_form").addClass('shake_effect')
		  		},1); 
		  }
		
	}

	$(function(){
		$("#create").click(function(){
			check_register();
			return false;
		})
		$("#login").click(function(){
			check_login();
			return false;
		})
		$('.next a').click(function () {
		    $('form').animate({
		        height: 'toggle',
		        opacity: 'toggle'
		    }, 'slow');
		});
	})
	function qq_login(){
		var qqurl=window.open("https://graph.qq.com/oauth2.0/show?which=Login&display=pc&response_type=code&client_id=101258055&redirect_uri=http://www.cn300.cn/API/QQ/example/oauth/callback.php&state=d3c83ba137fd877cec04be74622a3c6f&scope=get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr", "laucher-fasss-qqlogin", "height=500, width=700, top=170, left=450, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=yes, status=no");
	}
	</script>
	<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
	<script type="text/javascript" src="__STATIC__/index/src/jquery.toast.js"></script>
</body>
</html>