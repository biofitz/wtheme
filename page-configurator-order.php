<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<?php
$img = strip_tags(trim($_POST["img"]));
$brand = strip_tags(trim($_POST["brand"]));
$model = strip_tags(trim($_POST["model"]));
$vin = strip_tags(trim($_POST["vin"]));
$id = strip_tags(trim($_POST["id"]));
$price = strip_tags(trim($_POST["price"]));
$release_year = strip_tags(trim($_POST["release_year"]));
$chasis = strip_tags(trim($_POST["chasis"]));
$color_id = strip_tags(trim($_POST["color_id"]));
$color_name_en = strip_tags(trim($_POST["color_name_en"]));
$dealer_city = strip_tags(trim($_POST["dealer_city"]));
$dealer_code = strip_tags(trim($_POST["dealer_code"]));
$dealer_name = strip_tags(trim($_POST["dealer_name"]));
$dealer_url = strip_tags(trim($_POST["dealer_url"]));
$displacement = strip_tags(trim($_POST["displacement"]));
$fuel = strip_tags(trim($_POST["fuel"]));
$gear_id = strip_tags(trim($_POST["gear_id"]));
$gear_name = strip_tags(trim($_POST["gear_name"]));
$gear_type_id = strip_tags(trim($_POST["gear_type_id"]));
$market_type = strip_tags(trim($_POST["market_type"]));
$power = strip_tags(trim($_POST["power"]));
$version = strip_tags(trim($_POST["version"]));
?>


<!-- BEGIN #order_page -->
<div id="order_page">
	<div id="order_page_inner">
	
		<h1 class="h">Замовити авто</h1>

		<img class="auto_img_device" src="<?php echo $img ?>" alt="" />

		<!-- BEGIN #configurator_order_form_step_two -->
		<form id="configurator_order_form_step_two" class="configurator_order_form form" method="post" autocomplete="on">
			<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
		
			<p class="form_clue">Поля, відмічені * є обов'язковими. Прізвище та ім‘я заповнюються українськими літерами.</p>
			
			<div class="hidden_part">
				<input name="img" value="<?php echo $img ?>" readonly />
				<input id="brand_field_check" name="brand" value="<?php echo $brand ?>" readonly />
				<input name="model" value="<?php echo $model ?>" readonly />
				<input name="vin" value="<?php echo $vin ?>" readonly />
				<input name="id" value="<?php echo $id ?>" readonly />
				<input name="price" value="<?php echo $price ?>" readonly />
				<input name="release_year" value="<?php echo $release_year ?>" readonly />
				<input name="chasis" value="<?php echo $chasis ?>" readonly />
				<input name="color_id" value="<?php echo $color_id ?>" readonly />
				<input name="color_name_en" value="<?php echo $color_name_en ?>" readonly />
				<input name="dealer_city" value="<?php echo $dealer_city ?>" readonly />
				<input name="dealer_code" value="<?php echo $dealer_code ?>" readonly />
				<input name="dealer_name" value="<?php echo $dealer_name ?>" readonly />
				<input name="dealer_url" value="<?php echo $dealer_url ?>" readonly />
				<input name="displacement" value="<?php echo $displacement ?>" readonly />
				<input name="fuel" value="<?php echo $fuel ?>" readonly />
				<input name="gear_id" value="<?php echo $gear_id ?>" readonly />
				<input name="gear_name" value="<?php echo $gear_name ?>" readonly />
				<input name="gear_type_id" value="<?php echo $gear_type_id ?>" readonly />
				<input name="market_type" value="<?php echo $market_type ?>" readonly />
				<input name="power" value="<?php echo $power ?>" readonly />
				<input name="version" value="<?php echo $version ?>" readonly />
			</div>
			
			<div class="flex_container">
				<div class="left_part">
					<p class="input_title">Контактні дані*</p>
					
					<div class="field_wrapper">
						<input class="field field_required field_second_name" name="second_name" type="text" placeholder="Прізвище">
						<p class="alarm alarm_second_name"></p>
					</div>
					
					<div class="field_wrapper">
						<input class="field field_required field_first_name" name="first_name" type="text" placeholder="Ім‘я">
						<p class="alarm alarm_first_name"></p>
					</div>
					
					<div class="field_wrapper">
						<input class="field field_required field_email" name="email" type="text" placeholder="E-mail">
						<p class="alarm alarm_email"></p>
					</div>
					
					<div class="field_wrapper">
						<input class="field field_required field_phone ua" name="phone" type="text" placeholder="Телефон: +38...">
						<p class="alarm alarm_phone"></p>
					</div>
				</div>
				
				<div class="right_part">
					<img class="auto_img_desktop" src="<?php echo $img ?>" alt="<?php echo $brand . " " . $model ?>" />
				</div>
			</div>
			
			<div class="bottom_part">
				<div class="field_wrapper">
					<div id="configurator_order_form_step_two_check" data-focus="false"></div>
					
					<p class="field_p">
						Я надаю згоду на обробку моїх персональних даних ТОВ «Віннер Імпортс Україна, Лтд» та його уповноваженим Дилерам та гарантую, що персональні дані, надані мною, є достовірними, надані особисто та добровільно, 
						а також засвідчую, що мене було повідомлено про мої <a href="/data-policy" target="_blank">права</a> у сфері обробки персональних даних.
					</p>
				
					<input class="field field_required field_confirm" name="confirm" type="hidden">
					<p class="alarm alarm_confirm"></p>
				</div>
				
				<a id="configurator_order_page_form_go" class="simple_form_go form_go button_blue" href="#">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Замовити</span>
				</a>
			</div>
		</form>
		<!-- END #configurator_order_form_step_two -->

	</div>
</div>
<!-- BEGIN #order_page -->

<?php get_sidebar("footer-ua");?>

<script>
	if(document.getElementById("brand_field_check").value == "")
		location.href = "/";
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/formvalidation-order-ua.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>