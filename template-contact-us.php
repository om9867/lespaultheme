<?php
/*
Template Name: Contact Us Template
*/
?>
<?php get_header('solution'); ?>
<script>
delete_cookie('form');
jQuery(document).ajaxComplete(function() {
  if (jQuery('.wpcf7-mail-sent-ok').length) {
	  document.cookie = "form=formsent;path=/";
   window.location.replace("https://www.orangemantra.com/thank-you/");
  }
});

</script>
<div class="contact_pg page_content_wrapper">
<?php if( have_rows('top_address_list') ): ?>
    <section class="contact_sec1">
        <div class="container">
            <div class="row">
				<?php  while ( have_rows('top_address_list') ) : the_row();
				$india = '';
				if(get_sub_field('main_address')[0] == 1){
					$india = 'india';
				}
				?>
                <div class="om_footprints <?php echo $india; ?>" data-aos="zoom-in" style="background-image:url(<?php the_sub_field('top_address_image'); ?>);">
				<?php
				if(get_sub_field('main_address')[0] == 1){
					echo '<div class="footprints_inner"><div class="map_india" style="background-image:url('.get_sub_field('top_address_image').');"></div><div class="adds_india">';
				}
				?>
                   <?php the_sub_field('top_address'); ?>
				   <?php
				if(get_sub_field('main_address')[0] == 1){
					echo '</div></div>';
				}
				?>
                </div>
				<?php endwhile; ?>
               
                
               
            </div>
        </div>
    </section>
	<?php endif; ?>
    <section class="contact_sec2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="zoom-out-right">
                    <div class="om_global_loc">
                        <h3 class="ser_title_big"><?php the_field('reach_us_title'); ?></h3>
                        <div class="om_in_touch">
						<?php if(get_field('sales_email_id')){ ?>
                            <a href="mailto:<?php the_field('sales_email_id'); ?>"><span class="fa fa-envelope" aria-hidden="true"></span> <?php the_field('sales_email_id'); ?></a>
						<?php } ?>
						<?php if(get_field('reach_us_skype')){ ?>
                            <p><span class="fa fa-skype" aria-hidden="true"></span><?php the_field('reach_us_skype'); ?></p>
						<?php } ?>
						<?php if(get_field('hr_email_id')){ ?>
						<a href="mailto:<?php the_field('hr_email_id'); ?>"><span class="fa fa-users" aria-hidden="true"></span><?php the_field('hr_email_id'); ?></a>
						<?php } ?>
						<?php if(get_field('contact_number')){ ?>
						<a href="tel:<?php the_field('contact_number'); ?>" class="om_color"><span class="fa fa-phone" aria-hidden="true"></span><?php the_field('contact_number'); ?><p>(HR)</p></a>
						<?php } ?>
                        </div>
						<?php if( have_rows('reach_us_contact_address') ): ?>
                        <div class="row">
						<?php  while ( have_rows('reach_us_contact_address') ) : the_row(); ?>
                            <div class="col-sm-6">
                               <?php the_sub_field('reach_us_address'); ?>
                            </div>
							<?php endwhile; ?>
                           
                        </div>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="zoom-out-left">
                    <div class="form_cont">
                        <h3 class="ser_title_big">Get in touch with us</h3>
                       <?php echo do_shortcode('[contact-form-7 id="1413" title="get_in_touch"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map"><div id="new_cstm_map" style="width:100%; height:450px; zoom:1.2"></div></div>
	<?php if( have_rows('technologies_group_list') ): ?>
    <section class="contact_sec3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 we-work-on">
                    <h3 class="section-title" data-aos="fade-up"><?php the_field('technologies_section_title'); ?></h3>
                    <div class="we-workon-technologies">
					
					<?php  while ( have_rows('technologies_group_list') ) : the_row(); ?>
                        <div class="technology-details-desc" data-aos="fade-up" data-aos-offset="50">
                            <h4><i class="fa <?php the_sub_field('technologies_list_icon'); ?>" aria-hidden="true"></i> <?php the_sub_field('technology_group_title'); ?></h4>
                            <div class="multi-technology">
							<?php  while ( have_rows('technologies') ) : the_row(); ?>
                                <div class="single-tech">
                                    <img src="<?php the_sub_field('technology_image'); ?>" alt="<?php the_sub_field('technology_name'); ?>" class="aligncenter size-full wp-image-592" />
                                    <h5><?php the_sub_field('technology_name'); ?></h5>
                                </div>
								<?php endwhile; ?>
                            </div>
                        </div>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php endif; ?>
</div>
<style>
.om_footprints.india {
    background-image: none!important;
}
</style>
<?php get_footer('solution'); ?>