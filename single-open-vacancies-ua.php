<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?> 

	<div id="single_new_content_wrapper" class="single_vacancy_wrapper">
		<h1 class="single_new_title"><?php the_title(); ?></h1>

		<div id="single_cat_and_date_wrap"></div>
		
		<div id="single_new_content">
			<div class="vacancy_top_data">
				<p><span class="grey">Місто:</span> <?php echo get_post_meta(get_the_ID(),'місто', true)?></p>
				<p><span class="grey">Підрозділ компанії:</span> <?php echo get_post_meta(get_the_ID(),'підрозділ компанії', true)?></p>
				<p><span class="grey">Категорія:</span> <?php echo get_post_meta(get_the_ID(),'категорія', true)?></p>
			</div>
		
			<?php the_content(); ?>
			
			<p class="vacancy_last_p">
				<span id="become_a_dealer_popup_btn">Надіслати резюме</span>
			</p>
		</div>
	</div>

	<?php endwhile;?>  
<?php endif;?> 

<!-- BEGIN #dealer_popup_wrapper -->
<div id="dealer_popup_wrapper">
	<div id="dealer_popup_cover"></div>
	<div id="dealer_popup">
	
		<img id="dealer_popup_close" src="<?php bloginfo('stylesheet_directory'); ?>/img/general/close_cross.svg" alt="закрити" />
		
		<div id="dealer_popup_text">
			<p>
				Інструкція
			</p>
			<p>
				Якщо Ви відповідаєте вимогам та прагнете стати частиною команди «Віннер», завантажте бланк резюме, заповніть його в режимі оффлайн і надішліть в архіві RAR або ZIP.
			</p>
			<p id="dealer_link_p">
				<a href="<?php bloginfo('stylesheet_directory'); ?>/docs/become-a-dealer-form/Стати-дилером.docx">Завантажити бланк резюме</a>
			</p>
			
			<form id="dealer_upload_form" class="upload_form form vacancy" method="post">
				<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
				
				<div class="field_wrapper dealer_file_wrapper">
					<input id="dealer_file" type="file"/>
					<label for="dealer_file" id="field_dealer_button" class="field">Вкласти файл-архів <img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/file_arrow.png" alt=""/></label>
					<p class="alarm dealer_alarm_file">допустиме розширення: RAR або ZIP</p>
				</div>
				
				<a id="dealer_upload_btn" class="simple_form_go dealer_form_go button_blue" href="#">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Надіслати</span>
				</a>
			</form>		
		</div>
		
		<div id="dealer_popup_thnx">
			<div id="dealer_popup_thnx_inner">
				<p>Дякуємо!</p>
				<p>Ваше резюме відправлено</p>
			</div>
		</div>
		
	</div>
</div>
<!-- END #dealer_popup_wrapper -->

<?php get_sidebar("footer-ua");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/become-a-dealer-form-ua.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<?php get_footer();?>