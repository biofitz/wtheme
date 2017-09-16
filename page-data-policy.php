<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?> 

	<!-- BEGIN #single_new_content_wrapper -->
	<div id="single_new_content_wrapper">
		<div id="single_new_content">
			<?php the_content(); ?>
		</div>
	</div>
	<!-- END #single_new_content_wrapper -->

	<?php endwhile;?>  
<?php endif;?> 

<div class="policy_last_space"></div>

<?php get_sidebar("footer-ua");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>