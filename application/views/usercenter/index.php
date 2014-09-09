<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header",array("title"=>"个人中心"));?>
</head>
<body class="bubble usercenter">

	<?php $this->load->view("usercenter/topbar"); ?>
	<div class="container navbar navbar-links">
		<div class="row">
			<div class="col col-xs-3">
				<div class="link-item">
					<i class="fa fa-navicon"></i>
					<div class="link-name">全部订单</div>
				</div>
			</div>
			<div class="col col-xs-3">
				<div class="link-item">
					<i class="fa fa-credit-card"></i>
					<div class="link-name">待付款</div>
				</div>
			</div>
			<div class="col col-xs-3">
				<div class="link-item">
					<i class="fa fa-truck"></i>
					<div class="link-name">配送中</div>
				</div>
			</div>
			<div class="col col-xs-3">
				<div class="link-item">
					<i class="fa fa-refresh"></i>
					<div class="link-name">退换货</div>
				</div>
			</div>
		</div>
	</div>

	<div class="text-muted text-center">
		<br>
		个人中心菜单列表
	</div>

</body>
</html>
