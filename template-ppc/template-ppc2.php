<?php
/*
Template Name: PPC2 Template
*/
?>
<?php get_header('solution'); ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/business-ppc-assets/bootstrap.min.css" rel ="stylesheet">
 <link type="text/css"  rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/business-ppc-assets/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/business-ppc-assets/slick-theme.css">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/business-ppc-assets/style.css" rel="stylesheet">
<style type="text/css">
    header .breadcrumbs, footer{display: none;}
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

<?php get_footer('solution'); ?>
