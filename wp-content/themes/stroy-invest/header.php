<!DOCTYPE html>
<html lang="ru">

<head>
	
	<meta charset="utf-8">
	

	<title>СтройИнвест</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="assets/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

<!-- 	<link rel="stylesheet" href="assets/css/main.min.css"> -->
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&load=Geolink"
 type="text/javascript"></script>
	<?php wp_head(); ?>
	

</head>

<body>
	
	<div id="page_preloder" class="preloder">
		<div class="loader">
			<div class="loder_2"></div>
		</div>
	</div>

	<div class="container">
		<div class="top-nav">

			<div class="btn-wrapper">
				<div class="top-nav_menu-btn">
					<span></span>
				</div>
			</div>
			
			<div class="row justify-content-between align-items-center">
				<div class="col-xl-auto col-lg-2">
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<!-- /.col-md-auto -->
				<div class="col-xl-auto col-lg-10 top-nav_menu-slide">

					<?php wp_nav_menu( array(
						'container'       => 'ul',
						'container_class' => 'top-nav_menu',
						'menu_class'      => 'top-nav_menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => '',
					) ); ?>


				</div>
				<!-- /.col-md-auto -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.top-nav -->