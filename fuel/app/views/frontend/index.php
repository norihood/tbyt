<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Items</h2>
		<?php for ($i=0; $i < 6; $i++) { ?>
		<!-- <div class="productinfo my-zoom">
			<div class="wm-zoom-box">
				<?php echo Asset::img('home/product1.jpg', array('class' => '', 'alt' => '', 'data-hight-src' => 'assets/img/home/DSC_0646.JPG', 'data-loader-src' => 'assets/img/home/loader.gif')); ?>
			</div>
		</div> -->
		<div class="col-sm-4 my-zoom">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center ">
							<!-- <div class="wm-zoom-box"> -->
								<?php echo Asset::img('home/product1.jpg', array('class' => '', 'alt' => '', 'data-hight-src' => 'assets/img/home/DSC_0646.JPG', 'data-loader-src' => 'assets/img/home/loader.gif')); ?>
							<!-- </div> -->
							
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
						<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php } ?>
		
	</div><!--features_items-->
	
	<div class="category-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
				<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
				<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
				<li><a href="#kids" data-toggle="tab">Kids</a></li>
				<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade active in" id="tshirt" >
				<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<?php echo Asset::img('home/gallery1.jpg', array('class' => '', 'alt' => '')); ?>
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			
			<div class="tab-pane fade" id="blazers" >
				<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<?php echo Asset::img('home/gallery4.jpg', array('class' => '', 'alt' => '')); ?>
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			
			<div class="tab-pane fade" id="sunglass" >
				<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<?php echo Asset::img('home/gallery3.jpg', array('class' => '', 'alt' => '')); ?>
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			
			<div class="tab-pane fade" id="kids" >
				<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<?php echo Asset::img('home/gallery1.jpg', array('class' => '', 'alt' => '')); ?>
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			
			<div class="tab-pane fade" id="poloshirt" >
				<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<?php echo Asset::img('home/gallery2.jpg', array('class' => '', 'alt' => '')); ?>
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div><!--/category-tab-->
	
	<div class="recommended_items"><!--recommended_items-->
		<h2 class="title text-center">recommended items</h2>
		
		<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<?php for ($i=0; $i < 3; $i++) { ?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<?php echo Asset::img('home/recommend1.jpg', array('class' => '', 'alt' => '')); ?>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="item">
					<?php for ($i=0; $i < 3; $i++) { ?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<?php echo Asset::img('home/recommend1.jpg', array('class' => '', 'alt' => '')); ?>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			  </a>
			  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			  </a>			
		</div>
	</div><!--/recommended_items-->
	
</div>
