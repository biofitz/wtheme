<!DOCTYPE html>
<html lang="uk">
<head>
	
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta charset="utf-8"/>
	<?php wp_head(); ?>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/general/folder.jpg" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/general/favicon.ico"/>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/css_reset.css"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css"/>
	<!--[if lt IE 10]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>

	<!-- BEGIN #preloader-->
	<div id="preloader">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/tail-spin.svg" alt="" />
	</div>
	
	<div id="preloader_cover"></div>
	<!-- END #preloader-->
	
	<?php 
		$apiPath = 'http://winner.bazooka.com.ua/course/';
		$apiData = file_get_contents($apiPath);
	?>
	
	<div style="display: none; z-index: 100; position: fixed; top: 0; left: 50%; width: 2px; height: 100vh; background: red;"></div>
	
	<!-- BEGIN #top_menu_wrapper -->
	<div id="top_menu_wrapper">
		<div id="top_menu_wrapper_inner">
			
			<a href="/">
				<img id="top_logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/general/top_logo.svg" alt="Головна" />
			</a>
			
			<div id="sandwich"><div></div><div></div><div></div></div>
			
			<div id="top_menu_block">
				<div id="search_wrapper" class="outer_menu_item">
					<div id="search_img_block">
						<img id="zoom_white" src="<?php bloginfo('stylesheet_directory'); ?>/img/general/zoom_white.svg" alt="Пошук" />
						<img id="zoom_blue" src="<?php bloginfo('stylesheet_directory'); ?>/img/general/zoom_blue.svg" alt="" />
					</div>
					<?php get_search_form(); ?>
				</div>
			
				<ul id="lang_turn" class="outer_menu_item"><?php pll_the_languages(array("show_flags"=>1, "show_names"=>1)); ?></ul>
				
				<div id="head_course_wrapper" class="outer_menu_item hcw_ua">
					<div id="head_course_hidden"><?php echo $apiData;?></div>
					<p id="head_course"></p>
				</div>
				
				<a id="head_course_archive" class="outer_menu_item ca_ua" href="<?php bloginfo('stylesheet_directory'); ?>/docs/currency/currency-archive-ua.pdf" target="_blank">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/head_course_archive_arrow.png" alt="" />
					архів валют
				</a>
				
				<div id="top_menu">
					<?php wp_nav_menu(array("menu" => "top_menu_ua")); ?>
				</div>
			</div>
			
		</div>
		
		<!-- BEGIN #device_menu_cover -->
		<div id="device_menu_cover"></div>
		<!-- END #device_menu_cover -->
	</div>
	<!-- END #top_menu_wrapper -->
	
	<div id="top_menu_device_margin"></div>