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
				array("name"=>"数码"),
				array("name"=>"百货"),
				array("name"=>"零食"),
				array("name"=>"女装"),
				array("name"=>"男装"),
				array("name"=>"童装"),
				array("name"=>"运动"),
				array("name"=>"鞋包"),
				array("name"=>"配饰"),
				array("name"=>"生鲜"),
				array("name"=>"折扣"),
				array("name"=>"奢侈品")
				);
			foreach ($channels as $key => $item): ?>
				
				
				<div class="col-xs-4">
					<div class="channel-item"><?=$item["name"]?></div>
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