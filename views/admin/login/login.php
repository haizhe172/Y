<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->context->layout = false; //不使用布局
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录-有点</title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>public.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>page.css" />
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>public.js"></script>
</head>
<body>
	<form action="/?r=admin/login/login" method="post">
	<!-- 登录页面头部 -->
	<div class="logHead">
		<img src="<?php echo IMG_URL;?>logLOGO.png" />
	</div>
	<!-- 登录页面头部结束 -->
	<!-- 登录body -->
	<div class="logDiv">
		<img class="logBanner" src="<?php echo IMG_URL;?>logBanner.png" />
		<div class="logGet">
			<!-- 头部提示信息 -->
			<div class="logD logDtip">
				<p class="p1">登录</p>
				<p class="p2">有点人员登录</p>
			</div>
			<!-- 输入框 -->
			<div class="lgD">
				<input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
				<img class="img1" src="<?php echo IMG_URL;?>logName.png" /><input type="text"
					placeholder="输入用户名" name="user_name" />
			</div>
			<div class="lgD">
				<img class="img1" src="<?php echo IMG_URL;?>logPwd.png" /><input type="text"
					placeholder="输入用户密码" name="user_pwd" />
			</div>
			<div class="lgD logD2">
				<input class="getYZM" type="text" name="verify"/>
				<div class="logYZM">
					<img id="verifyImg" class="yzm" src="<?php echo Url::toRoute('/admin/login/captcha');?>" />
				</div>
			</div>
			<div class="logC">
				<button type="submit">登 录</button>
			</div>
		</div>
	</div>
	<!-- 登录body  end -->
	</form>
	<!-- 登录页面底部 -->
	<div class="logFoot">
		<p class="p1">版权所有：南京设易网络科技有限公司</p>
		<p class="p2">南京设易网络科技有限公司 登记序号：苏ICP备11003578号-2</p>
	</div>
	<!-- 登录页面底部end -->
</body>
</html>
<script>
	$(function(){
		$("#verifyImg").click(function() {
				var xmlhttp;
				xmlhttp=new XMLHttpRequest();
				xmlhttp.open("GET","http://yii.com/?r=admin/login/captcha",true);
				xmlhttp.responseType = "blob";
				xmlhttp.onload = function(){
			    //console.log(this);
			    if (this.status == 200) {
			        var blob = this.response;
			        var img = document.createElement("img");
			        img.onload = function(e) {
			            window.URL.revokeObjectURL(img.src); 
			        };
			        img.src = window.URL.createObjectURL(blob);
			        //$("#verifyImg").attr("src",img);
			       	document.getElementById("verifyImg").setAttribute("src",img.src); 
			    }
			}
			xmlhttp.send();			
		});
	})
</script>