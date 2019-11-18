<?php



/*



Template Name: country pages template



*/

?>

<?php get_header('solution'); ?>

<div class="country_pages ser_single_pg page_content_wrapper">

    <section class="country_contents">

        <div class="container">

        	<div class="row">
	            <div class="col-sm-9">

					<?php 

					  if(have_posts()):

					    while(have_posts()):

					      the_post();

					      remove_filter( 'the_content', 'wpautop' ); 

					      the_content();

					    endwhile;

					  endif; 

					?>

				</div>

				<div class="col-sm-3 country_sidebar">

	                <?php dynamic_sidebar( 'country_sidebar' ); ?>

	            </div>
            </div>
		</div>

	</section>

	<section class="con_sec2">

	    <div class="container">

	        <h3 class="section_heading heading_decorate" data-aos="fade-up">Comprehensive Solutions For All Industry Verticals</h3>

	        <div class="our-experienced-industries">

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="50">

	                <i class="fa fa-heartbeat fa-2x" aria-hidden="true"></i><span>Healthcare</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="100">

	                <i class="fa fa-futbol-o fa-2x" aria-hidden="true"></i><span>Sports</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="150">

	                <i class="fa fa-truck fa-2x" aria-hidden="true"></i><span>E-commerce</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="200">

	                <i class="fa fa-money fa-2x" aria-hidden="true"></i><span>Banking</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="250">

	                <i class="fa fa-umbrella fa-2x" aria-hidden="true"></i><span>Technology</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="300">

	                <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i><span>Education</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="350">

	                <i class="fa fa-university fa-2x" aria-hidden="true"></i><span>Law</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="400">

	                <i class="fa fa-plane fa-2x" aria-hidden="true"></i><span>Location Based</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="450">

	                <i class="fa fa-tags fa-2x" aria-hidden="true"></i><span>E-learning</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="500">

	                <i class="fa fa-product-hunt fa-2x" aria-hidden="true"></i><span>Productivity</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="550">

	                <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i><span>Real Estate</span>

	            </div>

	            <div class="industry_single" data-aos="fade-up" data-aos-delay="600">

	                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i><span>Social Network</span>

	            </div>

	        </div>

	    </div>
	</section>
	<section class="portfolio_slider_section">
        <div class="container">
            <h3 class="section_heading" data-aos="fade-up">Some of Our Portfolio</h3>
            <div class="portfolio_cont" data-aos="zoom-in" data-aos-delay="150"><?php echo do_shortcode('[portfolio-image category="magento"]'); ?></div>
        </div>
    </section>
    <section class="call_of_action bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <p>Let us help you with solutions that match your requirements.</p>
                </div>
                <div class="col-sm-5 col-md-4 text-right">
                    <a class="call_btn" href="/get-a-quote/">Enquire Now</a>
                </div>
            </div>
        </div>
    </section>
	<section class="con_sec3">
	    <div class="container">
	        <div class="our_clients_list">
	            <ul class="list-unstyled">
	                <li><img src="/wp-content/uploads/2017/09/decathlon_logo.png" alt="decathlon"></li>
	                <li><img src="/wp-content/uploads/2017/09/srs_logo.png" alt="srs"></li>
	                <li><img src="/wp-content/uploads/2017/09/tetrapack_logo.png" alt="tetra pack"></li>
	                <li><img src="/wp-content/uploads/2017/09/american-swan_logo.png" alt="american swan"></li>
	                <li><img src="/wp-content/uploads/2017/09/hero_logo.png" alt="hero"></li>
	                <li><img src="/wp-content/uploads/2017/09/user-friendly-resources-logo.png" alt="user friendly resources"></li>
	            </ul>
	        </div>
	    </div>
	</section>
</div>

<?php get_footer('solution'); ?>