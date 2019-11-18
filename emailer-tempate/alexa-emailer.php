<?php/*
  Template Name: Alexa Emailer Template
 */
?>

<?php get_header('solution'); ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/emailer-tempate/assets/css/style.css" rel ="stylesheet">



<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        remove_filter('the_content', 'wpautop');
        the_content();
    endwhile;
endif;
?>


<?php get_footer('solution'); ?>
