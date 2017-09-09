<?php get_header("en");?>

<?php get_sidebar("brand-menu-en"); ?>

<!-- BEGIN #contacts_page_top_screen -->
<div id="contacts_page_top_screen">
	<div id="contacts_page_top_screen_inner" class="container">
		<h1 class="h">Contacts</h1>
		
		<div id="contacts_instruction_block">
			<div class="part part_38">
				<img class="contacts_instruction_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/point.png" alt="" />
				<p>
					Kapitanovka, 5-A, Dachnaya Str.<br/>
					Kiev region, 08112, Ukraine
				</p>
			</div>
			<div class="part part_42">
				<img class="contacts_instruction_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/phone.png" alt="" />
				<p>
					Tel: <a href="tel:+380445856300">+38(044) 585 63 00</a><br/>
					Fax: <a href="tel:+380445856301">+38(044) 585 63 01</a>
				</p>
			</div>
			<div class="part part_20 scroll_to_element" data-scroll="#contacts_page_3d_tour">
				<img class="contacts_instruction_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/tour.png" alt="" />
				<p>
					3d tour
				</p>
			</div>
		</div>
		
		<img id="instruction_map" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/instruction_map.jpg" alt="" />
	</div>
</div>
<!-- END #contacts_page_top_screen -->

<!-- BEGIN #main_page_form_screen -->
<div id="main_page_form_screen" class="contacts_page">
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

<!-- BEGIN #contacts_page_3d_tour -->
<div id="contacts_page_3d_tour">
	<div id="contacts_page_3d_tour_inner" class="container">
		<h2 class="h">3d tour</h2>
		
		<div id="g_tour_wrapper">
			<iframe id="g_tour" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1suk!2sua!4v1482735510566!6m8!1m7!1sHq_tQo0ysngAAAQvxREmqw!2m2!1d50.44912323848902!2d30.18248589836707!3f83.54!4f2.030000000000001!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- END #contacts_page_3d_tour -->

<?php get_sidebar("footer-en");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/formvalidation-en.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/calendar_en.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>