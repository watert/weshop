<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble detail">
	<br>
	<div class="page-content" id="my-wishlists">
		<?php $this->load->view("explore/good-item"); ?>
		<?php $this->load->view("detail/tabs"); ?>
		<div id="tab-good-intro">
			<img src="" alt="" height="160px;" class="img-responsive">
			<img src="" alt="" height="160px;" class="img-responsive">
			<img src="" alt="" height="160px;" class="img-responsive">
		</div>
	</div>	

	

	<?php $this->load->view("_common/tabbar-wish"); ?>
</body>
</html>
