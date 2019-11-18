<?php
/*
Template Name: Verticals Template
*/
?>
<?php get_header('solution'); ?>
<div class="verticals page_content_wrapper">
    <section class="verticals_1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section_heading" data-aos="fade-up"><?php the_field('verticals_section_title'); ?></h3>
                   <?php the_field('verticals_description'); ?>
                </div>
				<?php if( have_rows('verticals') ): ?>
                <div class="col-sm-12 verticals_inner_section">
                    <div class="row">
					<?php  while ( have_rows('verticals') ) : the_row(); ?>
                        <div class="col-sm-6 col-md-4 single-vertical" data-aos="fade-up">
                            <div class="single-vertical-inner">
                                <a href="<?php the_sub_field('verticals_list_link'); ?>">
                                    <div class="verticals-icon"><img src="<?php the_sub_field('verticals_list_icon'); ?>" alt="<?php the_sub_field('verticals_list_description'); ?>" width="96" height="83" class="aligncenter size-full wp-image-183" />
                                    </div>
                                    <div class="verticals-details">
                                        <h3 style="color:<?php the_sub_field('verticals_list_color'); ?>"><?php the_sub_field('verticals_list_title'); ?></h3>
                                        <p><?php the_sub_field('verticals_list_description'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
						<?php endwhile; ?>
                        
                    </div>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
    <section class="verticals_2">
        <div class="container">
            <div class="row">
			<?php if( have_rows('testimonials') ): ?>
                <div class="col-sm-7 testimonials">
                    <h3 class="section_heading" data-aos="fade-up"><?php the_field('testimonials_section_title'); ?></h3>
                    <div id="testimonial-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000" data-aos="fade-up" data-aos-delay="100">
                        <div class="carousel-inner" role="listbox">
						<?php $count = 1; while ( have_rows('testimonials') ) : the_row(); 
						$active = '';
						if($count == 1){
							$active = 'active';
						}
						?>
                            <div class="item <?php echo $active; ?>">
                                <p class="client_review"><?php the_sub_field('client_review'); ?></p>
                                <span class="client_name"><?php the_sub_field('client_name'); ?></span>
                            </div>
							<?php $count++; endwhile; ?>
                            
                        </div>
                    </div>
                </div>
				<?php endif; ?>
                <div class="col-sm-5 portfolio-verticals-section">
                    <div class="port-verticals-section-inner">
                        <h3 class="section_heading" data-aos="fade-up"><?php the_field('all_verticals_list_section_title'); ?></h3>
						<?php if( have_rows('all_verticals_list_verticals') ): ?>
                        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="100">
						<?php while ( have_rows('all_verticals_list_verticals') ) : the_row(); ?>
                            <li><a href="<?php the_sub_field('all_verticals_list_url'); ?>"><i class="icon-check" aria-hidden="true"></i><?php the_sub_field('all_verticals_list_name'); ?></a>
                            </li>
							<?php endwhile; ?>
                            
                        </ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer('solution'); ?>