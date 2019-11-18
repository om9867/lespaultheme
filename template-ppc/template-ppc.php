<?php
/*
Template Name: PPC Template
*/
?>
<?php get_header('solution'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
     window.location.replace("https://www.orangemantra.com/thank-you-page/");
}, false );
</script>
<link rel='stylesheet' id='dashicons-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/magentopages.css' type='text/css' media='all' />
<style type="text/css">
    header, .breadcrumbs, .our-clients, footer{display: none !important;}
    .our-clients.ppc-clients{display: block;}
    .wrap{background: transparent;}
     #tawkchat-minified-container{display: none;}
	 .ecomm-ppc-section .footerFomrcount .sednButton input {
    font-size: 14px;
}
</style>

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>jQuery(document).ready(function($) { $('body').bootstrapMaterialDesign(); });</script> 

<?php get_footer('ppc'); ?>
