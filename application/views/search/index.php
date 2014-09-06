<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble search">
	<div class="navbar navbar-default">
		<div class="navbar-inner">
			<div class="page-content">
				<div class="barbuttons pull-right">
					<div data-link="javascript:history.go(-1)" class="btn btn-link btn-cancel">取消</div>
				</div>
				<div class="searchbar">
					<input type="text" placeholder="搜索" class="form-control">
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<p class="text-muted text-center">搜索界面</p>
	

	<?php $this->load->view("_common/tabbar"); ?>
	<script>
		require(["jquery"],function($){
			$(".tab-link:eq(0)").addClass("current");
		});
	</script>
</body>
</html>
