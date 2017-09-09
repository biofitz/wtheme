<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<!-- BEGIN .brand_top_screen -->
<div id="porsche_brand_top_screen" class="brand_top_screen">
	<div class="container">
		<h1 class="color_grey">Porsche</h1>
	</div>
</div>
<!-- #END .brand_top_screen -->

<!-- BEGIN .brand_top_content_wrapper -->
<div class="brand_top_content_wrapper">
	<div class="container">
		<div class="row">
			<div class="left_part col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p>
					Майже 13 років ми представляємо втілення 
					інженерного мистецтва, інноваційних ідей 
					і гармонічних концепцій під маркою Porsche.
					Всі автомобілі цього <span class="nowrap">бренду –</span> це прагнення 
					до досконалих технологічних рішень на службі 
					вашого уявлення про відміну якість
				</p>
				
				<div class="brand_link_block">
					<p>
						Детальніше ознайомитися із модельним рядом
						можна за посиланням:
					</p>
					<p>
						<a href="http://porsche.ua" target="_blank">porsche.ua</a>
					</p>
				</div>
			</div>
			<div class="right_part col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/brands/porsche/top_content.jpg" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- END .brand_top_content_wrapper -->

<!-- BEGIN #brand_page_dealer_map_screen -->
<div id="brand_page_dealer_map_screen">
	<div id="brand_page_dealer_map_screen_inner" class="container">
		
		<h2 class="brand_h2">
			Запрошуємо переконатися у досконалості Porsche<br/>
			в одному з 5 дилерських центрів
		</h2>
		
		<div id="dealer_map_wrapper">
			<div id="dealer_map"></div>
		</div>
		
		<div id="become_a_dealer_block_info">
			<p>Стати дилером <span class="nowrap">Porsche</span></p>
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
<div id="brand_page_dealer_map_screen_after"></div>
<!-- END #brand_page_dealer_map_screen -->

<!-- BEGIN .subscribe_screen -->
	<div id="porsche_page_subscribe_screen" class="subscribe_screen">
		<div class="subscribe_screen_inner container">
			
			<h2>Підписатися на новини Porsche</h2>
			
			<form class="subscribe_form land_rover_page_subscribe_form form" method="post" autocomplete="on">
				<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
				<input class="type" type="hidden" name="type" value="porsche_page"/>
				
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
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

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
		var mapIcon = "/wp-content/themes/winner-ua/img/brands/porsche/map_point_porsche.png";
		var locations = [
			//Porsche
			["ТОВ «Лемберг Авто»", "м. Львів, вул. Джорджа Вашингтона, 8", "+380322560356", "http://lviv.porsche.ua/lviv", "", 49.814630, 24.073761, mapIcon],
			["ТОВ «Віннер ПЦКА»", "Київська обл., Бориспільський район, с. Чубинське, вул. Київська, 43", "+380442019110", "http://www.porsche.ua/dealers/kiev", "", 50.353820, 30.934021, mapIcon],
			["ТОВ «Прайм-Авто Лтд»", "м. Дніпро, Запорізьке шосе, 37-Д", "+380563777777", "http://www.porsche.ua/dealers/dnepropetrovsk", "", 48.405201, 35.034458, mapIcon],
			["ПП «Престиж Автомоторс»", "м. Харків, вул. Клочківська, 95", "+380577002000", "http://www.porsche.ua/dealers/kharkiv", "", 50.002567, 36.217537, mapIcon],
			["ТОВ «Емеральд Спорткар»", "м. Одеса, вул. Церковна, 2/4", "+380487801188", "http://porsche.ua/dealers/odesa", "", 46.500903, 30.722986, mapIcon]
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