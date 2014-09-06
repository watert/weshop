<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header",array("title"=>"购物车"));?>
</head>
<body class="bubble cart">

	<div class="navbar navbar-default">
		<div class="navbar-inner">
			<div class="container">
				<div class="navbar-text">
					<div class="pull-right">
						<i class="fa fa-angle-right"></i>
					</div>
					<span class="text-muted">配送至： </span>
					<span class="text-danger">巫剑龙</span>
					<span class="addr">广东省深圳市</span>
				</div>

			</div>
		</div>
	</div>
	
	<div class="container">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="text-muted text-center">购物列表</div>
	</div>
	<br>
	<div class="container">
		<?php // $this->load->view("cart/good-item");?>
	</div>

	<div class="container tabbar tabbar-buy">
		<div class="sum pull-left text-muted" style="margin-top: 8px;">SUMMARY</div>
		<button class="pull-right btn btn-danger">
			结帐
		</button>
	</div>


</body>
</html>
