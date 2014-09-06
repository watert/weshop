<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble wishlist">

	<?php $this->load->view("wishlist/tabs"); ?>
	
	<div class="">
		<div class="feeds">
			<?php $this->load->view("wishlist/feed-item");?>
			<?php $this->load->view("wishlist/feed-item");?>
			<?php $this->load->view("wishlist/feed-item");?>
			<?php $this->load->view("wishlist/feed-item");?>
			<?php $this->load->view("wishlist/feed-item");?>
		</div>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<?php $this->load->view("_common/footer"); ?>
	<?php $this->load->view("wishlist/modal-more"); ?>
	<script>
		$(".tab-link:eq(1)").addClass("current");
	</script>
</body>
</html>
