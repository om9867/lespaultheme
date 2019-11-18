<?php
/*
Template Name: Get a Quote templates
*/
?>
<?php get_header('solution'); ?>
<script>
delete_cookie('form');
jQuery(document).ajaxComplete(function() {
  if (jQuery('.wpcf7-mail-sent-ok').length) {
	  document.cookie = "form=formsent;path=/";
   window.location.replace("https://www.orangemantra.com/thank-you/");
  }
});

</script>
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