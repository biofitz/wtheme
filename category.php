<?php 
	if(pll_current_language() == "en"){
		$c_header = "en";
		$c_brand_menu = "brand-menu-en";
		$c_footer = "footer-en";
		$c_no_news = "Unfortunately, there is no news.";
		$c_add_menu = "category_additional_menu_en";
	}
	else{
		$c_header = "ua";
		$c_brand_menu = "brand-menu-ua";
		$c_footer = "footer-ua";
		$c_no_news = "На жаль, новин немає.";
		$c_add_menu = "category_additional_menu_ua";
	}
	
	get_header($c_header);
	get_sidebar($c_brand_menu);
?>
	
<!-- BEGIN #category_additional_menu_wrapper -->
<div id="category_additional_menu_wrapper">
	<div id="category_additional_menu_wrapper_inner">
		<div id="category_additional_menu">
			<?php wp_nav_menu(array("menu" => $c_add_menu)); ?>
		</div>
	</div>
	
	<div id="cat_add_wrapper"><ul id="cat_new_additional_menu"></ul></div>
	
	<select id="category_additional_select"></select>
</div>
<!-- END #category_additional_menu_wrapper -->	
	
<!-- BEGIN #category_news_content  -->
<div id="category_news_content">
	<div class="container">
		<div class="row">
			<div id="category_news_content_inner">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="h_container">
						<h1 class="h"><?php if( is_category() )echo get_queried_object()->name; ?></h1>
						<div class="dash_border db_classic"></div>
					</div>
				</div>
		
				<div id="category_news_wrapper">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="category_news_block">
							<div class="category_news_block_inner">
						
								<div class="category_news_thumb">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail(); ?>
									<?php endif;?> 
									
									<p class="category_news_date"><?php echo get_the_date(); ?></p>
									<div class="thumb_cover"></div>
									<div class="thumb_line thumb_line_left"></div>
									<div class="thumb_line thumb_line_top"></div>
									<div class="thumb_line thumb_line_right"></div>
									<div class="thumb_line thumb_line_bottom"></div>
								</div>
								
								<div class="category_news_block_info">
									<!--<h2 class="category_news_title"><?php //the_title(); ?></h2>-->
									<div class="category_news_excerpt"><?php the_excerpt(); ?></div>
								</div>
							
							</div>
							
							<a class="sing_link" href="<?php the_permalink() ?>"></a>
						</div>				

						<?php endwhile; else: ?>

						<p class="p_nothong_found"><?php _e($c_no_news); ?></p>
							
					<?php endif; ?>
				</div>
				
				<div id="post_navigation">
					<?php echo get_the_posts_pagination(
						$args = array(
							'show_all'     => false, // показаны все страницы участвующие в пагинации
							'end_size'     => 1,     // количество страниц на концах
							'mid_size'     => 1,     // количество страниц вокруг текущей
							'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
							'prev_text'    => __('‹'),
							'next_text'    => __('›'),
							'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
							'add_fragment' => '',    // Текст который добавиться ко всем ссылкам.
							//'screen_reader_text' => __( 'Posts navigation' )
							'screen_reader_text' => ' '
						)
					); ?>
				</div>
			
			</div>
		</div>
	</div>
</div>
<!-- END #category_news_content -->

<?php get_sidebar($c_footer);?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>