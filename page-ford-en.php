<?php get_header("en");?>

<?php get_sidebar("brand-menu-en"); ?>

<!-- BEGIN .brand_top_screen -->
<div id="ford_brand_top_screen" class="brand_top_screen">
	<div class="container">
		<h1>Ford</h1>
	</div>
</div>
<!-- #END .brand_top_screen -->

<!-- BEGIN .brand_top_content_wrapper -->
<div class="brand_top_content_wrapper">
	<div class="container">
		<div class="row">
			<div class="left_part col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p>
					Welcome to the Ford brand page, one of the most successful brands in Winner Import Ukraine line. Our team is glad to represent you Ford vehicles which are considered to be 
					leaders in Ukrainian market. We have more than <span class="nowrap">100 000</span> official sales for 25 years of company working period
				</p>
				
				<div class="brand_link_block">
					<p>
						Know more about cars product line, please, visit:
					</p>
					<p>
						<a href="http://www.ford.ua/" target="_blank">www.ford.ua</a>
					</p>
				</div>
			</div>
			<div class="right_part col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/brands/ford/top_content.jpg" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- END .brand_top_content_wrapper -->

<!-- BEGIN #brand_page_dealer_map_screen -->
<div id="brand_page_dealer_map_screen">
	<div id="brand_page_dealer_map_screen_inner" class="container">
		
		<h2 class="brand_h2">
			The Ford is a high-technology product<br/> that is represented by 26 dealer centers<br/> in each region center of Ukraine
		</h2>
		
		<div id="dealer_map_wrapper">
			<div id="dealer_map"></div>
		</div>
		
		<div id="become_a_dealer_block_info">
			<p>To become a dealer of Ford</p>
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
<div id="ford_page_subscribe_screen" class="subscribe_screen">
	<div class="subscribe_screen_inner container">
		
		<h2>Subscribe to Ford news</h2>
		
		<form class="subscribe_form ford_page_subscribe_form form" method="post" autocomplete="on">
			<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
			<input class="type" type="hidden" name="type" value="ford_page"/>
			
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
		var mapIcon = "/wp-content/themes/winner-ua/img/brands/ford/map_point_ford.png";
		var locations = [
			//Ford
			["Winner Automotive", "Kyiv, 24D, Moskovskyy Avenue ", "+380444967496", "http://www.winnerauto.ua", "", 50.487435, 30.511791, mapIcon],
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
			["Dealer Company \"Poltava-Autosvit\"", "Poltava, 148B, Frunze Str.", "+380532615006", "http://ford.pl.ua", "", 49.557452, 34.521621, mapIcon],
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
			["Kaif Auto", "Kherson 4th km, Mykolaivske highway", "<a href='tel:+380552337062'>+380552337062</a><br/><a href='tel:+380552337067'>+380552337067</a><br/><a href='tel:+380552411825'>+380552411825</a>", "http://bebkoauto.com", "", 46.668324, 32.587879, mapIcon]
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