<?php
/*
Template Name: mobile app services
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

<style>
.app_other_services ul {
    display: flex;
    justify-content: center;
}
</style>
<section class="mobile_app_btm1 featured-app" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-head">
                <h3 class="section_heading gradient-brd-btm">Some of Our Featured Apps</h3>
            </div>
            <div class="col-sm-12">
                <?php echo do_shortcode("[get-posts-slider category='featured-apps']"); ?>
            </div>
        </div>
    </div>
</section>
<section class="mobile_app_btm2 client_testimonials">
    <div class="container">
        <h3 class="section_heading">Client’s Testimonials</h3>
        <div class="testimonials_cont">
            <?php echo do_shortcode( '[testimonials category="app-pages-testimonials" count="6" order="new" private="0" speed="4" /]' ); ?>
        </div>
    </div>
</section>
<section class="mobile_app_btm3 app_other_services">
    <div class="container">
        <ul class="list-unstyled">
            <li data-aos="fade-up">
                <a href="<?php echo site_url(); ?>/services/iphone-application-development"><i class="fa fa-apple fa-3x"></i>iOS Development</a>
            </li>
            <li data-aos="fade-down" data-aos-delay="50">
                <a href="<?php echo site_url(); ?>/services/android-application-development"><i class="fa fa-android fa-3x"></i>Android Development</a>
            </li>
            <!--li data-aos="fade-up" data-aos-delay="100">
                <a href="<?php //echo site_url(); ?>/services/windows-mobile-application-development"><i class="fa fa-windows fa-3x"></i>Windows Development</a>
            </li-->
            <li data-aos="fade-down" data-aos-delay="150">
                <a href="<?php echo site_url(); ?>/services/phonegap-application-development"><i class="fa fa-mobile fa-4x"></i>Phonegap Development</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
                <a href="<?php echo site_url(); ?>/services/mobile-ui-ux-designers-india"><i class="fa fa-paint-brush fa-3x"></i>App Design</a>
            </li>
        </ul>
    </div>
</section>

<?php get_footer('solution'); ?>