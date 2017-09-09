<?php
//Adding thumbnails
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<span class="widgettitle">',
		'after_title' => '</span>',
	));
	add_theme_support('post-thumbnails'); 
}

//Turn off the administrator panel
show_admin_bar(false);

//Pagination
add_action( 'pre_get_posts', 'mayak_category_announcement' );
function mayak_category_announcement( $query ) {
    if ($query->is_main_query() && is_category()) 
        $query->set( 'posts_per_page', 9 );
	
	//Вакансии укр
    if ($query->is_main_query() && is_category(141)) 
        $query->set( 'posts_per_page', 20 );
	//Вакансии англ
	if ($query->is_main_query() && is_category(145)) 
        $query->set( 'posts_per_page', 20 );
}

//Отключение эмодзи
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


//Редактируем рест апи
function my_rest_prepare_post( $data, $post, $request ) {
	$_data = $data->data;
	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$thumbnail = wp_get_attachment_image_src( $thumbnail_id );
	$_data['featured_image_thumbnail_url'] = $thumbnail[0];
	$data->data = $_data;
	return $data;
}
add_filter( 'rest_prepare_post', 'my_rest_prepare_post', 10, 3 );