	<?php get_header("en");?>
	
	<?php get_sidebar("general-slider-en"); ?>
	
	<?php get_sidebar("brand-menu-en"); ?>
	
	<!-- BEGIN #configurator_wrapper -->
	<div id="configurator_wrapper" style="display: none">
	
		<h1>Winner</h1>
	
		<div id="configurator_wrapper_inner" class="container">
			
			<div class="h_container">
				<h2 class="h">Find a new car</h2>
				<div class="dash_border db_classic"></div>
			</div>
			
			<p id="config_choose_text">Choose a car by characteristics</p>
			
			<div id="confirurator">
				
				<button class="button_blue">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Choose a car</span>
				</button>
			</div>
			
		</div>
	</div>
	<!-- END #configurator_wrapper -->
	
	<!-- BEGIN #main_page_dealer_map_screen -->
	<div id="main_page_dealer_map_screen">
		<div id="main_page_dealer_map_screen_inner" class="container">
	
			<div class="h_container">
				<h2 class="h">Dealer map</h2>
				<div class="dash_border en"></div>
			</div>
			
			<div id="dealer_map_wrapper">
				<div id="dealer_map"></div>
			</div>
			
			<div id="become_a_dealer_block_info">
				<p>Become a dealer of Winner</p>
				<p>
					We invite you to start effective business <span class="nowrap">with Winner</span> and to become a member of <span class="nowrap">our team</span>
				</p>
				
				<a class="button_blue dealer_block_info_button_blue" href="/become-a-dealer-en">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Become a dealer</span>
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
				<h2 class="h">Feedback form</h2>
				<div class="dash_border db_classic"></div>
			</div>
			
			<div id="main_page_form_choose" class="form_choose">
				<div class="part first_part">
					<span data-letters="Propose an idea">Propose an idea</span>
				</div>
				<div class="part second_part">
					<span data-letters="Leave a complaint">Leave a complaint</span>
				</div>
			</div>
			
			<div id="main_page_form_wrapper" class="simple_form_wrapper">
			
				<!-- BEGIN #main_page_form -->
				<form id="main_page_form" class="simple_form form" method="post" autocomplete="on">
					<input class="url" type="hidden" name="url" />
					<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
					<input class="field_form_choose" name="form_choose" type="text" />
					
					<p class="form_clue">Fields marked * are required.</p>
					
					<div class="part left_part">
						<p class="input_title">A theme for appeal*</p>
						
						<div class="field_wrapper">
							<select name="topic" class="field field_required field_topic ne">
								<option value="">Select a theme</option>
								<option value="продаж">Selling</option>
								<option value="сервіс">Service</option>
						   </select>
							<p class="alarm alarm_topic"></p>
						</div>
						
						<p class="input_title">Full name</p>
						
						<div class="field_wrapper">
							<input class="field field_required field_first_name" name="first_name" type="text" placeholder="Name*" />
							<p class="alarm alarm_first_name"></p>
						</div>
						
						<div class="field_wrapper">
							<input class="field field_required field_second_name" name="second_name" type="text" placeholder="Surname*" />
							<p class="alarm alarm_second_name"></p>
						</div>
						
						<div class="field_wrapper">
							<input class="field field_third_name" name="third_name" type="text" placeholder="Father's name" />
							<p class="alarm alarm_third_name"></p>
						</div>
						
						<p class="input_title">Contacts</p>
						
						<div class="field_wrapper">
							<input class="field field_required field_email" name="email" type="text" placeholder="E-mail*" />
							<p class="alarm alarm_email"></p>
						</div>
						
						<div class="field_wrapper">
							<input class="field field_phone en" name="phone" type="text" placeholder="Phone number"/>
							<p class="alarm alarm_phone"></p>
						</div>
						
						<p class="input_title">Message*</p>
						
						<div class="field_wrapper textarea_wrapper">
							<textarea class="field field_required field_message" name="message"></textarea>
							<p class="alarm alarm_message"></p>
						</div>
					</div>
					
					<div class="part right_part">
						<p class="input_title">Driver's license number</p>
						
						<div class="field_wrapper">
							<input class="field field_driver_license" name="driver_license" type="text" />
							<p class="alarm alarm_driver_license"></p>
						</div>
						
						<p class="input_title">Dealer*</p>
						
						<div class="field_wrapper">
							<select name="dealer" class="field field_required field_dealer ne">
								<option value="">Select a dealer</option>
								<option value="Ford">Ford</option>
								<option value="Volvo">Volvo</option>
								<option value="Jaguar">Jaguar</option>
								<option value="Land Rover">Land Rover</option>
								<option value="Porsche">Porsche</option>
								<option value="Bentley">Bentley</option>
						    </select>
							<p class="alarm alarm_dealer"></p>
						</div>
						
						<p class="input_title dealer_date_title">Date of appeal to the dealer</p>
						
						<div class="field_wrapper calendar_block">
							<table class="calendar">
								<thead>
									<tr>
										<td class="calendar_month calendar_month_en" colspan="7"><a href="#" class="prev_month">&lsaquo;</a><span class="cmn"></span><a href="#" class="next_month">&rsaquo;</a></td>
									</tr>
									<tr>
										<td class="calendar_year" colspan="7"></td>
									</tr>
									<tr>
										<td class="empty_td" colspan="7"></td>
									</tr>
									<tr class="days days_en"><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr>
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
						<span class="button_blue_text">Submit</span>
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

			<h2>Subscribe to our news</h2>
			
			<form class="subscribe_form main_page_subscribe_form form" method="post" autocomplete="on">
				<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
				<input class="type" type="hidden" name="type" value="main_page"/>
				
				<div class="field_wrapper">
					<input class="field field_required field_email" name="email" type="text" placeholder="E-mail*" />
					<p class="alarm alarm_email"></p>
				</div>
				
				<a class="subscribe_form_go form_go button_blue" href="#">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Subscribe</span>
				</a>
			</form>
			
		</div>
	</div>
	<!-- END .subscribe_screen -->

	<?php get_sidebar("footer-en");?>
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/formvalidation-en.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/calendar_en.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfzVC38huUDJonqdqIKJO8aKTPxkk3m5U&extension=.js&language=en"></script>
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
				["Winner Automotive", "Kyiv, 24D, Moskovskyy Avenue", "+380444967496", "http://winnerauto.volvocarsdealer.com", "", 50.487435, 30.511791, mapIcon],
				["Azbuka Auto", "Kherson, 4th km, Mykolayvske road", "+380552410263", "http://euroauto.volvocarsdealer.com", "", 46.668324, 32.587879, mapIcon],
				["ViDi Norway", "Kyiv region, Chubinske, 47, Kyivska Str.", "+380445917575", "http://airport.volvocarsdealer.com", "", 50.374855, 30.883504, mapIcon],
				["Winner Odesa", "Odesa, 39B, Grushevskogo Str.", "+380487341800", "http://winnerodesa.volvocarsdealer.com", "", 46.479149, 30.691938, mapIcon],
				//["Dealer Company \"Poltava-Autosvit\"", "Poltava, 148B, Frunze Str.", "+380532615006", "http://poltava.volvocarsdealer.com", "", 49.557452, 34.521621, mapIcon],
				["Nordik Motors", "Rivne, 101-А Kyivska Str.", "+380362642083", "http://nordic.volvocarsdealer.com", "", 50.614038, 26.308007, mapIcon],
				["Viking Motors", "Kiev, 18, Kiltseva Str.", "+380443911100", "http://viking.volvocarsdealer.com", "", 50.403669, 30.403773, mapIcon],
				//только Volvo ["Auto Graf M", "Kharkiv, 29, Velyka Panasivska Str. (Kotlova Str.)", "+380577171702", "http://agm.volvocarsdealer.com", "", 49.996156, 36.211749, mapIcon],
				/*Общий*/["Auto Graf M", "Kharkiv, 29, Velyka Panasivska Str. (Kotlova Str.)", "Volvo:<br/><a href='tel:+380577171702'>+380577171702</a><br/>Jaguar, Land Rover:<br/><a href='tel:+380577668899'>+380577668899</a>", "Volvo:<br/> <a href='http://agm.volvocarsdealer.com' target='_blank'>agm.volvocarsdealer.com</a><br/>Jaguar, Land Rover:<br/><a href='http://www.landrover.kh.ua' target='_blank'>www.landrover.kh.ua</a>", "", 49.996156, 36.211749, mapIcon],
				/*Общий*/["Dealer Company \"Poltava-Autosvit\"", "Poltava, 148B, Frunze Str.", "+380532615006", "Volvo:<br/><a href='http://poltava.volvocarsdealer.com' target='_blank'>poltava.volvocarsdealer.com</a><br/>Ford:<br/><a href='http://ford.pl.ua' target='_blank'>ford.pl.ua</a>", "", 49.557452, 34.521621, mapIcon],
				
				//Porsche
				["Lemberg Auto", "L'viv, 8, George Washington Str.", "+380322560356", "http://lviv.porsche.ua/lviv", "", 49.814630, 24.073761, mapIcon],
				["Winner PCKA", "Kiev region, Boryspilskiy district, Chubynske village, 43, Kyivska Str.", "+380442019110", "http://www.porsche.ua/dealers/kiev", "", 50.353820, 30.934021, mapIcon],
				["Prime Auto Ltd.", "Dnipro, 37D, Zaporizke shose", "+380563777777", "http://www.porsche.ua/dealers/dnepropetrovsk", "", 48.405201, 35.034458, mapIcon],
				["Prestige Automotors", "Kharkiv, 95, Klochkivska Str. ", "+380577002000", "http://www.porsche.ua/dealers/kharkiv", "", 50.002567, 36.217537, mapIcon],
				["Emerald Sportcar", "Odesa, 2/4, Cerkovna Str.", "+380487801188", "http://porsche.ua/dealers/odesa", "", 46.500903, 30.722986, mapIcon],
				
				//Ford
				//["Winner Automotive", "Kyiv, 24D, Moskovskyy Avenue ", "+380444967496", "http://www.winnerauto.ua", "", 50.487435, 30.511791, mapIcon],
				["Winner Ford Rivne", "Rivne, 101A, Kyivska Str.", "+380362642069", "http://www.avtopark-rivne.com.ua", "", 50.614038, 26.308007, mapIcon],
				["Velet Auto", "Lviv, 50V, Lypynskogo Str.", "<a href='tel:+380322943131'>+380322943131</a><br/><a href='tel:+380322943134'>+380322943134</a>", "http://www.ford.lviv.ua", "", 49.863729, 24.035658, mapIcon],
				["Auto-Impulse", "Dnipro, 3K, Kursantska Str.", "+380567479009", "http://www.ford.dp.ua", "", 48.496299, 35.114591, mapIcon],
				["Kolos-Auto", "Cherkasy, 153, Smilyanska Str. ", "<a href='tel:+380472639612'>+380472639612</a><br/><a href='tel:+380472639405'>+380472639405</a><br/><a href='tel:+380472638792'>+380472638792</a>", "http://www.ford-kolos.ck.ua", "", 49.405434, 32.018392, mapIcon],
				["Terra Motors", "Mykolayiv, 81B/1, Kosmonavtiv Str. ", "+380512581458", "http://www.ford-terra.mk.ua", "", 46.957593, 32.070785, mapIcon],
				["Autotrading – Shid", "Kharkiv, 188, Klochkovska Str.", "+380577601050", "http://www.fordkharkov.com.ua", "", 50.018578, 36.214445, mapIcon],
				["Global Autograd", " Mukacheve, 3, Automobilistiv Str.", "+380313138030", "http://ford.zet.com.ua", "", 48.447602, 22.686184, mapIcon],
				["Autowin", "Vinnytsya, 94A, Nemirovskoe highway", "+380432552020", "http://www.ford.vn.ua", "", 49.235568, 28.404962, mapIcon],
				["Ekomotors", "Chernivtsi, 2 G, Energetichna Str.", "+380372587888", "http://ecomotors.cv.ua", "", 48.321794, 25.936780, mapIcon],
				["Company Kremenchuk Autosvit", "Kremenchuk, 100A, 50-richchya Zovtnya Str.", "+380536793488", "http://www.ford-kremenchug.com.ua", "", 49.119048, 33.440649, mapIcon],
				["MAGR-Auto", "Chernigiv, 4, Goncharova Str.", "+380462933303", "http://www.ford.cn.ua", "", 51.517978, 31.241786, mapIcon],
				["ViDi Kray Motors", "Kyiv, Sofiyivska Borshchagivka, 60A Velyka Kiltseva Str.", "+380445915000", "http://ford-vidi.com.ua", "", 50.364716, 30.465653, mapIcon],
				["TerCo Auto Motors", "Ternopil', 23A, Ob'yizdna Str.", "+380352477020", "http://ford.terko.com.ua", "", 49.529680, 25.606933, mapIcon],
				["Opus-Auto Plus", "Khmelnytsky 3/1, Zarichanska Str.", "+380382752652", "http://www.ford.km.ua", "", 49.432821, 26.997877, mapIcon],
				["Emerald-Auto", "Odesa, 2, Marshala Zhukova avenue", "+380487295555", "http://www.fordodessa.com", "", 46.416071, 30.710801, mapIcon],
				//["Dealer Company \"Poltava-Autosvit\"", "Poltava, 148B, Frunze Str.", "+380532615006", "http://ford.pl.ua", "", 49.557452, 34.521621, mapIcon],
				["Alpha Motors Group", "Zhytomyr, 168A/1, Vatutina Str.", "+380412419305", "http://ford.zt.ua", "", 50.275222, 28.680339, mapIcon],
				["Vecotr Trans", "Dnipro, 1, Bulygina Str.", "+380567408979", "http://www.ford.aelita.ua", "", 48.478536, 35.005530, mapIcon],
				["Talisman-Auto", "Kramatorsk, 3A, Dnipropetrovska Str.", "+380626466777", "http://www.talisman-auto.com.ua", "", 48.763791, 37.588708, mapIcon],
				["Bristol-Avto", "Dnipro, 15, Aeroportivska Str.", "+380487295555", "http://ford-bristol.com.ua", "", 48.395871, 35.042775, mapIcon],
				["Auto-Alliance Company", "Ivano-Frankivsk 80A, Halyts'ka Str. (sales department) ", "+380342754540", "http://www.auto-alliance.com.ua", "", 48.939716, 24.702227, mapIcon],
				["Auto-Alliance Company", "Ivano-Frankivsk 7, Nadrichna Str. (service department)", "+380342754550", "http://www.auto-alliance.com.ua", "", 48.938078, 24.710067, mapIcon],
				["Niko Forward Megapolis", "Kyiv region, 13 km, Boryspil' highway", "+380443921111", "http://ford.niko.ua/ua", "", 50.380059, 30.838741, mapIcon],
				["Autocentre Frunze", "Kharkiv, 57A, Plekhanivska Str.", "+380577147770", "http://www.frunze-auto.com", "", 49.981620, 36.258972, mapIcon],
				["Winner Motor Sport", "Odesa, 50A, Gastello Str.", "<a href='tel:+380487167444'>+380487167444</a><br/><a href='tel:+380487152425'>+380487152425</a>", "http://www.ford.od.ua", "", 46.445662, 30.685045, mapIcon],
				["Alex Skhid Mariupol", "Mariupol, 14, Karpova avenue", "+380629405050", "http://www.ford.dn.ua", "", 47.161088, 37.544629, mapIcon],
				["Kaif Auto", "Kherson 4th km, Mykolaivske highway", "<a href='tel:+380552337062'>+380552337062</a><br/><a href='tel:+380552337067'>+380552337067</a><br/><a href='tel:+380552411825'>+380552411825</a>", "http://bebkoauto.com", "", 46.668324, 32.587879, mapIcon],
				
				//Jaguar and Land Rover
				//["Winner Automotive", "Kyiv, 24D, Moskovskyy Avenue", "+380444967496", "http://landrover.winnerauto.ua", "", 50.487435, 30.511791, mapIcon],
				//["Winner Odesa", "Odesa, 39B, Grushevskogo Str.", "+380487341800", "http://www.landrover.od.ua", "", 46.479149, 30.691938, mapIcon],
				["ViDi Power", "Kyiv, 58, Velyka Kiltseva Str.", "+380445910000 ", "Land Rover: <br/> <a href='http://landrover-vidi.com.ua' target='_blank'>landrover-vidi.com.ua</a><br/>Jaguar:<br/><a href='http://www.jaguar-vidi.com/' target='_blank'>www.jaguar-vidi.com</a>", "", 50.412688, 30.381617, mapIcon],
				//Только Jaguar and Land Rover ["Auto Graf M", "Kharkiv, 29, Velyka Panasivska Str. (Kotlova Str.)", "+380577668899", "http://www.landrover.kh.ua", "", 49.996156, 36.211749, mapIcon],
				["Aelita Premium", "Dnipro, 34B, Slobozhanskyi Avenue (Gazety Pravdy Avenue) (sales department)", "+380563715696 ", "Land Rover:<br/> <a href='http://landrover.dp.ua' target='_blank'>landrover.dp.ua</a><br/>Jaguar:<br/><a href='http://jaguar.dp.ua' target='_blank'>jaguar.dp.ua</a>", "", 48.504588, 35.074654, mapIcon],
				["Aelita Premium»", "Dnipro, 3, Bulygina Str. (service department)", "+380567408975 ", "Land Rover:<br/> <a href='http://landrover.dp.ua' target='_blank'>landrover.dp.ua</a><br/>Jaguar:<br/><a href='http://jaguar.dp.ua' target='_blank'>jaguar.dp.ua</a>", "", 48.478172, 35.004726, mapIcon]
				
				//Bentley
				//["Winner Automotive", "Kyiv, 24D, Moskovskyy Avenue", "+380444967496", "http://winnerauto.volvocarsdealer.com", "", 50.487435, 30.511791, mapIcon]
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
						var telString = "<p>phone number:<br/> <a href='tel:" + telephone + "'>" + telephone + "</a>";
					else
						var telString = "<p>phone numbers:<br/>" + telephone + "</p>";
					
					if(site.search("<a") == -1)
						siteString = "<p>link:<br/><a href='" + site + "' target='_blank'>" + shortUrl + "<a></p>";
					else	
						siteString = "<p>links:<br/>" + site + "</p>";
					
					var html= "<div class='gmap_custom_box' style='color: #000; background-color: #fff; padding: 0 0 0 5px; margin: 0; text-align: left !important'><h4>" + title + "</h4><p>address:<br/> " + desc + "</p>" + telString + siteString + "<p>" + schedule + "</p></div>";
					iw = new google.maps.InfoWindow({
						content: html
					});
					
					iw.open(map, marker);
				});	
			}
		}
	</script>
		
	<?php get_footer();?>