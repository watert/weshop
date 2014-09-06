<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble wishlist profile">

	<?php // $this->load->view("explore/navbar"); ?>
	<?php $this->load->view("wishlist/tabs"); ?>
	<script>
		$(".navbar .nav-link").removeClass("current").eq(1).addClass("current");
	</script>

	<div class="page-content">
		<div class="wishlists">
			<div class="row">
				<div class="col-xs-4">
					<img alt="" style="width:100%; background-image:url(<?=image_wishlist();?>); " class="img-square center-cropped">
					<div class="caption text-center">
						我的生日
					</div>
				</div>
				<div class="col-xs-4">
					<img alt="" style="width:100%; background-image:url(<?=image_wishlist();?>); " class="img-square center-cropped">
					<div class="caption text-center">
						买给女朋友的
					</div>
				</div>
				<div class="col-xs-4">
					<img alt="" style="width:100%; background-image:url(<?=image_wishlist();?>); " class="img-square center-cropped">
					<div class="caption text-center">
						周末买的
					</div>
				</div>
				<div class="col-xs-4">
					<img alt="" style="width:100%; background-image:url(<?=image_wishlist();?>); " class="img-square center-cropped">
					<div class="caption text-center">
						数码
					</div>
				</div>
				<div class="col-xs-4">
					<img alt="" style="width:100%; background-image:url(<?=image_wishlist();?>); " class="img-square center-cropped">
					<div class="caption text-center">
						书
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<?php $this->load->view("_common/footer"); ?>
	<script>
		require(["jquery"],function($){
			$(".tab-link:eq(1)").addClass("current");
		});
	</script>
</body>
</html>
