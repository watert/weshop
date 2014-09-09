<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble wishlist edit">

	<?php // $this->load->view("explore/navbar"); ?>
	<?php $this->load->view("wishlist/tabs"); ?>
	<script>
		$(".navbar .nav-link").removeClass("current").eq(1).addClass("current");
	</script>

	<div class="container my-wishes section">
		<span data-link="wishlist/profile" class="pull-right btn btn-link btn-finish">完成</span>
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
	<div class="container tabbar">
		<div class="text-right">
			<button class="btn-remove btn btn-danger"><i class="fa fa-trash"></i> 删除</button>
		</div>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php  // $this->load->view("_common/tabbar"); ?>
	<?php $this->load->view("_common/footer"); ?>
	<?php $this->load->view("wishlist/modal-more"); ?>
	<script>
		$(".tab-link:eq(1)").addClass("current");
		$(".btn-remove").click(function(){
			if(confirm("确认删除？")){
				$(".btn-finish").click()
			}
		});
		// require(["rmodal"],function(){

		// })
	</script>
</body>
</html>
