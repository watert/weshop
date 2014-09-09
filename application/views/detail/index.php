<!DOCTYPE html>
<html lang="en">
<head>
	<? $this->load->view("_common/header");?>
</head>
<body id="detail" class="bubble detail">

	<?php $this->load->view("detail/good-jumbotron");?>

	<div class="spec section">
		<i class="fa fa-angle-right pull-right"></i>
		<div class="spec-text">
			规格 樱草绿 1个
		</div>
	</div>

	<div class="section details">
		<ul class="link-list">
			<li class="link-item"><a href="javascript:void(0)"> 
				<i class="fa fa-angle-right pull-right"></i>
				<i class="fa fa-image"></i> 图文详情</a>
			</li>
			<li class="link-item"><a href="javascript:void(0)"> 
				<i class="fa fa-angle-right pull-right"></i>
				<i class="fa fa-puzzle-piece"></i> 产品参数</a>
			</li>
			<li class="link-item"><a href="javascript:void(0)"> 
				<i class="fa fa-angle-right pull-right"></i>
				<i class="fa fa-comments"></i> 累计评价(309)</a>
			</li>
		</ul>
		

		<?php // $this->load->view("detail/tabs"); ?>
	</div>
	
	<div class=" section comments">
		<div class="comment-item">
			<div class="meta pull-right text-muted">小小冰雹2012 2014-09-03</div>
			<div class="stars text-danger"> 
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<div class="comment-content">
				还不错，就是睡眠质量我觉得统计不准
			</div>
			<div class="comment-good-spec text-muted">
				颜色: 樱草绿<br>
				购买日期: 2014-07-24
			</div>
		</div>
		<div class="comment-item">
			<div class="meta pull-right text-muted">小小冰雹2012 2014-09-03</div>
			<div class="stars text-danger"> 
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<div class="comment-content">
				还不错，就是睡眠质量我觉得统计不准
			</div>
			<div class="comment-good-spec text-muted">
				颜色: 樱草绿<br>
				购买日期: 2014-07-24
			</div>
		</div>
	</div>
	<div class="section recommend">
		<h3 class="section-title">猜您喜欢</h3>
		<div class="row">
			<div class="col-xs-4">
				<div class="center-cropped img-square" 
					style="min-height:60px;background-image:url(<?=image_good_1080();?>);"></div>
				<div class="text-center good-title">纽曼多功能应急车载电源</div>
			</div>
			<div class="col-xs-4">
				<div class="center-cropped img-square" 
					style="min-height:60px;background-image:url(<?=image_good_1080();?>);"></div>
				<div class="text-center good-title">纽曼多功能应急车载电源</div>
			</div>
			<div class="col-xs-4">
				<div class="center-cropped img-square" 
					style="min-height:60px;background-image:url(<?=image_good_1080();?>);"></div>
				<div class="text-center good-title">纽曼多功能应急车载电源</div>
			</div>
		</div>
	</div>

	

	<?php $this->load->view("_common/tabbar-buy"); ?>
	<?php $this->load->view("detail/modal-params"); ?>
	<?php $this->load->view("_common/modal-add2wish"); ?>
	<?php $this->load->view("_common/footer"); ?>
</body>
</html>
