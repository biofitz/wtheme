<?php get_header("en");?>

<?php get_sidebar("brand-menu-en"); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?> 

	<div id="single_new_content_wrapper" class="single_vacancy_wrapper">
		<h1 class="single_new_title"><?php the_title(); ?></h1>

		<div id="single_cat_and_date_wrap"></div>
		
		<div id="single_new_content">
			<div class="vacancy_top_data">
				<p><span class="grey">City:</span> <?php echo get_post_meta(get_the_ID(),'місто', true)?></p>
				<p><span class="grey">Department:</span> <?php echo get_post_meta(get_the_ID(),'підрозділ компанії', true)?></p>
				<p><span class="grey">Category:</span> <?php echo get_post_meta(get_the_ID(),'категорія', true)?></p>
			</div>
		
			<?php the_content(); ?>
			
			<p class="vacancy_last_p">
				<span id="become_a_dealer_popup_btn">Send the CV</span>
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
				Instruction
			</p>
			<p>
				If you correspond to all the above mentioned requirements and want to be a part of "Winner" team, you need to download the form below,
				fill it out offline and send it in the RAR or ZIP archive.
			</p>
			<p id="dealer_link_p">
				<a href="<?php bloginfo('stylesheet_directory'); ?>/docs/become-a-dealer-form/Become-a-Dealer.docx">Download the CV form</a>
			</p>
			
			<form id="dealer_upload_form" class="upload_form form vacancy" method="post">
				<input class="field_checkout" name="checkout" type="text" placeholder="First name" />
				
				<div class="field_wrapper dealer_file_wrapper">
					<input id="dealer_file" type="file"/>
					<label for="dealer_file" id="field_dealer_button" class="field">Attach the archive <img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/file_arrow.png" alt=""/></label>
					<p class="alarm dealer_alarm_file">valid extension: RAR or ZIP</p>
				</div>
				
				<a id="dealer_upload_btn" class="simple_form_go dealer_form_go button_blue" href="#">
					<span class="button_blue_cover"></span>
					<span class="button_blue_text">Submit</span>
				</a>
			</form>		
		</div>
		
		<div id="dealer_popup_thnx">
			<div id="dealer_popup_thnx_inner">
				<p>Thank you!</p>
				<p>Your CV has been sent</p>
			</div>
		</div>
		
	</div>
</div>
<!-- END #dealer_popup_wrapper -->

<?php get_sidebar("footer-en");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/become-a-dealer-form-en.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<script type="text/javascript">(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="http:\/\/connect.facebook.net\/en_US\/all.js";fjs.parentNode.insertBefore(js,fjs)}(document,"script","facebook-jssdk"));</script>

<?php get_footer();?>