<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<!-- BEGIN #contacts_page_top_screen -->
<div id="contacts_page_top_screen">
	<div id="contacts_page_top_screen_inner" class="container">
		<h1 class="h">Контакти</h1>
		
		<div id="contacts_instruction_block">
			<div class="part part_38">
				<img class="contacts_instruction_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/point.png" alt="" />
				<p>
					Вул. Дачна, 5-А, с.Капітанівка,<br/>
					Київська область, 08112, Україна
				</p>
			</div>
			<div class="part part_42">
				<img class="contacts_instruction_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/phone.png" alt="" />
				<p>
					Тел.: <a href="tel:+380445856300">+38(044) 585 63 00</a><br/>
					Факс: <a href="tel:+380445856301">+38(044) 585 63 01</a>
				</p>
			</div>
			<div class="part part_20 scroll_to_element" data-scroll="#contacts_page_3d_tour">
				<img class="contacts_instruction_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/contacts/tour.png" alt="" />
				<p>
					3d-тур
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
							<option value="">Виберіть тему</option>
							<option value="продаж">Продаж</option>
							<option value="сервіс">Сервіс</option>
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
					
					<p class="input_title">Контактні дані</p>
					
					<div class="field_wrapper">
						<input class="field field_required field_email" name="email" type="text" placeholder="E-mail*" />
						<p class="alarm alarm_email"></p>
					</div>
					
					<div class="field_wrapper">
						<input class="field field_phone ua" name="phone" type="text" placeholder="Телефон: +38..."/>
						<p class="alarm alarm_phone"></p>
					</div>
					
					<p class="input_title">Повідомлення*</p>
					
					<div class="field_wrapper textarea_wrapper">
						<textarea class="field field_required field_message" name="message"></textarea>
						<p class="alarm alarm_message"></p>
					</div>
				</div>
				
				<div class="part right_part">
					<p class="input_title">Номер водійських прав</p>
					
					<div class="field_wrapper">
						<input class="field field_driver_license" name="driver_license" type="text" />
						<p class="alarm alarm_driver_license"></p>
					</div>
					
					<p class="input_title">Дилер*</p>
					
					<div class="field_wrapper">
						<select name="dealer" class="field field_required field_dealer ne">
							<option value="">Виберіть дилера</option>
							<option value="Ford">Ford</option>
							<option value="Volvo">Volvo</option>
							<option value="Jaguar">Jaguar</option>
							<option value="Land Rover">Land Rover</option>
							<option value="Porsche">Porsche</option>
							<option value="Bentley">Bentley</option>
						</select>
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
		</div>
		
	</div>
</div>
<!-- END #main_page_form_screen -->

<!-- BEGIN #contacts_page_3d_tour -->
<div id="contacts_page_3d_tour">
	<div id="contacts_page_3d_tour_inner" class="container">
		<h2 class="h">3d-тур</h2>
		
		<div id="g_tour_wrapper">
			<iframe id="g_tour" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1suk!2sua!4v1482735510566!6m8!1m7!1sHq_tQo0ysngAAAQvxREmqw!2m2!1d50.44912323848902!2d30.18248589836707!3f83.54!4f2.030000000000001!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- END #contacts_page_3d_tour -->

<?php get_sidebar("footer-ua");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/formvalidation-ua.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/calendar_ua.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>