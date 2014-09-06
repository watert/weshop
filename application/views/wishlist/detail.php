<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble wishlist">

	<?php // $this->load->view("explore/navbar"); ?>
	
	<div class="page-content" id="my-wishlists">
		<div class="container" id="">
			<a href="" class="pull-right btn btn-danger">关注</a>
			<span class="avatar pull-left"><i class="fa fa-user"></i></span>
			<div>
				<div> 
					<a href="" class="user-link">waterwu</a> 
					<span>"我的驴友装"</span>
					<span class="count">
						(<strong class="text-danger">5</strong>件)
					</span> 
				</div>

				<div class="meta">
					<span> <strong class="text-danger">20</strong>关注 </span>
					<span class="text-small text-muted">更新于 2014-08-13</span>
				</div>
			</div>
		</div>
	</div>
	<div class="page-content">
		<div class="feeds">
			<?php $this->load->view("wishlist/good-item");?>
			<?php $this->load->view("wishlist/good-item");?>
			<?php $this->load->view("wishlist/good-item");?>
			<?php $this->load->view("wishlist/good-item");?>
			<?php $this->load->view("wishlist/good-item");?>
		</div>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<script>
		require(["jquery"],function($){
			$(".tab-link:eq(1)").addClass("current");
		});
	</script>
</body>
</html>
