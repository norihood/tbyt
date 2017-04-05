<div class="col-sm-9 padding-right">
	<div class="features_items">
		<h2 class="title text-center">Features Items</h2>
		<?php for ($i=0; $i < 6; $i++) { ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center ">
						<?php echo Asset::img('home/product1.jpg', array('class' => 'my-zoom img-responsive', 'alt' => '', 'data-hight-src' => 'assets/img/home/DSC_0646.JPG', 'data-loader-src' => 'assets/img/home/loader.gif')); ?>
						<h3 class="price"><i class="fa fa-shopping-cart"></i> Giá: Liên hệ</h3>
						<p><a href="#">Easy Polo Black Edition</a></p>
						<a href="#" class="btn btn-default add-to-cart">Chi tiết</a>
					</div>
					<?php echo Asset::img('home/new.png', array('class' => 'new')); ?>
				</div>
			</div>
		</div>
		<?php } ?>
		<h3 class="text-right"><a href="#">Xem Thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h3>
	</div>
	
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Items</h2>
		<?php for ($i=0; $i < 6; $i++) { ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center ">
						<?php echo Asset::img('home/product1.jpg', array('class' => 'my-zoom img-responsive', 'alt' => '', 'data-hight-src' => 'assets/img/home/DSC_0646.JPG', 'data-loader-src' => 'assets/img/home/loader.gif')); ?>
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<h3 class="text-right"><a href="#">Xem Thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h3>
	</div>
</div>
