<?php 
	if(pll_current_language() == "en"){
		$c_header = "en";
		$c_brand_menu = "brand-menu-en";
		$c_footer = "footer-en";
		$main_search_title = "Searching results:";
		$nothing_found = "Unfortunately, nothing found.";
		$search_a = "view";
	}
	else{
		$c_header = "ua";
		$c_brand_menu = "brand-menu-ua";
		$c_footer = "footer-ua";
		$main_search_title = "Результат пошуку:";
		$nothing_found = "Нажаль, нічого не знайдено.";
		$search_a = "перейти";
	}
	
	get_header($c_header);
	get_sidebar($c_brand_menu);
?>

<div id="search_screen">
	<div class="container">
		<div class="row">
			<div id="search_screen_inner">
			
				<h1 class="search_h1 h"><?php echo $main_search_title; ?></h1>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="search_block">
					
						<h2 class="search_h2 brand_h2 mb"><?php the_title(); ?></h2>
					
						<div class="search_thumb">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							<?php endif;?> 
						</div>
							
						<div class="excerpt"><?php the_excerpt(); ?></div>
						
						<a class="search_a" href="<?php the_permalink() ?>"><?php echo $search_a; ?></a>
						
					</div>				
					
				<?php endwhile; else: ?>
					<h2 class="search_h2 brand_h2 nf"><?php echo $nothing_found; ?></h2>
				<?php endif; ?>
				
				<div id="post_navigation" class="search_navigation">
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

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<?php
	get_sidebar($c_footer);
	get_footer();
?>