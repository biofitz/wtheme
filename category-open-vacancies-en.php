<?php get_header("en");?>

<?php get_sidebar("brand-menu-en"); ?>
	
<!-- BEGIN #vacancies_content  -->
<div id="vacancies_content">
	<div class="container">
		<div class="row">
			<div id="vacancies_content_inner">
		
				<div id="vacancies_content_wrapper">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="vacancies_contents_block">
							<h2 class="vacancies_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							
							<div class="vacancies_content_blocks_wrapper">
								<div class="part_17 n_p_left">
									<p class="v_c_title">City:</p>
									<p class="v_c_text"><?php echo get_post_meta(get_the_ID(),'місто', true)?></p>
								</div>
								<div class="part_24">
									<p class="v_c_title">Department:</p>
									<p class="v_c_text"><?php echo get_post_meta(get_the_ID(),'підрозділ компанії', true)?></p>
								</div>
								<div class="part_17">
									<p class="v_c_title">Category:</p>
									<p class="v_c_text"><?php echo get_post_meta(get_the_ID(),'категорія', true)?></p>
								</div>
								<div class="part_42">
									<p class="v_c_title">About the vacancy:</p>
									<p class="v_c_text"><?php echo get_post_meta(get_the_ID(),'про вакансію', true)?></p>
								</div>
							</div>
						</div>				

						<?php endwhile; else: ?>

						<p class="p_nothong_found">На жаль, відкритих вакансій немає.</p>
							
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
<!-- END #vacancies_content -->

<?php get_sidebar("footer-en");?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
<?php get_footer();?>