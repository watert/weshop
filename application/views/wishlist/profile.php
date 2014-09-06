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

	<div class="container my-wishes section">
		<span class="pull-right btn btn-link btn-edit">编辑</span>
		<h3 class="section-title">您添加了<span class="text-danger">3个</span>心愿单</h3>
		<div class="clear"></div>
		<div class="wishlists">
			<div class="row">
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"我的生日"));?>
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"买给女朋友的"));?>
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"周末买的"));?>
			</div>
		</div>
	</div>
	<div class="container my-follows section">
		<h3 class="section-title">您关注了<span class="text-danger">5个</span>心愿单</h3>
		<div class="wishlists">
			<div class="row">
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"我的生日"));?>
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"买给女朋友的"));?>
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"周末买的"));?>
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"数码"));?>
				<?php $this->load->view("wishlist/wishlist-item",array("title"=>"书"));?>
			</div>
		</div>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<?php $this->load->view("_common/footer"); ?>
	<?php $this->load->view("wishlist/modal-more"); ?>
	<script>
		$(".tab-link:eq(1)").addClass("current");
		require(["rmodal"],function(){

		})
	</script>
</body>
</html>
