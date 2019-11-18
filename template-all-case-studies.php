<?php

/*

Template Name: template all case study

*/
//$pre_url = isset($_SERVER["HTTP_REFERER"])?$_SERVER["HTTP_REFERER"]:'';
//$pre_url = preg_replace('/\?.*/', '', $pre_url);
/* $get_site_url = get_site_url();
 $referer_urls = array($get_site_url.'/services/magento-store-development/',$get_site_url.'/services/magento-store-development',$get_site_url.'/services/magento-integration',$get_site_url.'/services/magento-integration/',$get_site_url.'/services/magento-integration',$get_site_url.'/services/magento-integration/',$get_site_url.'/services/magento-development',$get_site_url.'/services/magento-development/',$get_site_url.'/services/magento-store/');
 if(in_array($pre_url, $referer_urls) == false){
	header('Location: https://www.orangemantra.com');
}  */
?>


<?php get_header('solution'); ?>
<?php 
$args = [
    'wpse_include_parent' => true,
    'post_parent'         => 13186,
    'post_type'           => 'page'
    // Add additional arguments
];
$query = new WP_Query( $args );
?>

<?php 

	if(have_posts()):

		while(have_posts()):

			the_post();

			remove_filter( 'the_content', 'wpautop' ); 

			the_content();

		endwhile;

	endif; 

?>
<!--div class="wrap-inner">
	<div class="wrap-projects-shortcode has-thumbs">
		<div class="wrap-projects">
			<div class="row">
				<article class="column col-12 no-margin item item-21431 project-category-design">
					<div class="image-container post-thumb">
						<a href="/case-study/content-conversion" title="Content Conversion">
							<img src="/wp-content/uploads/2017/09/cc-min.jpg" class="wp-post-image" alt="" title="Content Conversion">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/content-conversion">Content Conversion</a>
						</h3>
					</div>
				</article>
				<article class="column col-12 no-margin item item-21429 project-category-design alt">
					<div class="image-container post-thumb">
						<a href="/case-study/banking-lead-management-system/" title="Banking Lead Management System">
							<img width="1" height="1" src="/wp-content/uploads/2017/09/blms-min.png" class="wp-post-image" alt="Banking Lead Management System" title="Banking Lead Management System">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/banking-lead-management-system/">Banking Lead Management System</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="column col-12 no-margin item item-21431 project-category-design">
					<div class="image-container post-thumb">
						<a href="/case-study/enterprise-lead-management-system/" title="Enterprise Lead Management System">
							<img src="/wp-content/uploads/2017/09/elms-min.png" class="wp-post-image" alt="Enterprise Lead Management System" title="Enterprise Lead Management System">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/enterprise-lead-management-system/">Enterprise Lead Management System</a>
						</h3>
					</div>
				</article>
				<article class="column col-12 no-margin item item-21429 project-category-design alt">
					<div class="image-container post-thumb">
						<a href="/case-study/social-analysis-application/" title="Social Analysis Application">
							<img width="1" height="1" src="/wp-content/uploads/2017/09/saa-min.png" class="wp-post-image" alt="Social Analysis Application" title="Social Analysis Application">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/social-analysis-application/">Social Analysis Application</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="column col-12 no-margin item item-21429 project-category-design alt">
					<div class="image-container post-thumb">
						<a href="/case-study/flora-india" title="Flora India">
							<img width="1" height="1" src="https://www.orangemantra.com/wp-content/uploads/2018/08/flora-min.png" class="wp-post-image" alt="Flora India" title="Flora India">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/flora-india">Flora India</a>
						</h3>
					</div>
				</article>
				<article class="column col-12 no-margin item item-21431 project-category-design">
					<div class="image-container post-thumb">
						<a href="/case-study/hgpmart" title="HGP Mart">
							<img src="/wp-content/uploads/2017/09/hgpmart-min.png" class="wp-post-image" alt="HGP Mart" title="HGP Mart">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/hgpmart">HGP Mart</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="column col-12 no-margin item item-21431 project-category-design">
					<div class="image-container post-thumb">
						<a href="/case-study/anita-dongre-grassroot" title="Anita Dongre">
							<img src="https://www.orangemantra.com/wp-content/uploads/2017/11/anita-dongre-home.png" class="wp-post-image" alt="Anita Dongre" title="Anita Dongre">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/anita-dongre-grassroot">Anita Dongre</a>
						</h3>
					</div>
				</article>
				<article class="column col-12 no-margin item item-21429 project-category-design alt">
					<div class="image-container post-thumb">
						<a href="/case-study/erp-automotive-industry" title="ERP Automotive Industry">
							<img width="1" height="1" src="/wp-content/uploads/2017/09/erpa-min.jpg" class="wp-post-image" alt="ERP Automotive Industry" title="ERP Automotive Industry">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/erp-automotive-industry">ERP Automotive Industry</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="column col-12 no-margin item item-21431 project-category-design">
					<div class="image-container post-thumb">
						<a href="/case-study/ciol" title="CIOL">
							<img src="https://www.orangemantra.com/wp-content/uploads/2015/08/CIOL-home.png" class="wp-post-image" alt="CIOL" title="CIOL">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/ciol">CIOL</a>
						</h3>
					</div>
				</article>
				<article class="column col-12 no-margin item item-21429 project-category-design alt">
					<div class="image-container post-thumb">
						<a href="/case-study/meds-india" title="Meds India">
							<img width="1" height="1" src="https://www.orangemantra.com/wp-content/uploads/2018/08/medsindia-min.png" class="wp-post-image" alt="Meds India" title="Meds India">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/meds-india">Meds India</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="column col-12 no-margin item item-21431 project-category-design">
					<div class="image-container post-thumb">
						<a href="/case-study/pee-safe" title="Pee Safe">
							<img src="https://www.orangemantra.com/wp-content/uploads/2018/08/peesafe-min.png" class="wp-post-image" alt="Pee Safe" title="Pee Safe">
						</a>
					</div>
					<div class="text">
						<h3 class="project-title text-element image-port">
							<a href="/case-study/pee-safe">Pee Safe</a>
						</h3>
					</div>
				</article>
			</div>
		</div>
	</div>
</div-->

<?php //the_field('client_logo_shortcode'); ?>
<?php get_footer('solution'); ?>