<?php
use yii\helpers\Html;
$this->context->layout = false; //不使用布局
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>public.css" />
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>public.js"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">
		<div class="leftsidebar_box">
			<a href="../main.html" target="main"><div class="line">
					<img src="<?php echo IMG_URL;?>/coin01.png" />&nbsp;&nbsp;首页
				</div></a>
			<!-- <dl class="system_log">
			<dt><img class="icon1" src="<?php echo IMG_URL;?>/coin01.png" /><img class="icon2"src="<?php echo IMG_URL;?>/coin02.png" />
				首页<img class="icon3" src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4" src="<?php echo IMG_URL;?>/coin20.png" /></dt>
		</dl> -->
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin03.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin04.png" /> 网站管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a class="cks" href="../user.html"
						target="main">管理员管理</a><img class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin05.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin06.png" /> 导肮栏管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a class="cks" href="../banner.html"
						target="main">导航栏添加</a><img class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a class="cks" href="../opinion.html"
						target="main">导航栏展示</a><img class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin07.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin08.png" /> 会员管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="../vip.html" target="main"
						class="cks">会员管理</a><img class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin10.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin09.png" /> 管理员管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="http://yii.com/index.php?r=admin/user/create"
						target="main" class="cks">管理添加</a><img class="icon5"
						src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="http://yii.com/index.php?r=admin/user/index"
						target="main" class="cks">管理展示</a><img class="icon5"
						src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>

			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin11.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin12.png" /> 话题管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="../topic.html" target="main"
						class="cks">话题管理</a><img class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin14.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin13.png" /> 心愿管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="../wish.html" target="main"
						class="cks">心愿管理</a><img class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin15.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin16.png" /> 约见管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="../appointment.html"
						target="main" class="cks">约见管理</a><img class="icon5"
						src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coin17.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coin18.png" /> 收支管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="../balance.html"
						target="main" class="cks">收支管理</a><img class="icon5"
						src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="<?php echo IMG_URL;?>/coinL1.png" /><img class="icon2"
						src="<?php echo IMG_URL;?>/coinL2.png" /> 系统管理<img class="icon3"
						src="<?php echo IMG_URL;?>/coin19.png" /><img class="icon4"
						src="<?php echo IMG_URL;?>/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a href="../changepwd.html"
						target="main" class="cks">修改密码</a><img class="icon5"
						src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="<?php echo IMG_URL;?>/coin111.png" /><img class="coin22"
						src="<?php echo IMG_URL;?>/coin222.png" /><a class="cks">退出</a><img
						class="icon5" src="<?php echo IMG_URL;?>/coin21.png" />
				</dd>
			</dl>

		</div>

	</div>
</body>
</html>
