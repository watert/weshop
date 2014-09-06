
	<div class="container text-center tabbar">
		<div class="row">
			<div class="col-xs-2 col"></div>
			<?php  
				$tabs = array(
					"explore"=>array("name"=>"购物","icon"=>"fa-home","link"=>"./"),
					"boards"=>array("name"=>"心愿池","icon"=>"fa-star-o","link"=>"wishlist"),
					// "cart"=>array("name"=>"购物车","icon"=>"fa-shopping-cart"),
					// "profile"=>array("name"=>"个人中心","icon"=>"fa-user")
				);
				
				foreach ($tabs as $key => $tab):
			?>
			<div class="col col-xs-4">
				<a href="<?=$tab["link"]?>" class="tab-link">
					<i class="fa <?=$tab["icon"]?>"></i><br>
					<?=$tab["name"]?>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>