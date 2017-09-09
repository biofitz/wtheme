<!DOCTYPE html>
<html lang="uk">
<head>
	
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta charset="utf-8"/>
	<?php wp_head(); ?>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<!--<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="Winner"/>
	<meta property="og:title" content="Winner"/>
	<meta property="og:description" content="Офіційний дистриб'ютор автомобілів Ford, Volvo, Jaguar, Land Rover, Porsche, Bentley"/>-->
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

<div id="error_page_screen">
	<div id="error_page_screen_inner">
		<h1 class="h">
			404 error<br/>
		</h1>
		<p class="brand_h2">page not found</p>
	</div>
</div>



<!-- second commit -->
<?php wp_footer(); ?>

<div id="memory">
<?php
echo 'Memory: '
	. round(memory_get_usage()/1024/1024, 2) . 'MB '
	.' |  MySQL:' . get_num_queries() . ' | ';
timer_stop(1);
echo 'sec';
?>
</div>
</body>
</html>
