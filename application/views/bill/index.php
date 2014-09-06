<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble explore">

	<div class="navbar navbar-default">
		<div class="navbar-inner">
			<div class="container">
			</div>
		</div>
	</div>
	
	<div class="container good-items">
		<?php $this->load->view("explore/good-item");?>
		<?php $this->load->view("explore/good-item");?>
		<?php $this->load->view("explore/good-item");?>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<script>
		require(["jquery"],function($){
			$(".tab-link:eq(0)").addClass("current");
		});
	</script>
</body>
</html>
