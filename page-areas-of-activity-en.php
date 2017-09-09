<?php get_header("en");?>

<?php get_sidebar("brand-menu-en"); ?>

<!-- BEGIN .areas_of_activity_title_block -->
<div class="areas_of_activity_title_block">
	<h1 class="h">Areas of activity</h1>
</div>
<!-- END .areas_of_activity_title_block -->

<!-- BEGIN .area_of_activity_block -->
<div class="area_of_activity_block first">
	<h2 class="brand_h2">Automotive business</h2>
	
	<div class="container area_of_activity_content area_of_activity_content_first">
		<div class="part">
			<div class="area area_1" data-popup="en/pop-up-1">
				<div class="area_cover"></div>
				<h3>Winner Imports Ukraine</h3>
			</div>
			<div class="area area_2" data-popup="en/pop-up-2">
				<div class="area_cover"></div>
				<h3>Winner Leasing</h3>
			</div>
		</div>
		<div class="part">
			<div class="area area_3" data-popup="en/pop-up-3">
				<div class="area_cover"></div>
				<h3>Winner Automotive</h3>
			</div>
			<div class="area area_4" data-popup="en/pop-up-4">
				<div class="area_cover"></div>
				<h3>Porsche Centre Kyiv Airport</h3>
			</div>
		</div>
	</div>
</div>
<!-- END .area_of_activity_block -->

<!-- BEGIN .area_of_activity_block -->
<div class="area_of_activity_block second">
	<h2 class="brand_h2">Construction and Real Estate</h2>
	
	<div class="container area_of_activity_content area_of_activity_content_second">
		<div class="part">
			<div class="area area_5" data-popup="en/pop-up-5">
				<div class="area_cover"></div>
				<h3>Winner Construction</h3>
			</div>
			<div class="area area_6" data-popup="en/pop-up-6">
				<div class="area_cover"></div>
				<h3>Winner Facility Management</h3>
			</div>
		</div>
		<div class="part">
			<div class="area area_7" data-popup="en/pop-up-7">
				<div class="area_cover"></div>
				<h3>Winner Property Management</h3>
			</div>
			<div class="area area_8" data-popup="en/pop-up-8">
				<div class="area_cover"></div>
				<h3>Beauty salon Bellagio </h3>
			</div>
		</div>
	</div>
</div>
<!-- END .area_of_activity_block -->

<!-- BEGIN #activity_popup_wrapper -->
<div id="activity_popup_wrapper">
	<div id="activity_popup_cover"></div>
	<div id="activity_popup">
		<img id="activity_popup_close" src="<?php bloginfo('stylesheet_directory'); ?>/img/general/close_cross.svg" alt="закрити" />
		<div id="activity_popup_content"></div>
	</div>
</div>
<!-- END #activity_popup_wrapper -->

<?php get_sidebar("footer-en");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>