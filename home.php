<?php
/*
Template Name: full width templates
*/
?>
<?php get_header('solution'); ?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
			remove_filter( 'the_content', 'wpautop' ); 
			the_content();
		endwhile;
	endif; 
?>
<?php //the_field('client_logo_shortcode'); ?>
<?php get_footer('solution'); ?>