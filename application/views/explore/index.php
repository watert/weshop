<!DOCTYPE html>
<html lang="en">
<head>
	<script> if(!localStorage["channels"]){location.href="explore/select_channels";} </script>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble explore">

	<?php $this->load->view("explore/navbar"); ?>
	
	<div class="container good-items">
		<?php $this->load->view("explore/good-item");?>
		<?php $this->load->view("explore/good-item");?>
		<?php $this->load->view("explore/good-item");?>
	</div>

	<?php // $this->load->view("_common/tabs"); ?>

	<?php $this->load->view("_common/tabbar"); ?>
	<?php $this->load->view("explore/modal-channels2"); ?>
	<script src="public/js/rmodal.js"></script>
	<script>
		$(".tab-link:eq(0)").addClass("current");

		var $modal = $("#modal-channels");
		var modal = $modal.data("rmodal")
		if(location.hash=="#modal-channels"){
			modal.show();
			// $("#modal-channels").addClass("show");
		}
		$modal.on("rmodal-show",function(){
				location.hash = "#modal-channels";
			})
			.on("rmodal-hide",function(){
				if(location.hash == "#modal-channels")history.back()
			});
	</script>
</body>
</html>
