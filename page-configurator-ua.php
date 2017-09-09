<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/material-design-iconic-font.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.css">

	<?php
	if(isset($_POST["brand"]) && $_POST["brand"] != "" && isset($_POST["model"]) && $_POST["model"] != ""){
		$brand = strip_tags(trim($_POST["brand"]));
		$model = strip_tags(trim($_POST["model"]));
		
		echo "<p id='response_brands' class='data_from_mp'>$brand</p>";
		echo "<p id='response_models' class='data_from_mp'>$model</p>";
	}
	?>

	<!--<p id="response_models"></p>-->
	
	<form id="configurator_form" class="configurator_form form" autocomplete="off">
		<label>Бренд<br/><input name="brand" placeholder="Бренд" value="any"  /></label>
		<label>Модель<br/><input name="model" placeholder="Модель" value="any" readonly /></label>
		<label>Тип палива<br/><input name="fuel" placeholder="Тип палива" value="any" readonly /></label>
		<label>Коробка передач<br/><input name="gears_types" placeholder="Коробка передач" value="any" readonly /></label>
		<label>Тип кузова<br/><input name="chasis" placeholder="Тип кузова" value="any" readonly /></label>
		<label>Максимальна ціна<br/><input name="min_price" placeholder="Максимальна ціна" value="any" readonly /></label>
		<label>Мінімальна ціна<br/><input name="max_price" placeholder="Мінімальна ціна" value="any" readonly /></label>
		<!--<button id="config_btn">button</button>-->
	</form>
	
	<div id="configurator_wrapper">
		
		<button id="configurator_turn">Відкрити опції</button>
		
		<div id="configurator" class="configurator">
			<div id="configurator_height_block">
				<div class="select_wrapper select_price_limit_wrapper">
					<div class="select_block select_price_limit">
						<p class="select_title">Ціна тис., грн.</p>
						<p class="amount">
							<span class="amount_min"></span> <span class="amount_max"></span>
						</p>
						<div class="range_slider"></div>
					</div>
				</div>
			
				<div class="configurator_inner">
					<div class="select_wrapper select_brands_wrapper">
						<p class="select_title">Бренд</p>
						<p class="option cf_brand any active" data-name="brand" data-value="any">Будь-який</p>
						<ul class="select_block select_brands"></ul>
					</div>
					
					<div class="select_wrapper select_models_wrapper">
						<p class="select_title">Модель</p>
						<p class="option cf_model any active" data-name="model" data-value="any">Будь-яка</p>
						<div class="select_block select_models"></div>
						<div class="choose_deph cp show_choose_deph">
							<p>Оберіть бренд</p>
						</div>
					</div>
					
					<div class="select_wrapper select_fuel_wrapper">
						<p class="select_title">Тип палива</p>
						<p class="option cf_fuel any active" data-name="fuel" data-value="any">Будь-який</p>
						<div class="select_block select_fuel"></div>
					</div>
					
					<div class="select_wrapper select_gears_types_wrapper">
						<p class="select_title">Коробка передач</p>
						<p class="option cf_gears_types any active" data-name="gears_types" data-value="any">Будь-яка</p>
						<div class="select_block select_gears_types"></div>
					</div>
					
					<div class="select_wrapper select_chasis_wrapper">
						<p class="select_title">Тип кузова</p>
						<p class="option cf_chasis any active" data-name="chasis" data-value="any">Будь-який</p>
						<div class="select_block select_chasis"></div>
					</div>
				</div>
				
				<button class="get_group">Знайти авто</button>
			</div>
		</div>
		
		<div id="result_canvas">
			<div class="cover"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/tail-spin.svg" alt="" /></div>
			<div id="bg_block">
				<p id="result_cnt_p">Знайдено результатів: <span id="result_cnt"></span></p>
			
				<div id="result_canvas_inner"></div>
				
				<button id="config_show_more_obj">Показати ще <span id="config_rest"></span></button>
			</div>
		</div>
		
		<div id="global_conf_preloader">
			<div class="cover">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/tail-spin.svg" alt="" />
			</div>
		</div>
		
		<div id="vehicles_popup">
			<div class="cover"></div>
			<div id="vehicles_content_wrapper">
				<div id="vehicles_content">
					<div class="top_part">
						<div id="vehicles_content_head">	
							<p>Авто в наявності:</p>
							<img class="close_cross" src="<?php bloginfo('stylesheet_directory'); ?>/img/general/close_cross.svg" alt="X" />
						</div>
						<div id="vehicles_parent_info"></div>
					</div>
					<div class="bottom_part">
						<table id="vehicles_table">
							<thead>
								<tr>
									<th></th>
									<th>VIN</th>
									<th>Колір</th>
									<th>Ціна</th>
									<th>Дилер</th>
									<th>Місто</th>
								</tr>
							</thead>
							<tbody id="vehicles_tbody"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	
	</div>

<?php get_sidebar("footer-ua");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/configurator-ua.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>