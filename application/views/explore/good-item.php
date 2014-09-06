
<div class="good-item">
	<div class="jumbotron" data-link="detail/"> 
		<span class="label-channel pull-right  label label-danger">降价</span>
		<div class="center-cropped" 
			style="background-image:url(<?=image_good_1080();?>);"></div>
		<img src="" alt="" class="img-responsive"> 
		<div class="caption">
			<h3 class="good-title" data-link="detail/">纽曼多功能应急车载电源</h3>
		</div>
	</div>
	
	<div class="comments">
		<div class="comment-item">
			<div class="comment-title">
				<img src="<?=image_avatar();?>" alt="" class="avatar">
				
				<span class="text-muted user">water 评论</span>
			</div>
			<div class="comment-content">
				<p>超级好用, 就是物流慢了点, 总体四星吧!</p>
			</div>
		</div>
	</div>
	<div class="price-row">
		<div class="buy-counts pull-right text-small text-muted">
			120 已购买
		</div>
		<span>微信价: </span>
		<strong class="price text-danger">120元</strong>
	</div>
	<div class="user-acts clearfix">
		<button data-link="detail/" class="btn btn-danger pull-right ">购买</button>
		<div class="hearts-container">
			<i class="fa fa-heart-o"></i>
			<span class="hearts-count"><?=rand(10,100)?></span>
		</div>
		<?for ($i=0; $i < rand(0,5); $i++) :?>
			<img src="<?=image_avatar();?>" alt="" class="avatar">
		<?endfor;?>
	</div>
</div>