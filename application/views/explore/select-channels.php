<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body class="bubble explore select-channels">

	<div class="page-content">
		<h3 class="page-header text-center"> 请选择您所感兴趣的频道 </h3>
		
		<div class="channels row">
			<?php 
			$channels = array(
				array("name"=>"穿戴设备"),
				array("name"=>"户外热"),
				array("name"=>"创意生活"),
				array("name"=>"宝宝那些事"),
				array("name"=>"折扣"),
				array("name"=>"迪士尼"),
				array("name"=>"摄友宝箱"),
				array("name"=>"时尚潮人"),
				array("name"=>"享受慢生活")
			);

			foreach ($channels as $key => $item): ?>
				
				
				<div class="col-xs-4">
					<div data-toggle-class="active" class="channel-item"><?=$item["name"]?></div>
				</div>
		
			<?php endforeach;?>
		</div>
	</div>
	<div class="actions">
		<button class="btn btn-finish btn-danger">完成</button>
	</div>
	<script>
		$(".btn-finish").click(function(){
			localStorage["channels"] = [1,2,3];
			location.href="";
		});
	</script>
</body>
</html>