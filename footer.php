<?php wp_footer(); ?>

<div id="memory">
<?php
echo 'Memory: '
	. round(memory_get_usage()/1024/1024, 2) . 'MB '
	.' |  MySQL:' . get_num_queries() . ' | ';
timer_stop(1);
echo 'sec';
?>
</div>
</body>
</html>