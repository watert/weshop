<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header",array("title"=>"新建心愿单"));?>
</head>
<body class="bubble wishlist create">
	<form action="">
		<div class="page-content">
			<input type="text" class="form-control" placeholder="请填写心愿单名字">
		</div>
	</form>
	<div class="page-content options">
		<div class="option-item">
			<span class="pull-right btn-option">
				<i class="fa fa-check"></i>
			</span>
			<div class="option-item-text">私人</div>
		</div>
		<hr>
		<div class="option-item">
			<span class="pull-right checked btn-option">
				<i class="fa fa-check"></i>
			</span>
			<div class="option-item-text">公开</div>
		</div>
	</div>
</body>
</html>
