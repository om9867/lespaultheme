<?php
/*
Template Name: Careers Template
*/
?>
<?php get_header('solution'); ?>
<style>
section.carrer-pg-banner {
    background: rgba(0, 0, 0, 0) url(<?php the_field('featured_background_image'); ?>) no-repeat scroll center center / cover;
}
</style>
<div class="careers_pg page_content_wrapper">

	<section class="banner-sec carrer-pg-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="banner-full-cont">
						<?php the_field('featured_section_title'); ?>
						<?php the_field('featured_description'); ?>				
						<div class="banner-action-btn">
						<?php if(get_field('featured_apply_button_link')) {?>
						   <a href="<?php the_field('featured_apply_button_link'); ?>" class="apply_btn"><?php the_field('featured_apply_button_text'); ?></a>
						<?php } ?>
						<?php if(get_field('featured_refer_a_friend_link')) {?>
             					   <a href="<?php the_field('featured_refer_a_friend_link'); ?>" class="refer_btn"><?php the_field('featured_refer_a_friend_text'); ?></a>
						<?php } ?>
						<?php if(get_field('walkin_interview_link')) {?>
						   <a href="<?php the_field('walkin_interview_link'); ?>" class="walkin_btn"><?php the_field('walkin_interview_text'); ?></a>
						   <?php } ?>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>

	<section class="career-sec1 carrer-tabs-sec">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<div class="tab-sec-info">
						<h2 class="tab-sec-title"> <?php the_field('build_career_section_title'); ?> </h2>
						<p class="tab-sec-desc"> <?php the_field('build_career_description'); ?> </p>
					</div>
				</div>
				
				<div class="col-md-12">
					<span class="back-border-line"></span>
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#value">Values</a></li>
						<li><a data-toggle="tab" href="#culture">Culture</a></li>
						<li><a data-toggle="tab" href="#benefits">Benefits</a></li>					
					</ul>
					
					<div class="tab-content">
						<div id="value" class="tab-pane fade in active">
							<div class="col-md-12">
								<?php if( have_rows('values_list') ): ?>
									<?php  while ( have_rows('values_list') ) : the_row(); ?>
								<div class="col-md-4">
									<div class="tab-opt-info">
										<span class="tab-opt-img"><img src="<?php the_sub_field('values_icon'); ?>" alt="<?php the_sub_field('values_name'); ?>" class="aligncenter size-full" /></span>
										<h4 class="tab-opt-title"><?php the_sub_field('values_name'); ?></h4>
										<span class="tab-opt-desc"><?php the_sub_field('values_description'); ?> </span>
									</div>
								</div>
								<?php endwhile; ?>
								<?php endif; ?>	
																
							</div>
						</div>
						<div id="culture" class="tab-pane fade">
							<div class="col-md-12">
							<?php if( have_rows('culture_list') ): ?>
									<?php  while ( have_rows('culture_list') ) : the_row(); ?>
								<div class="col-md-4">
									<div class="tab-opt-info">
										<span class="tab-opt-img"><img src="<?php the_sub_field('culture_icon'); ?>" alt="<?php the_sub_field('culture_name'); ?>" class="aligncenter size-full"/></span>
										<h4 class="tab-opt-title"><?php the_sub_field('culture_name'); ?></h4>
										<span class="tab-opt-desc"><?php the_sub_field('culture_description'); ?> </span>
									</div>
								</div>
								<?php endwhile; ?>
								<?php endif; ?>									
																				
							</div>
						</div>
						<div id="benefits" class="tab-pane fade">
							<div class="col-md-12">
							<?php if( have_rows('benefits_list') ): ?>
									<?php  while ( have_rows('benefits_list') ) : the_row(); ?>
								<div class="col-md-4">
									<div class="tab-opt-info">
										<span class="tab-opt-img"><img src="<?php the_sub_field('benefits_icon'); ?>" alt="<?php the_sub_field('benefits_name'); ?>" class="aligncenter size-full"/></span>
										<h4 class="tab-opt-title"><?php the_sub_field('benefits_name'); ?></h4>
										<span class="tab-opt-desc"><?php the_sub_field('benefits_description'); ?> </span>
									</div>
								</div>	
								<?php endwhile; ?>
								<?php endif; ?>		
							</div>				
						</div>
					</div>				
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="career_sec2 hiring-profile-sec">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<div class="hiring-profile-info">
						<h2 class="profile-sec-title"><?php the_field('hiring_section_title'); ?></h2>
						<p class="profile-sec-desc"><?php the_field('hiring_description'); ?></p>
					</div>
				</div>
				<?php if( have_rows('requirement_list') ): ?>
				<div class="col-md-12">
					<div class="hiring-profile-lists">
						<div class="hire-profile-colum"><div class="col-md-4"><h3>Profile</h3></div><div class="col-md-4"><h3>Requirements</h3></div></div>
					<?php  while ( have_rows('requirement_list') ) : the_row(); 
					if(get_sub_field('profile_hide_this')[0] != 1){
					?>
						<div class="hire-profile-colum">
							<div class="col-md-3">
								<span class="profile-title"> 
								<?php if(get_sub_field('requirement_list_profile_link')){ ?>
								<a href="<?php the_sub_field('requirement_list_profile_link'); ?>"><?php the_sub_field('requirement_for'); ?>
								</a>
								<?php } else {  the_sub_field('requirement_for'); } ?>
								</span>

								<span class="profile-position">Position: <?php the_sub_field('number_of_position'); ?></span>
								<span class="profile-experience">Experience: <?php the_sub_field('experience'); ?></span>
							</div>
							<div class="col-md-7 profile_description">
								<?php the_sub_field('profile_description'); ?>
								
							</div>
							<?php if(get_field('hiring_apply_now_url')){ ?>
							<div class="col-md-2">
                              <a href="<?php the_field('hiring_apply_now_url'); ?>" class="apply_btn">Apply Now</a>
							</div>
							<?php } ?>
						</div>
					<?php } endwhile; ?>

					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	
	<section class="career_sec2 hiring-process-sec">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12">
					<div class="hiring-process-info">
						<h2 class="process-sec-title"><?php the_field('hiring_process_section_title'); ?></h2>
						<p class="process-sec-desc"><?php the_field('hiring_process_description'); ?></p>
					</div>
				</div>
				<?php if( have_rows('hirirng_process_list') ): ?>
				<div class="col-md-12">
					<div class="hiring-process-options">
					<?php $process_count = 1;  while ( have_rows('hirirng_process_list') ) : the_row(); ?>
						<div class="col-md-2 hiring-step<?php echo $process_count; ?>">
							<div class="hiring-step-info">
								<span class="process-count"><?php echo $process_count; ?>.</span>
								<span class="process-label"><?php the_sub_field('step_name'); ?></span>						
							</div>
						</div>
						<?php if($process_count != 4){ ?>
						<div class="col-md-1">
							<span class="process-direc"><img src="<?php the_sub_field('arrow_image'); ?>" alt="" class="aligncenter size-full" /></span>
						</div>
						<?php } ?>
						<?php $process_count++; endwhile ?>
						
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</section>
		<?php if( have_rows('galleries') ): ?>
	<section class="career_sec3 om-photo-gallery">
            <div class="container"> 
		<div class="photo-galery-right">
			<?php $gallery_count = 1;  while ( have_rows('galleries') ) : the_row(); 
			if($gallery_count < 5){
			?>
			<div class="om_gallery_img gallery-pic-<?php echo $gallery_count; ?>">
				<a title="Orange Mantra Tech Team" rel="prettyPhoto[gallery2]" href="<?php the_sub_field('gallery_image_full'); ?>">
					<img src="<?php the_sub_field('gallery_thumbnail'); ?>" alt="OM Gallery" class="aligncenter size-full" />
				</a>
			</div>
			<?php } $gallery_count++; endwhile; ?>
			
		</div>
		<div class="photo-galery-left">
			<?php $gallery_count = 1;  while ( have_rows('galleries') ) : the_row();
			if($gallery_count == 5){
			?>
			<div class="om_gallery_img gallery-pic-5">
				<a title="Orange Mantra Tech Team" rel="prettyPhoto[gallery2]" href="/wp-content/uploads/2019/10/IMG_2188.jpg">
					<img src="/wp-content/uploads/2019/10/7.jpg" alt="" class="aligncenter size-full" />
				</a>
			</div>
			<?php } $gallery_count++; endwhile; ?>
		</div>
            </div>
	</section>
	<?php endif; ?>
</div>
<style>
.carrer-tabs-sec .tab-content .tab-opt-info {
    min-height: 282px;
}
.carrer-pg-banner .banner-full-cont h2 {
    border-bottom: 1px solid #ffffff;
    border-top: 1px solid #ffffff;
    font-size: 40px;
    padding: 6px 0;
    text-align: center;
	color: #fff;
}
.carrer-pg-banner .banner-full-cont p {
    font-weight: normal;
    text-align: center;
    margin: 6px 0 20px;
}
.banner-sec p {
    color: #ffffff;
    font-size: 20px;
    line-height: 30px;
}
.carrer-pg-banner .banner-full-cont h2 b {
    color: #f56c03;
    font-weight: 500;
}
</style>
<?php get_footer('solution'); ?>