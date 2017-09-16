<?php get_header("en");?>

<?php get_sidebar("brand-menu-en"); ?>

<!-- BEGIN .brand_top_screen -->
<div id="land_rover_brand_top_screen" class="brand_top_screen">
	<div class="container">
		<h1 class="color_black">Land Rover</h1>
	</div>
</div>
<!-- #END .brand_top_screen -->

<!-- BEGIN .brand_top_content_wrapper -->
<div class="brand_top_content_wrapper">
	<div class="container">
		<div class="row">
			<div class="left_part col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p>
					Land Rover is a combination of unique design, exceptional luxury and technological excellence with the best off-road capabilities. 
					From 2004 Winner Imports Ukraine furthers the desire of strong people to discover new ways, unforgettable experience and adventures 
				</p>
				
				<div class="brand_link_block">
					<p>
						To know more about cars product line, please, visit:
					</p>
					<p>
						<a href="https://www.landrover.ua" target="_blank">www.landrover.ua</a>
					</p>
				</div>
			</div>
			<div class="right_part col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/brands/land_rover/top_content.jpg" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- END .brand_top_content_wrapper -->

<!-- BEGIN #brand_page_dealer_map_screen -->
<div id="brand_page_dealer_map_screen">
	<div id="brand_page_dealer_map_screen_inner" class="container">
		
		<h2 class="brand_h2">
			You can get to know the authentic off-road vehicles<br/> and their unsurpassed capabilities in one of our dealer centers
		</h2>
		
		<div id="dealer_map_wrapper">
			<div id="dealer_map"></div>
		</div>
		
		<div id="become_a_dealer_block_info">
			<p>To become a dealer of <span class="nowrap">Land Rover</span></p>
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
<div id="brand_page_dealer_map_screen_after"></div>
<!-- END #brand_page_dealer_map_screen -->

<!-- BEGIN .subscribe_screen -->
	<div id="land_rover_page_subscribe_screen" class="subscribe_screen">
		<div class="subscribe_screen_inner container">
			
			<h2>Subscribe to Land Rover news</h2>
			
			<form class="subscribe_form land_rover_page_subscribe_form form" method="post" autocomplete="on">
				<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
				<input class="type" type="hidden" name="type" value="land_rover_page"/>
				
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
		var mapIcon = "/wp-content/themes/winner-ua/img/brands/land_rover/map_point_land_rover.png";
		var locations = [
			//Jaguar and Land Rover
			["Winner Automotive", "Kyiv, 24D, Moskovskyy Avenue", "+380444967496", "http://landrover.winnerauto.ua", "", 50.487435, 30.511791, mapIcon],
			["Winner Odesa", "Odesa, 39B, Grushevskogo Str.", "+380487341800", "http://www.landrover.od.ua", "", 46.479149, 30.691938, mapIcon],
			["ViDi Power", "Kyiv, 58, Velyka Kiltseva Str.", "+380445910000 ", "Land Rover: <br/> <a href='http://landrover-vidi.com.ua' target='_blank'>landrover-vidi.com.ua</a><br/>Jaguar:<br/><a href='http://www.jaguar-vidi.com/' target='_blank'>www.jaguar-vidi.com</a>", "", 50.412688, 30.381617, mapIcon],
			["Auto Graf M", "Kharkiv, 29, Velyka Panasivska Str. (Kotlova Str.)", "+380577668899", "http://www.landrover.kh.ua", "", 49.996156, 36.211749, mapIcon],
			["Aelita Premium", "Dnipro, 34B, Slobozhanskyi Avenue (Gazety Pravdy Avenue) (sales department)", "+380563715696 ", "Land Rover:<br/> <a href='http://landrover.dp.ua' target='_blank'>landrover.dp.ua</a><br/>Jaguar:<br/><a href='http://jaguar.dp.ua' target='_blank'>jaguar.dp.ua</a>", "", 48.504588, 35.074654, mapIcon],
			["Aelita Premium»", "Dnipro, 3, Bulygina Str. (service department)", "+380567408975 ", "Land Rover:<br/> <a href='http://landrover.dp.ua' target='_blank'>landrover.dp.ua</a><br/>Jaguar:<br/><a href='http://jaguar.dp.ua' target='_blank'>jaguar.dp.ua</a>", "", 48.478172, 35.004726, mapIcon]
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