<?php
use yii\helpers\Html;
$this->context->layout = false; //不使用布局
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家添加-有点</title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>css.css" />
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.min.js"></script>
</head>
<body>
<form action="/?r=admin/scene/create" method="post">
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="<?php echo IMG_URL;?>coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;公告添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>公告添加</span>
				</div>
				<div class="baBody">
					<div class="bbD">
						<input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;景点：<input type="text"
							class="input3" name="scene_name"/>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;景点介绍：
						<div class="btext2">
							<textarea class="text2" name="scene_text"></textarea>
						</div>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;状态：<label><input
							type="radio" checked="checked" name="scene_start"  value=1 />&nbsp;营业</label> <label><input
							type="radio" name="scene_start" value=2 />&nbsp;未营业</label>
					</div>
					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" type="submit">提交</button>
							<a class="btn_ok btn_no" href="#">取消</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>	
</body>
</html>