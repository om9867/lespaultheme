<?php
/*
Template Name: Home Template
*/
?>

<?php get_header('solution'); ?>
		<div class="home page_content_wrapper"><section class="introduction">
			<div class="container">
			<div class="row">
			<?php // check if the repeater field has rows of data
				if( have_rows('introduction_list') ):
					// loop through the rows of data
					while ( have_rows('introduction_list') ) : the_row(); ?>
			
			<div class="col-sm-4" data-aos="fade-up">
			
			<div class="intro">
			<h1 class="hide-content-seo"><?php the_sub_field('introduction_sco_title'); ?></h1>
			<h3 class="section-title"><i class="fa fa-id-card-o" aria-hidden="true"></i><?php the_sub_field('introduction_section_section_title'); ?></h3>
			<?php the_sub_field('introduction_section_description'); ?>
			<a class="readmore" href="<?php the_sub_field('introduction_read_more_link'); ?>">
			<?php the_sub_field('introduction_section_read_more_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>

			</div>
			</div>
			<?php endwhile; endif; ?>
			
			</div>
			</div>
			</section><section class="technologies">
			<div class="container">
			<h3 class="section_heading gradient-brd-btm nm" data-aos="fade-up" data-aos-delay="100">Our Expertise</h3>
			<div class="row mlr30"><?php echo do_shortcode("[get-custom-pages custom-field='page-custom-cat' custom-value='technology']"); ?></div>

			<!--<div class="freequote">
			<button id="get-quote" class="btn_quote" data-toggle="modal" data-target="#contact_modal" >Get a Free Quote</button>
			</div>-->

			</div>
			</section><section class="call-to-action">
			<div class="container">
			<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
			<h3><?php the_field('call_to_action_first_left_title'); ?></h3>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-7">

			<?php the_field('call_to_action_first_description'); ?>

			</div>
			<div class="col-xs-12 col-sm-3 col-md-2"><a class="btn_call" href="<?php the_field('call_to_action_first_button_link'); ?>"><?php the_field('call_to_action_first_button_text'); ?></a></div>
			</div>
			</div>
			</section>
			<section class="our-clients">
			<div class="container">
			<h3 class="gradient-brd-btm section_heading" data-aos="fade-up" data-aos-delay="100">Companies that Trust Us</h3>
			<div class="row">
			<div class="col-sm-12" data-aos="fade-up" data-aos-delay="300"><?php echo do_shortcode('[logos columns="5" category="home-clients" count="15" order="new" scroll="3000"][/logos]'); ?></div>
			</div>
			<div class="opportunities"><a id="unlock-opt" class="btn_unlock" href="/verticals/portfolio">Explore Our Portfolio</a></div>
			</div>
			</section>

			<section class="industry">
			<div class="container">
			<h3 class="section_heading gradient-brd-btm nm" data-aos="fade-up" data-aos-delay="100">Industry Solutions</h3>
			<div class="row"><?php echo do_shortcode("[get-child-pages parent='11' page-1='208' page-2='260' page-3='297' page-4='218']"); ?></div>
			<div class="opportunities"><a id="unlock-opt" class="btn_unlock" href="/verticals">Unlock Opportunities</a></div>
			</div>
			</section><section class="our-expertise">
			<div class="container"><!--
			<h3 class="section_heading section_heading gradient-brd-btm" data-aos="fade-up" data-aos-delay="100"><span>Our Expertise</span></h3>
			-->
			<div class="row"><?php echo do_shortcode('[widgets area="wmcs-our-expertise-section" /]'); ?></div>
			</div>
			</section>
		
			<section class="call-to-action">
			<div class="container">
			<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
			<h3><?php the_field('call_to_action_second_left_title'); ?></small></h3>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-7">

			<?php the_field('call_to_action_second_description'); ?>

			</div>
			<div class="col-xs-12 col-sm-3 col-md-2"><a class="btn_call" href="<?php the_field('call_to_action_second_button_link'); ?>"><?php the_field('call_to_action_second_button_text'); ?></a></div>
			</div>
			</div>
			</section>

			<section id="blogs" class="blogs-section">
			<div class="container">
			<div class="col-sm-12 blogs_tp">
			<h3 class="section_heading"><?php the_field('blog_section_title'); ?></h3>
			<!--<h4 class="section_subheading">From Our Blog</h4>-->
			</div>
			<div class="col-sm-12">
			<div class="row">
			<?php // check if the repeater field has rows of data
				if( have_rows('blog_list') ):
					// loop through the rows of data
					while ( have_rows('blog_list') ) : the_row(); 
					$blog_featured_image = get_sub_field('blog_list_featured_image');
					?>
			<div class="col-md-4">
			<div class="blog_inner">
			<div class="img_cont"><a href="<?php the_sub_field('blog_list_blog_link'); ?>"><img src="<?php echo $blog_featured_image['url']; ?>" alt="<?php echo $blog_featured_image['alt']; ?>" width="300" height="150" /></a></div>
			<h4><a href="<?php the_sub_field('blog_list_blog_link'); ?>"><?php the_sub_field('blog_list_title'); ?></a></h4>
			<?php the_sub_field('blog_list_description'); ?></div></div>
			<?php endwhile; endif; ?>
			
			</div>
			</div>
			<div class="opportunities"><a id="unlock-opt" class="btn_unlock" href="<?php the_field('blog_list_blog_page_link'); ?>"><?php the_field('blog_link_button_text'); ?></a></div>
			</div>
			</section><section class="happiest-moment">
			<div class="container">
			<div class="row">
			<?php // check if the repeater field has rows of data
				if( have_rows('happiness_list') ):
					// loop through the rows of data
				while ( have_rows('happiness_list') ) : the_row(); ?>
			<div class="col-sm-4 captured-moments" data-aos="fade-up" data-aos-delay="300">
			<div class="moment-inner">
			<h3 class="section-title">
			<?php if(get_sub_field('happiness_list_title_logo')){ ?>
			<img class="size-full wp-image-13535" src="<?php echo get_sub_field('happiness_list_title_logo'); ?>" alt="Winner CIO Choice 2017" width="29" height="24" />
			<?php } ?>
			<?php the_sub_field('happiness_list_title'); ?></h3>
			<div class="video-wrapper">
			<?php the_sub_field('happiness_list_content'); ?>
			</div>
			</div>
			</div>
			<?php endwhile; endif; ?>
			
			<a class="readmore " href="/awards"> More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</div>
			</div>
			</section></div>
<style>
.video-wrapper img{
	    margin-top: -30%;
		position: absolute;
    left: 0;
    right: 0;
}
.happiest-moment .readmore{
color: #ff5200;
    text-align: center;
    width: 100%;
    display: inline-block;
}
.captured-moments:nth-child(3n-1) .section-title{
	text-align:center;
}

</style>
<?php get_footer('solution'); ?>