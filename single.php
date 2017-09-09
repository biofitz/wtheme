<?php
	$post = $wp_query->post;
 
	if (in_category("open-vacancies-ua")) {
		include(TEMPLATEPATH."/single-open-vacancies-ua.php");
	}
	elseif (in_category("open-vacancies-en")) {
		include(TEMPLATEPATH."/single-open-vacancies-en.php");
	} 
	else {
		include(TEMPLATEPATH.'/single-default.php');
	}
?>