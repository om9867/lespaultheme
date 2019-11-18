<?php

/*

Template Name: template-case-study

*/
//$pre_url = isset($_SERVER["HTTP_REFERER"])?$_SERVER["HTTP_REFERER"]:'';
//$pre_url = preg_replace('/\?.*/', '', $pre_url);
/* $get_site_url = get_site_url();
 $referer_urls = array($get_site_url.'/services/magento-store-development/',$get_site_url.'/services/magento-store-development',$get_site_url.'/services/magento-integration',$get_site_url.'/services/magento-integration/',$get_site_url.'/services/magento-integration',$get_site_url.'/services/magento-integration/',$get_site_url.'/services/magento-development',$get_site_url.'/services/magento-development/',$get_site_url.'/services/magento-store/');
 if(in_array($pre_url, $referer_urls) == false){
	header('Location: https://www.orangemantra.com');
}  */
?>
<script>
if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
location = 'https://www.orangemantra.com';
}

</script>

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