<?php
if(!isset($title))$title="购物";
?>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=false" />
	<meta charset="UTF-8">
	<base href="<?=base_url();?>">

	<script src="/weblib2/pack.min.js"></script>
	<link rel="stylesheet" href="public/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/style.css">

	<!-- <script src="public/bubble.all.min.js"></script> -->
	<title><?=$title?></title>
	<script>
		// require(["public/bubble.all.min.js"])
		require(["public/js/fastclick.js","bootstrap","public/js/rmodal.js"],function(fastclick){
			window.FastClick = fastclick;
			require(["public/js/common.js"]);
		});
	</script>
	<?php $this->load->view("_common/functions"); ?>