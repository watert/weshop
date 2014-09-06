<!DOCTYPE html>
<html lang="en">
<head>
	<script> if(!localStorage["channels"]){location.href="explore/select_channels";} </script>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble explore channel">

	<div class="navbar navbar-top navbar-default">
		<div class="navbar-inner">
			<button class="btn btn-o btn-danger pull-right">取消订阅</button>

			<span class="btn-back" >
				<i class="fa fa-angle-left pull-left" data-link="javascript:history.go(-1)"></i>
				<span class="navbar-brand">智能硬件</span>
			</span>
		</div>
	</div>
	
	<div class="container good-items">
		<?php $this->load->view("explore/good-item");?>
		<?php $this->load->view("explore/good-item");?>
		<?php $this->load->view("explore/good-item");?>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<?php $this->load->view("explore/modal-channels"); ?>
	<script>
		require(["jquery"],function($){
			$(".tab-link:eq(0)").addClass("current");
		});
	</script>
</body>
</html>