<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<!-- BEGIN .areas_of_activity_title_block -->
<div class="areas_of_activity_title_block">
	<h1 class="h">Сфери діяльності</h1>
</div>
<!-- END .areas_of_activity_title_block -->

<!-- BEGIN .area_of_activity_block -->
<div class="area_of_activity_block first">
	<h2 class="brand_h2">Автомобільний бізнес</h2>
	
	<div class="container area_of_activity_content area_of_activity_content_first">
		<div class="part">
			<div class="area area_1" data-popup="ua/pop-up-1">
				<div class="area_cover"></div>
				<h3>Віннер Імпортс Україна</h3>
			</div>
			<div class="area area_2" data-popup="ua/pop-up-2">
				<div class="area_cover"></div>
				<h3>Віннер Лізинг</h3>
			</div>
		</div>
		<div class="part">
			<div class="area area_3" data-popup="ua/pop-up-3">
				<div class="area_cover"></div>
				<h3>Віннер Автомотів</h3>
			</div>
			<div class="area area_4" data-popup="ua/pop-up-4">
				<div class="area_cover"></div>
				<h3>Порше Центр Київ Аеропорт</h3>
			</div>
		</div>
	</div>
</div>
<!-- END .area_of_activity_block -->

<!-- BEGIN .area_of_activity_block -->
<div class="area_of_activity_block second">
	<h2 class="brand_h2">Будівництво та нерухомість</h2>
	
	<div class="container area_of_activity_content area_of_activity_content_second">
		<div class="part">
			<div class="area area_5" data-popup="ua/pop-up-5">
				<div class="area_cover"></div>
				<h3>Віннер Будівництво</h3>
			</div>
			<div class="area area_6" data-popup="ua/pop-up-6">
				<div class="area_cover"></div>
				<h3>Віннер Фасіліті Менеджмент</h3>
			</div>
		</div>
		<div class="part">
			<div class="area area_7" data-popup="ua/pop-up-7">
				<div class="area_cover"></div>
				<h3>Віннер Проперті Менеджмент</h3>
			</div>
			<div class="area area_8" data-popup="ua/pop-up-8">
				<div class="area_cover"></div>
				<h3>Салон краси «Bellagio»</h3>
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

<?php get_sidebar("footer-ua");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>