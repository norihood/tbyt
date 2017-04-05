<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <?php echo Asset::css(array('bootstrap.min.css', 'font-awesome.min.css', 'prettyPhoto.css', 'price-range.css', 'animate.css', 'main.css', 'responsive.css', 'custome.css')); ?>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php echo isset($top_header) ? $top_header : '' ?>
		
		<?php echo isset($mid_header) ? $mid_header : '' ?>
	
		<?php echo isset($bot_header) ? $bot_header : '' ?>
	</header><!--/header-->
	
	<?php echo isset($slider) ? $slider : '' ?>
	
	<section>
		<div class="container content">
			<?php if (isset($breadcrumb)) echo $breadcrumb; ?>

			<div class="row">
				<?php echo isset($left_sidebar) ? $left_sidebar : '' ?>
				<?php if (isset($content)) echo $content; ?>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<?php echo isset($top_footer) ? $top_footer : '' ?>
		
		<?php echo isset($wig_footer) ? $wig_footer : '' ?>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->

  	<?php echo Asset::js(array('jquery.js', 'bootstrap.min.js', 'jquery.scrollUp.min.js', 'price-range.js', 'jquery.prettyPhoto.js', 'jquery.imageLens.js', 'main.js')); ?>
</body>
</html>