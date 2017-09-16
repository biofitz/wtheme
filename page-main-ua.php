	<?php get_header("ua");?>
	
	<?php get_sidebar("general-slider-ua"); ?>
	
	<?php get_sidebar("brand-menu-ua"); ?>
	
	<!-- BEGIN #configurator_wrapper_main_page -->
	<div id="configurator_wrapper_main_page">
	
		<h1>Winner</h1>
	
		<div id="configurator_wrapper_main_page_inner" class="container">
			
			<div class="h_container">
				<h2 class="h">Знайти нове авто</h2>
				<div class="dash_border db_classic"></div>
			</div>
			
			<p id="config_choose_text">Оберіть авто згідно з критеріями пошуку</p>
			
			<div id="configurator_main_page" class="configurator">
				<form id="configurator_form_main_page" class="configurator_form form" method="post" autocomplete="off" action="/configurator-ua">
					<label>Бренд<br/><input name="brand" placeholder="Бренд" value="any" readonly /></label>
					<label>Модель<br/><input name="model" placeholder="Модель" value="any" readonly /></label>
					<button id="config_btn_main_page">button</button>
				</form>
			
				<div class="configurator_inner">
					<div>
						<p class="configurator_main_page_part_title">Бренд</p>
						<div class="select_wrapper select_brands_wrapper">
							<p class="option cf_brand any active" data-name="brand" data-value="any">Будь-який</p>
							<ul class="select_block select_brands"></ul>
						</div>
					</div>
					
					<div>
						<p class="configurator_main_page_part_title">Модель</p>
						<div class="select_wrapper select_models_wrapper">
							<p class="option cf_model any active" data-name="model" data-value="any">Будь-яка</p>
							<div class="select_block select_models"></div>
							<div class="choose_deph mp show_choose_deph">
								<p>Оберіть бренд</p>
							</div>
						</div>
					</div>
				</div>
					
				<button id="get_group_main_page" class="button_blue">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Знайти авто</span>
				</button>
				
				<a id="configurator_main_page_search_link" href="configurator-ua">Розширений пошук</a>
			</div>
			
		</div>
	</div>
	<!-- END #configurator_wrapper -->
	
	<!-- BEGIN #main_page_dealer_map_screen -->
	<div id="main_page_dealer_map_screen">
		<div id="main_page_dealer_map_screen_inner" class="container">
			
			<div class="h_container">
				<h2 class="h">Карта дилерів</h2>
				<div class="dash_border ua"></div>
			</div>
			
			<div id="dealer_map_wrapper">
				<div id="dealer_map"></div>
			</div>
			
			<div id="become_a_dealer_block_info">
				<p>Стати дилером «Віннер»</p>
				<p>
					Запрошуємо Вас розпочати
					ефективний бізнес разом
					<span class="nowrap">з «Віннер»</span> та стати членом
					<span class="nowrap">нашої команди</span>
				</p>
				
				<a class="button_blue dealer_block_info_button_blue" href="/become-a-dealer-ua">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Подати заявку</span>
				</a>
			</div>
			
		</div>
	</div>
	<!-- END #main_page_dealer_map_screen -->
	
	<!-- BEGIN #main_page_form_screen -->
	<div id="main_page_form_screen">
		<div id="main_page_dealer_map_screen_white_block"></div>
	
		<div id="main_page_form_screen_inner" class="container form_container">
			
			<div class="h_container">
				<h2 class="h">Форма зворотного зв’язку</h2>
				<div class="dash_border db_classic"></div>
			</div>
			
			<div id="main_page_form_choose" class="form_choose">
				<div class="part first_part">
					<span data-letters="Запропонувати ідею">Запропонувати ідею</span>
				</div>
				<div class="part second_part">
					<span data-letters="Залишити скаргу">Залишити скаргу</span>
				</div>
			</div>
			
			<div id="main_page_form_wrapper" class="simple_form_wrapper">
			
				<!-- BEGIN #main_page_form -->
				<form id="main_page_form" class="simple_form form" method="post" autocomplete="on">
					<input class="url" type="hidden" name="url" />
					<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
					<input class="field_form_choose" name="form_choose" type="text" />
					
					<p class="form_clue">Поля, відмічені * є обов'язковими. ПІБ та текст повідомлення заповнюються українськими літерами.</p>
					
					<div class="part left_part">
						<p class="input_title">Тема звернення*</p>
						
						<div class="field_wrapper">
							<select name="topic" class="field field_required field_topic ne">
								<option value="">Оберіть тему</option>
								<option value="Продаж">Продаж</option>
								<option value="Сервіс">Сервіс</option>
						   </select>
							<p class="alarm alarm_topic"></p>
						</div>
						
						<p class="input_title">ПІБ*</p>
						
						<div class="field_wrapper">
							<input class="field field_required field_second_name" name="second_name" type="text" placeholder="Прізвище" />
							<p class="alarm alarm_second_name"></p>
						</div>
						
						<div class="field_wrapper">
							<input class="field field_required field_first_name" name="first_name" type="text" placeholder="Ім‘я" />
							<p class="alarm alarm_first_name"></p>
						</div>
						
						<div class="field_wrapper">
							<input class="field field_required field_third_name" name="third_name" type="text" placeholder="По батькові" />
							<p class="alarm alarm_third_name"></p>
						</div>
						
						<p class="input_title">Контактні дані*</p>
						
						<div class="field_wrapper">
							<input class="field field_required field_email" name="email" type="text" placeholder="E-mail" />
							<p class="alarm alarm_email"></p>
						</div>
						
						<div class="field_wrapper">
							<input class="field field_required field_phone ua" name="phone" type="text" placeholder="Телефон: +38..."/>
							<p class="alarm alarm_phone"></p>
						</div>
						
						<p class="input_title">Повідомлення*</p>
						
						<div class="field_wrapper textarea_wrapper">
							<textarea class="field field_required field_message" name="message"></textarea>
							<p class="alarm alarm_message"></p>
						</div>
					</div>
					
					<div class="part right_part">
					
						<p class="input_title">Бренд*</p>
						
						<div class="field_wrapper">
							<select name="brand" class="field field_required field_brand ne">
								<option value="">Оберіть бренд</option>
								<option value="Ford">Ford</option>
								<option value="Volvo">Volvo</option>
								<option value="Jaguar">Jaguar</option>
								<option value="Land Rover">Land Rover</option>
								<option value="Porsche">Porsche</option>
								<option value="Bentley">Bentley</option>
						    </select>
							<p class="alarm alarm_brand"></p>
						</div>
						
						<p class="input_title">Дилер*</p>
						
						<div class="field_wrapper">
							<input class="field field_required field_dealer" name="dealer" type="text" />
							<p class="alarm alarm_dealer"></p>
						</div>
						
						<p class="input_title dealer_date_title">Дата звернення до дилера</p>
						
						<div class="field_wrapper calendar_block">
							<table class="calendar">
								<thead>
									<tr>
										<td class="calendar_month calendar_month_ua" colspan="7"><a href="#" class="prev_month">&lsaquo;</a><span class="cmn"></span><a href="#" class="next_month">&rsaquo;</a></td>
									</tr>
									<tr>
										<td class="calendar_year" colspan="7"></td>
									</tr>
									<tr>
										<td class="empty_td" colspan="7"></td>
									</tr>
									<tr class="days days_ua"><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td>Сб</td><td>Нд</td></tr>
								</thead>
								<tbody></tbody>
							</table>
							
							<input class="field field_date_of_appeal" name="date_of_appeal" type="hidden" value="не вказано" />
						</div>
						<p class="alarm alarm_date_of_appeal"></p>
					</div>
					
					<input type="hidden" name="ref" value="<?php echo $_GET['ref']; ?>">
					<input type="hidden" name="utm_source" value="<?=$_GET['utm_source']?>">
					<input type="hidden" name="utm_medium" value="<?=$_GET['utm_medium']?>">
					<input type="hidden" name="utm_term" value="<?=$_GET['utm_term']?>">
					<input type="hidden" name="utm_content" value="<?=$_GET['utm_content']?>">
					<input type="hidden" name="utm_campaign" value="<?=$_GET['utm_campaign']?>">
					
					<a id="main_page_form_go" class="simple_form_go form_go button_blue" href="#">
						<span class="button_blue_cover"></span>
						<span class="button_blue_text">Надіслати</span>
					</a>
				</form>
				<!-- END #main_page_form -->
			
			</div>
			
		</div>
	</div>
	<!-- END #main_page_form_screen -->
	
	<!-- BEGIN .subscribe_screen -->
	<div id="main_page_subscribe_screen" class="subscribe_screen">
		<div class="subscribe_screen_inner container">
			
			<h2>Підписатися на наші новини</h2>
			
			<form class="subscribe_form main_page_subscribe_form form" method="post" autocomplete="on">
				<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
				<input class="type" type="hidden" name="type" value="main_page"/>
				
				<div class="field_wrapper">
					<input class="field field_required field_email" name="email" type="text" placeholder="E-mail*" />
					<p class="alarm alarm_email"></p>
				</div>
				
				<a class="subscribe_form_go form_go button_blue" href="#">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Підписатися</span>
				</a>
			</form>
			
		</div>
	</div>
	<!-- END .subscribe_screen -->

	<?php get_sidebar("footer-ua");?>
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/formvalidation-ua.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/calendar_ua.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/mainpage-configurator-ua.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfzVC38huUDJonqdqIKJO8aKTPxkk3m5U&extension=.js&language=uk"></script>
	<script> 
		var customZoom = window.innerWidth < 700 ? 5 : 6;
	
		google.maps.event.addDomListener(window, "load", init);
		var map;
		function init(){
			var mapOptions = {
				center: new google.maps.LatLng(49.307933, 29.555555),
				zoom: customZoom,
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.DEFAULT,
				},
				disableDoubleClickZoom: true,
				mapTypeControl: true,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				},
				scaleControl: false,
				scrollwheel: false,
				panControl: true,
				streetViewControl: true,
				draggable : true,
				overviewMapControl: true,
				overviewMapControlOptions: {
					opened: false,
				},
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: [
					{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e6e6e6"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#d3d3d3"},{"lightness":20}]},
					{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#e6e6e6"},{"lightness":29},
					{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
					{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},
					{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},
					{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":
					[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.6}]}
				],
			}
		
			var mapElement = document.getElementById("dealer_map");
			var map = new google.maps.Map(mapElement, mapOptions);
			var mapIcon = "/wp-content/themes/winner-ua/img/general/map_point_winner.png";
			var locations = [
				//Volvo
				["ТОВ «Віннер Автомотів»", "м. Київ, Московський пр-т 24-Д", "+380444967496", "http://winnerauto.volvocarsdealer.com", "", 50.487435, 30.511791, mapIcon],
				["ТОВ «Азбука Авто»", "м. Херсон, Миколаївське шосе, 4-й км", "+380552410263", "http://euroauto.volvocarsdealer.com", "", 46.668324, 32.587879, mapIcon],
				["ТОВ «ВіДі Нордвей»", "Київська обл., с. Чубинське, вул.Київська 47", "+380445917575", "http://airport.volvocarsdealer.com", "", 50.374855, 30.883504, mapIcon],
				["ТОВ «Віннер Одеса»", "м. Одеса, вул. М. Грушевського 39-Б", "+380487341800", "http://winnerodesa.volvocarsdealer.com", "", 46.479149, 30.691938, mapIcon],
				//["ТОВ «Дилерська Компанія «Полтава-Автосвіт»»", "м. Полтава, вул.Фрунзе 148-Б", "+380532615006", "http://poltava.volvocarsdealer.com", "", 49.557452, 34.521621, mapIcon],
				["ПП «Нордік Моторс»", "м. Рівне, вул. Київська, 101-А", "+380362642083", "http://nordic.volvocarsdealer.com", "", 50.614038, 26.308007, mapIcon],
				["ТОВ «Вікінг Моторз»", "м. Київ, вул. Кільцева, 18", "+380443911100", "http://viking.volvocarsdealer.com", "", 50.403669, 30.403773, mapIcon],
				//только Volvo ["ТОВ «Авто Граф М»", "м. Харків, Котлова, 29", "+380577171702", "http://agm.volvocarsdealer.com", "", 49.996156, 36.211749, mapIcon],
				/*Общий*/["ТОВ «Авто Граф М»", "м. Харків, Котлова, 29", "Volvo:<br/><a href='tel:+380577171702'>+380577171702</a><br/>Jaguar, Land Rover:<br/><a href='tel:+380577668899'>+380577668899</a>", "Volvo:<br/> <a href='http://agm.volvocarsdealer.com' target='_blank'>agm.volvocarsdealer.com</a><br/>Jaguar, Land Rover:<br/><a href='http://www.landrover.kh.ua' target='_blank'>www.landrover.kh.ua</a>", "", 49.996156, 36.211749, mapIcon],
				/*Общий*/["ТОВ «Дилерська Компанія «Полтава-Автосвіт»»", "м. Полтава, вул.Фрунзе 148-Б", "+380532615006", "Volvo:<br/><a href='http://poltava.volvocarsdealer.com' target='_blank'>poltava.volvocarsdealer.com</a><br/>Ford:<br/><a href='http://ford.pl.ua' target='_blank'>ford.pl.ua</a>", "", 49.557452, 34.521621, mapIcon],
				
				//Porsche
				["ТОВ «Лемберг Авто»", "м. Львів, вул. Джорджа Вашингтона, 8", "+380322560356", "http://lviv.porsche.ua/lviv", "", 49.814630, 24.073761, mapIcon],
				["ТОВ «Віннер ПЦКА»", "Київська обл., Бориспільський район, с. Чубинське, вул. Київська, 43", "+380442019110", "http://www.porsche.ua/dealers/kiev", "", 50.353820, 30.934021, mapIcon],
				["ТОВ «Прайм-Авто Лтд»", "м. Дніпро, Запорізьке шосе, 37-Д", "+380563777777", "http://www.porsche.ua/dealers/dnepropetrovsk", "", 48.405201, 35.034458, mapIcon],
				["ПП «Престиж Автомоторс»", "м. Харків, вул. Клочківська, 95", "+380577002000", "http://www.porsche.ua/dealers/kharkiv", "", 50.002567, 36.217537, mapIcon],
				["ТОВ «Емеральд Спорткар»", "м. Одеса, вул. Церковна, 2/4", "+380487801188", "http://porsche.ua/dealers/odesa", "", 46.500903, 30.722986, mapIcon],
				
				//Ford
				//["ТОВ «Віннер Автомотів»", "м. Київ, Московський пр-т 24-Д", "+380444967496", "http://www.winnerauto.ua", "", 50.487435, 30.511791, mapIcon],
				["ПП «Віннер Форд Рівне»", "м. Рівне, вул. Київська, 101-А", "+380362642069", "http://www.avtopark-rivne.com.ua", "", 50.614038, 26.308007, mapIcon],
				["ТОВ «Велет авто»", "м. Львів, вул. Липинського, 50-В", "<a href='tel:+380322943131'>+380322943131</a><br/><a href='tel:+380322943134'>+380322943134</a>", "http://www.ford.lviv.ua", "", 49.863729, 24.035658, mapIcon],
				["ТОВ «АВТО-ІМПУЛЬС»", "м. Дніпро, вул. Курсантська, 3-К", "+380567479009", "http://www.ford.dp.ua", "", 48.496299, 35.114591, mapIcon],
				["ТОВ «Колос Авто»", "м. Черкаси, вул. Смілянська, 153", "<a href='tel:+380472639612'>+380472639612</a><br/><a href='tel:+380472639405'>+380472639405</a><br/><a href='tel:+380472638792'>+380472638792</a>", "http://www.ford-kolos.ck.ua", "", 49.405434, 32.018392, mapIcon],
				["ТОВ «Терра Моторс»", "м. Миколаїв, вул. Космонавтів, 81-Б/1", "+380512581458", "http://www.ford-terra.mk.ua", "", 46.957593, 32.070785, mapIcon],
				["ДП «Автотрейдінг-Схід»", "м. Харків, вул. Клочківська, 188", "+380577601050", "http://www.fordkharkov.com.ua", "", 50.018578, 36.214445, mapIcon],
				["ТОВ «ГЛОБАЛ Автоград»", " м. Мукачево, вул. Автомобілістів, 3", "+380313138030", "http://ford.zet.com.ua", "", 48.447602, 22.686184, mapIcon],
				["ТОВ «Автовінн»", "м. Вінниця, Хмельницьке шосе, 145", "+380432552020", "http://www.ford.vn.ua", "", 49.235568, 28.404962, mapIcon],
				["ТОВ «Екомоторс»", "м. Чернівці, вул. Енергетична, 2-Г", "+380372587888", "http://ecomotors.cv.ua", "", 48.321794, 25.936780, mapIcon],
				["TOB «Компанія Кременчук Автосвіт»", "м. Кременчук, вул. 50-річчя Жовтня, 100-А", "+380536793488", "http://www.ford-kremenchug.com.ua", "", 49.119048, 33.440649, mapIcon],
				["ПП «МАГР-АВТО»", "м. Чернігів, вул. Незалежості, 9", "+380462933303", "http://www.ford.cn.ua", "", 51.517978, 31.241786, mapIcon],
				["ТОВ «ВіДі-Край Моторз»", "м. Київ, Софіївська Борщагівка, вул. Велика Кільцева Дорога, 60-А", "+380445915000", "http://ford-vidi.com.ua", "", 50.364716, 30.465653, mapIcon],
				["ТОВ «ТерКо Авто Моторс»", "м. Тернопіль, вул.Об'їзна, 23-А", "+380352477020", "http://ford.terko.com.ua", "", 49.529680, 25.606933, mapIcon],
				["ТОВ «Опус-Авто плюс»", "м. Хмельницький, вул. Зарічанська, 3/1", "+380382752652", "http://www.ford.km.ua", "", 49.432821, 26.997877, mapIcon],
				["ТОВ «ЕМЕРАЛД АВТО»", "м. Одеса, просп. Маршала Жукова, 2", "+380487295555", "http://www.fordodessa.com", "", 46.416071, 30.710801, mapIcon],
				//["ТОВ «Дилерська Компанія «Полтава-Автосвіт»»", "м. Полтава, вул. Фрунзе 148-Б", "+380532615006", "http://ford.pl.ua", "", 49.557452, 34.521621, mapIcon],
				["ТОВ «Альфа Моторс Груп»", "м. Житомир, вул. Ватутіна, 168-А/1", "+380412419305", "http://ford.zt.ua", "", 50.275222, 28.680339, mapIcon],
				["ТОВ «Вектор Транс»", "м. Дніпро, вул. Булигіна, 1", "+380567408979", "http://www.ford.aelita.ua", "", 48.478536, 35.005530, mapIcon],
				["ТОВ «Талісман-Авто»", "м. Краматорськ, вул. Дніпропетровська, 3-А", "+380626466777", "http://www.talisman-auto.com.ua", "", 48.763791, 37.588708, mapIcon],
				["ТОВ «Бристоль-Авто»", "м. Дніпро, вул. Аеропортівська, 15", "+380487295555", "http://ford-bristol.com.ua", "", 48.395871, 35.042775, mapIcon],
				["ТОВ «Компанія Авто-Альянс»", "м. Івано-Франківськ, вул. Галицька, 80-А (відділ продажу)", "+380342754540", "http://www.auto-alliance.com.ua", "", 48.939716, 24.702227, mapIcon],
				["ТОВ «Компанія Авто-Альянс»", "м. Івано-Франківськ, вул. Надрічна, 7 (відділ сервісу)", "+380342754550", "http://www.auto-alliance.com.ua", "", 48.938078, 24.710067, mapIcon],
				["ТОВ «НІКО Форвард Мегаполіс»", "Київська область, Бориспільське шосе, 13-й км", "+380443921111", "http://ford.niko.ua/ua", "", 50.380059, 30.838741, mapIcon],
				["ТОВ «Автоцентр Фрунзе»", "м. Харків, вул. Плеханівська, 57-А", "+380577147770", "http://www.frunze-auto.com", "", 49.981620, 36.258972, mapIcon],
				["ТОВ «Віннер-Мотор Спорт»", "м. Одеса, вул. Гастелло, 50-А", "<a href='tel:+380487167444'>+380487167444</a><br/><a href='tel:+380487152425'>+380487152425</a>", "http://www.ford.od.ua", "", 46.445662, 30.685045, mapIcon],
				["ТОВ «Алекс Схід Маріуполь»", "м. Маріуполь, просп. Карпова, 14", "+380629405050", "http://www.ford.dn.ua", "", 47.161088, 37.544629, mapIcon],
				["ТОВ «Кайф-Авто»", "м. Херсон, Миколаївське шосе, 4-й км", "<a href='tel:+380552337062'>+380552337062</a><br/><a href='tel:+380552337067'>+380552337067</a><br/><a href='tel:+380552411825'>+380552411825</a>", "http://bebkoauto.com", "", 46.668324, 32.587879, mapIcon],
				
				//Jaguar and Land Rover
				//["ТОВ «Віннер Автомотів»", "м. Київ, Московський пр-т 24-Д", "+380444967496", "http://landrover.winnerauto.ua", "", 50.487435, 30.511791, mapIcon],
				//["ТОВ «Віннер Одеса»", "м. Одеса, вул. М. Грушевського 39-Б", "+380487341800", "http://www.landrover.od.ua", "", 46.479149, 30.691938, mapIcon],
				["ТОВ «ВіДі Пауер»", "м. Київ, Софіївська Борщагівка, вул. Велика Кільцева, 58", "+380445910000 ", "Land Rover: <br/> <a href='http://landrover-vidi.com.ua' target='_blank'>landrover-vidi.com.ua</a><br/>Jaguar:<br/><a href='http://www.jaguar-vidi.com/' target='_blank'>www.jaguar-vidi.com</a>", "", 50.412688, 30.381617, mapIcon],
				//Только Jaguar and Land Rover ["ТОВ «Авто Граф М»", "м. Харків, Котлова, 29", "+380577668899", "http://www.landrover.kh.ua", "", 49.996156, 36.211749, mapIcon],
				["ТОВ «Аеліта Преміум»", "м. Дніпро, пр. ім. Газ. «Правда», 34-Б (відділ продажу)", "+380563715696 ", "Land Rover:<br/> <a href='http://landrover.dp.ua' target='_blank'>landrover.dp.ua</a><br/>Jaguar:<br/><a href='http://jaguar.dp.ua' target='_blank'>jaguar.dp.ua</a>", "", 48.504588, 35.074654, mapIcon],
				["ТОВ «Аеліта Преміум»", "м. Дніпро, вул. Булигіна, 3 (відділ сервісу)", "+380567408975 ", "Land Rover:<br/> <a href='http://landrover.dp.ua' target='_blank'>landrover.dp.ua</a><br/>Jaguar:<br/><a href='http://jaguar.dp.ua' target='_blank'>jaguar.dp.ua</a>", "", 48.478172, 35.004726, mapIcon]
				
				//Bentley
				//["ТОВ «Віннер Автомотів»", "м. Київ, Московський пр-т 24-Д", "+380444967496", "http://winnerauto.volvocarsdealer.com", "", 50.487435, 30.511791, mapIcon]
			];
			
			for(var i = 0; i < locations.length; i++){
				if (locations[i][1] =="undefined"){ description = "";} else { description = locations[i][1];}
				if (locations[i][2] =="undefined"){ telephone = "";} else { telephone = locations[i][2];}
				if (locations[i][3] =="undefined"){ site = "";} else { site = locations[i][3];}
				if (locations[i][4] =="undefined"){ schedule = "";} else { schedule = locations[i][4];}
				if (locations[i][7] =="undefined"){ markericon = "";} else { markericon = locations[i][7];}
				
				var marker = new google.maps.Marker({
					icon: markericon,
					position: new google.maps.LatLng(locations[i][5], locations[i][6]),
					map: map,
					title: locations[i][0],
					desc: description,
					tel: telephone,
					site: site,
					shortUrl: shortUrl,
					schedule: schedule
				});
				
				if(site.search("<a") == -1){
					var shortUrl = site.replace("http://", "");
					shortUrl = shortUrl.replace("https://", "");
				}
				else{
					var shortUrl = site;
				}
				
				bindInfoWindow(marker, map, locations[i][0], description, telephone, site, shortUrl, schedule);
			}
			
			function bindInfoWindow(marker, map, title, desc, telephone, site, shortUrl, schedule){
				var iw = new google.maps.InfoWindow();
				google.maps.event.addListener(marker, "click", function(){
					iw.close();
					
					if(telephone.search("<a") == -1)	
						var telString = "<p>телефон:<br/> <a href='tel:" + telephone + "'>" + telephone + "</a>";
					else
						var telString = "<p>телефон:<br/>" + telephone + "</p>";
					
					if(site.search("<a") == -1)
						siteString = "<p>посилання:<br/><a href='" + site + "' target='_blank'>" + shortUrl + "<a></p>";
					else	
						siteString = "<p>посилання:<br/>" + site + "</p>";
					
					var html= "<div class='gmap_custom_box' style='color: #000; background-color: #fff; padding: 0 0 0 5px; margin: 0; text-align: left !important'><h4>" + title + "</h4><p>адреса:<br/> " + desc + "</p>" + telString + siteString + "<p>" + schedule + "</p></div>";
					iw = new google.maps.InfoWindow({
						content: html
					});
					
					iw.open(map, marker);
				});
			}
		}
	</script>
		
	<?php get_footer();?>