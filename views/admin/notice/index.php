<?php
use yii\helpers\Html;
$this->context->layout = false; //不使用布局
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题管理-有点</title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>css.css" />
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo JS_URL;?>page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="<?php echo IMG_URL;?>coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;意见管理
			</div>
		</div>

		<div class="page">
			<!-- topic页面样式 -->
			<div class="topic">
				<div class="conform">
					<form>
						<div class="cfD">
							状态：<label><input type="radio" checked="checked"
								name="styleshoice1" />&nbsp;显示</label> <label><input
								type="radio" name="styleshoice1" />&nbsp;不显示</label> 
						</div>
						<div class="cfD">
							<input class="addUser" type="text" placeholder="话题ID/行家UID/话题标题" />
							<button class="button">搜索</button>
							<a class="addA addA1" href="topicadd.html">添加广告+</a>
						</div>
					</form>
				</div>
				<!-- topic表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="150px" class="tdColor tdC">标题</td>
							<td width="200px" class="tdColor tdC">内容</td>
							<td width="150px" class="tdColor tdC">是否显示</td>
							<td width="150px" class="tdColor tdC">类型</td>
							<td width="150px" class="tdColor tdC">添加时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						<?php foreach ($data as $k=>$v){?>
						<tr>
							<td><?php echo $v['notice_id']?></td>
							<td><?php echo $v['notice_name']?></td>
							<td><?php echo $v['notice_text']?></td>
							<td><?php echo $v['notice_start']==1?"显示":"隐藏"?></td>
							<td><?php echo $v['notice_type']==1?'导航栏广告':"轮播广告"?></td>
							<td><?php echo date("Y-m-d h:i:s",$v['add_time'])?></td>
							<td>
								<a href="javascript:void(0)"><img id="update" notice_id="<?php echo $v['notice_id']?>" class="operation" src="<?php echo IMG_URL;?>update.png"></a> 



								<img id="delete" notice_id="<?php echo $v['notice_id']?>" class="operation delban" src="<?php echo IMG_URL;?>delete.png">
							</td>
						</tr>
					<?php }?>
					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- topic 表格 显示 end-->
			</div>
			<!-- topic页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="<?php echo IMG_URL;?>shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>
</html>
<script>
	$(function(){
		$(document).on("click","#update",function(){
			var notice_id = $(this).attr("notice_id");
			location.href = "/?r=admin/notice/update&notice_id="+notice_id;
		});

		$(document).on("click","#delete",function(){
			var notice_id = $(this).attr("notice_id");
			$.ajax({
				url: '/?r=admin/notice/delete',
				type: 'get',
				dataType: 'json',
				data: {id:notice_id},
				success:function(msg){
					if(msg.code == 100){
						window.location.reload()
					}else{
						alert("操作异常");
					}
				}
			})
		});
	});
</script>