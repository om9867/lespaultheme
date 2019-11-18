<?php
/*
Template Name: Services Template
*/
?>
<?php get_header('solution'); ?>
<div class="services_pg page_content_wrapper">
	<section class="ser_sec1 manage_pro">
		<div class="container">
			<div class="row">
			<?php if( have_rows('process_list') ): ?>
			
				<div class="col-sm-12">
					<div class="row">
					<?php while ( have_rows('process_list') ) : the_row(); ?>
						<div class="col-sm-3" data-aos="zoom-in">
							<div class="flex_div">
								<h2 class="section_heading"><?php the_sub_field('our_process_name'); ?></h2>
							</div>
						</div>
						<?php endwhile; ?>
						
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6">
							<?php the_field('process_left_description'); ?>
						</div>
						<div class="col-sm-6">
							<?php the_field('process_right_description'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<?php the_field('get_quote_left_heading_text'); ?>
				</div>
				<div class="col-sm-5 col-md-7">
					<?php the_field('get_quote_description_text'); ?>
				</div>
				<div class="col-sm-3 col-md-2">
				<?php if(get_field('get_quote_button_link')){ ?>
					<a href="<?php echo get_field('get_quote_button_link'); ?>" class="btn_call"><?php the_field('get_quote_button_text'); ?></a>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<div class="np">
		<div class="container">
			<hr class="fading">
		</div>
	</div>
	<?php if( have_rows('our_services_services') ): ?>
	<section class="ser_sec2 om_services_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- ecommerce services start -->
					<div class="service_inner">
						<?php $count = 1; $harf_row = floor(count(get_field('our_services_services'))/2); while ( have_rows('our_services_services') ) : the_row(); ?>
					
					<div class="service_section1 ecomm">
					
						<h2 class="section-title">
						<?php if(get_sub_field('our_services_services_link')) {?>
						<a href="<?php echo get_sub_field('our_services_services_link'); ?>"><span><?php the_sub_field('our_services_service_title'); ?></span> <i class="fa fa-external-link cust-ext-link" aria-hidden="true"></i> </a>
						<?php } else { 
						the_sub_field('our_services_service_title');
						} ?>
						</h2>
						<?php the_sub_field('our_services_service_description'); ?>
						
					</div>
					<?php if($count == ($harf_row - 1)){ ?>
					</div><div class="service_inner">
					<?php } ?>
					<?php $count++; endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<div class="our_mission">
		<div class="container">
			<h2 class="section-title"><?php the_field('our_mission_section_title'); ?></h2>
			<?php the_field('our_mission_description'); ?>
		</div>
	</div>
</div>
<style>
.our_mission {
    background: url(<?php the_field('our_mission_background_image'); ?>) no-repeat fixed 50% 0/cover transparent;
}
 .service_section1 {
    border: 1px solid #ececec;
    padding: 16px;
    margin-bottom: 20px;
    border-radius: 5px;
    width: 100%;
}
 .service_inner:last-child {
	 float:right;
 }
.service_inner{
	 width: 100%;
    max-width: 560px;
	    display: inline-block;
}
 .service_section1 ul li {
    width: 32%;
    float: left;
    text-align: center;
    background-color: #f0f0f0;
    padding: 20px 7px;
    margin-top: 2%;
    border-radius: 5px;
}
.designing .service_section1 ul li, .oms .service_section1 ul li, .os .service_section1 ul li, .js .service_section1 ul li, .app .service_section1 ul li, .service_section1 ul li {
    padding: 20px 22px;
}

.om_services_section .col-sm-12 {
    padding: 0;
	text-align:center;
}
.service_section1 ul li:nth-child(3n-1) {
    margin: 2% 2% 0;
}
.service_section1 ul li a,.service_section1 ul li {
    font-size: 1.7rem;
	    color: #ff5200;
}  
@media only screen and (max-width: 1199px) {
	.service_inner:last-child {
    float: none;;
}
}
</style>
<script>
/* jQuery(document).ready(function(){
	var service_section_length = jQuery('.service_section1').length;
	var half_length = parseInt(service_section_length/2);
	console.log(half_length);
	jQuery('.service_section1:nth-child('+ half_length +')').after('</div><div class="service_inner">');
}); */
</script>
<?php //the_field('client_logo_shortcode'); ?>
<?php get_footer('solution'); ?>