<?php
/*
Template Name: Thank You Template
*/

$pre_url = isset($_SERVER["HTTP_REFERER"])?$_SERVER["HTTP_REFERER"]:'';
$pre_url = preg_replace('/\?.*/', '', $pre_url);

$get_site_url = get_site_url();
 $referer_urls = array(
 $get_site_url.'/query-form/',
 $get_site_url.'/verticals/',
 $get_site_url.'/verticals',
 $get_site_url.'/query-form',
 $get_site_url.'/get-a-quote/',
 $get_site_url.'/get-a-quote',
 $get_site_url.'/contact-us/',
 $get_site_url.'/contact-us',
 $get_site_url.'/services/magento-store-development',
 $get_site_url.'/services/magento-store-development/',
 $get_site_url.'/services/magento-store/',
 $get_site_url.'/services/magento-store',
 $get_site_url.'/services/magento-extension-development/',
 $get_site_url.'/services/magento-extension-development',
 $get_site_url.'/services/magento-security-patches/',
 $get_site_url.'/services/magento-security-patches',
 $get_site_url.'/services/magento-mobile-app-development',
 $get_site_url.'/services/magento-mobile-app-development/',
 $get_site_url.'/services/magento-ecommerce-development/',
 $get_site_url.'/services/magento-ecommerce-development',
 $get_site_url.'/services/magento-support',
 $get_site_url.'/services/magento-support',
 $get_site_url.'/services/magento-integration',
 $get_site_url.'/services/magento-integration/',
 $get_site_url.'/services/magento-optimization',
 $get_site_url.'/services/magento-optimization/',
 $get_site_url.'/services/hire-magento-developer/',
 $get_site_url.'/services/hire-magento-developer',
 $get_site_url.'/services/magento-development/',
 $get_site_url.'/services/magento-development',
 $get_site_url.'/services/magento-audit/',
 $get_site_url.'/services/magento-audit',
 $get_site_url.'/services/magento-consulting/',
 $get_site_url.'/services/magento-consulting',
 $get_site_url.'/services/ecommerce-process-workflow/',
 $get_site_url.'/services/ecommerce-process-workflow',
 $get_site_url.'/services/custom-magento-development/',
 $get_site_url.'/services/custom-magento-development',
 $get_site_url.'/services/ecommerce-compliance/',
 $get_site_url.'/services/ecommerce-compliance',
 $get_site_url.'/talk-to-an-expert/',
 $get_site_url.'/magento-experts',
 $get_site_url.'/magento-experts/',
 $get_site_url.'/talk-to-an-expert'
 );
 $success_para = isset($_GET['submit'])?$_GET['submit']:'';
 /*   echo '<pre>';
 print_r($pre_url);
print_r($referer_urls);
 var_dump(in_array($pre_url, $referer_urls));
 echo '</pre>';
 die; */  

 if((in_array($pre_url, $referer_urls) == false) && ($success_para != 'success')){
	header('Location: https://www.orangemantra.com/');
} 
?>
<script>
if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
location = 'https://www.orangemantra.com/';
}

</script>

<?php get_header('solution'); ?>
<script>
if(!getCookie('form')){
	location = 'https://www.orangemantra.com/';
}
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