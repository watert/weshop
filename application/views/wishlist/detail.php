<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble wishlist detail">

	<?php // $this->load->view("explore/navbar"); ?>
	
	<div class="page-content" id="my-wishlists">
		<div class="container topbar">
			<a href="" class="pull-right btn btn-danger btn-follow btn-o">关注</a>
			<img src="<?=image_avatar()?>" alt="" class="avatar pull-left">
			<div>
				<div class="wishlist-heading"> 
					<a href="" class="user-link">wasabi 的心愿单</a> 
					<span>"我的驴友装"</span>
				</div>

				<div class="meta">
					<span> <strong class="text-muted">20</strong>关注 </span>
					<span> <strong class="text-danger">5</strong>共同好友关注 </span>
				</div>
				<div class="followers">
					<img src="<?=image_avatar()?>" alt="" class="avatar">
					<img src="<?=image_avatar()?>" alt="" class="avatar">
					<img src="<?=image_avatar()?>" alt="" class="avatar">
					<img src="<?=image_avatar()?>" alt="" class="avatar">
				</div>
			</div>
		</div>
	</div>
	<div class="feeds">
		<?php $this->load->view("wishlist/good-item");?>
		<?php $this->load->view("wishlist/good-item");?>
		<?php $this->load->view("wishlist/good-item");?>
		<?php $this->load->view("wishlist/good-item");?>
		<?php $this->load->view("wishlist/good-item");?>
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
