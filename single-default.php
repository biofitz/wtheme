<?php 
	if(pll_current_language() == "en"){
		$c_header = "en";
		$c_brand_menu = "brand-menu-en";
		$c_footer = "footer-en";
		$c_prev = "previous news";
		$c_next = "next news";
		$c_add_menu = "category_additional_menu_en";
		$fb_loc = '<script type="text/javascript">(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="http:\/\/connect.facebook.net\/en_US\/all.js";fjs.parentNode.insertBefore(js,fjs)}(document,"script","facebook-jssdk"));</script>';
	}
	else{
		$c_header = "ua";
		$c_brand_menu = "brand-menu-ua";
		$c_footer = "footer-ua";
		$c_prev = "попередня новина";
		$c_next = "наступна новина";
		$c_add_menu = "category_additional_menu_ua";
		$fb_loc = "";
	}
	
	get_header($c_header);
	get_sidebar($c_brand_menu);
?>

<!-- BEGIN #category_additional_menu_wrapper -->
<div id="category_additional_menu_wrapper">
	<div id="category_additional_menu_wrapper_inner">
		<div id="category_additional_menu">
			<?php wp_nav_menu(array("menu" => $c_add_menu)); ?>
		</div>
	</div>
	
	<div id="cat_add_wrapper"><ul id="cat_new_additional_menu"></ul></div>
	
	<select id="category_additional_select"></select>
</div>
<!-- END #category_additional_menu_wrapper -->	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?> 

	<!-- BEGIN #single_new_content_wrapper -->
	<div id="single_new_content_wrapper">
		<h1 class="single_new_title"><?php the_title(); ?></h1>

		<div id="single_cat_and_date_wrap">
			<p class="single_new_blog_date"><?php echo get_the_date(); ?></p>
			<p id="single_breadcrumbs"><?php the_category(' > '); ?></p>
		</div>
		

		
		<div id="single_new_content">
			<?php the_content(); ?>
		</div>
		
		<div id="single_pag_wrap">
			<p id="single_pag_prev" class="single_pag">
				<?php previous_post_link('%link', $c_prev, TRUE); ?>
			</p>
			
			<p id="single_pag_next" class="single_pag">
				<?php next_post_link('%link', $c_next, TRUE); ?>
			</p>
		</div>
	</div>
	<!-- END #single_new_content_wrapper -->

	<?php endwhile;?>  
<?php endif;?> 

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<?php echo $fb_loc; ?>

<?php
	get_sidebar($c_footer);
	get_footer();
?>
