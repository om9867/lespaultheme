<?php



/*



Template Name: page with right sidebar



*/

?>

<?php get_header('solution'); ?>

<div class="ser_single_pg page_content_wrapper">

	<section class="services_with_sidebar_inner">

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

				<div class="col-sm-3 services_sidebar" data-aos="fade-left">

					<?php dynamic_sidebar( 'services_sidebar' ); ?>

				</div>

			</div>

		</div>

	</section>

</div>

<?php get_footer('solution'); ?>