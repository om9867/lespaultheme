<?php
/*
Template Name: Verticals New Template
*/
?>
<?php get_header('solution'); ?>
<section class="ndustry-specificbanner">
   <?php the_post_thumbnail(); ?>
    <div class="innercount">
        <span><?php the_field('verticals_section_title'); ?></span>
    </div>
</section>
<div class="healthcarecount ecommercecount realestate travelhospital verticalspage">
    <section class="fmcgmainSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('verticals_description'); ?>

                </div>
            </div>
        </div>
    </section>
    	<?php if( have_rows('verticals') ): ?>
    <section class="verticalDeatils">
        <div class="container">
            <div class="row">
			<?php  while ( have_rows('verticals') ) : the_row(); ?>
                <div class="col-md-6">
                    <div class="verticalInner">
                        <img src="<?php the_sub_field('verticals_list_icon'); ?>" alt="Healthcare" />
                        <div class="textCount">
                            <span><span class="subheading"><?php the_sub_field('verticals_list_title'); ?></span></span>
                            <p><?php the_sub_field('verticals_list_description'); ?>
							<?php if(get_sub_field('verticals_list_link')){ ?>
										<a href="<?php the_sub_field('verticals_list_link'); ?>">Read More</a>
										<?php } ?>
							</p>
                        </div>
                    </div>
                </div>
					<?php endwhile; ?>
            </div>
        </div>
    </section>
	<?php endif; ?>
</div>
<section class="our-clients">
<div class="container">
<h3 class="gradient-brd-btm section_heading" data-aos="fade-up" data-aos-delay="100"><?php the_field('client_section_title'); ?></h3>
<div class="row">
<div class="col-sm-12" data-aos="fade-up" data-aos-delay="300"><?php echo do_shortcode('[logos columns="5" category="home-clients" count="15" order="new" scroll="3000"][/logos]'); ?></div>
</div>

</div>
</section>
<?php get_footer('solution'); ?>