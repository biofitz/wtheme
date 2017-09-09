<?php get_header("ua");?>

<?php get_sidebar("brand-menu-ua"); ?>

<!-- BEGIN #ceo_block -->
<div id="ceo_block">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="ceo_part">
					<img id="seo_portrait" class="bgrey" src="<?php bloginfo('stylesheet_directory'); ?>/img/ceo/ceo.jpg" alt="Петро Рондяк" />
				</div>
			</div>
			
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="ceo_part bgrey">
					<div class="top_part">
						<h1>Петро Рондяк</h1>
						<p>
							Голова Правління<br/>
							«Віннер Груп Україна»
						</p>
						<div id="ceo_social_block">
							<a href="https://ua.linkedin.com/in/petro-rondiak-b7a9621" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/linkedin.svg" alt="Linkedin" title="Linkedin" />
							</a>
							<a href="https://twitter.com/PetroRondiak" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/twitter.svg" alt="Twitter" title="Twitter" />
							</a>
							<a href="https://www.facebook.com/petro.rondiak" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/facebook.svg" alt="Facebook" title="Facebook" />
							</a>
							<a href="mailto:petro@winner.ua">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/general/email.svg" alt="E-mail" title="E-mail" />
							</a>
						</div>
					</div>
					
					<div class="bottom_part">
						<p>
							Шановний Клієнте,<br/>
							мені надзвичайно важлива Ваша думка
						</p>
						
						<p>
							Якщо Ви бажаєте зв’язатися зі мною, будь ласка, напишіть на електронну скриньку <a href="mailto:petro@winner.ua">petro@winner.ua</a><br/>
							або у Твіттері: <a href="https://twitter.com/PetroRondiak" target="_blank">twitter.com/PetroRondiak</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END #ceo_block -->

<?php get_sidebar("footer-ua");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>