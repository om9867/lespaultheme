<script> function createFcn(nm){(window.freshsales)[nm]=function(){(window.freshsales).push([nm].concat(Array.prototype.slice.call(arguments,0)))}; } (function(url,appToken,formCapture){window.freshsales=window.freshsales||[];if(window.freshsales.length==0){list='init identify trackPageView trackEvent set'.split(' ');for(var i=0;i<list.length;i++){var nm=list[i];createFcn(nm);}var t=document.createElement('script');t.async=1;t.src='https://d952cmcgwqsjf.cloudfront.net/assets/analytics.js';var ft=document.getElementsByTagName('script')[0];ft.parentNode.insertBefore(t,ft);freshsales.init('https://orangem.freshsales.io','8e24c1344abc5b10c9652c9d64c9a8b65684785d6f879107b5a15e8c6bd58afb',true);}})();</script>
<?php do_action( 'wm_after_main_content' ); ?>
<!-- /content --></div>
<?php
//widget area variables
$aboveFooter = 'above-footer-widgets';
$footerRow   = 'footer-widgets';
$pageId      = ( is_home() ) ? ( get_option( 'page_for_posts' ) ) : ( null );
if ( is_page_template( 'page-template/landing.php' ) ) {
	$aboveFooter = wm_meta_option( 'landing-above-footer-widgets' );
	$footerRow   = wm_meta_option( 'landing-footer-widgets' );
}
if ( is_page_template( 'page-template/construction.php' ) )
	$aboveFooter = $footerRow = null;
if ( is_404() && wm_option( 'p404-no-above-footer-widgets' ) )
	$aboveFooter = null;
//WooCommerce pages
	if ( class_exists( 'Woocommerce' ) && is_woocommerce() )
		$aboveFooter = null;
if ( $aboveFooter && is_active_sidebar( $aboveFooter ) && ! wm_meta_option( 'no-above-footer-widgets', $pageId ) ) {
	echo '<section id="above-footer" class="wrap clearfix above-footer-widgets-wrap' . wm_element_width( 'abovefooter' ) . '"><div class="wrap-inner">';
		wm_sidebar( $aboveFooter, 'widgets columns twelve pane', 5 ); //no restriction
	echo '</div></section>';
}
?>
<div class='wonderpluginslider'></div>
<?php do_action( 'wm_before_footer' ); ?>
<footer id="footer" class="wrap clearfix footer<?php echo wm_element_width( 'footer' ); ?>">
	<!-- FOOTER -->
	<?php
	if ( $footerRow && is_active_sidebar( $footerRow ) ) {
		echo '<section class="footer-widgets-wrap first"><div class="wrap-inner">';
			wm_sidebar( $footerRow, 'widgets columns twelve pane', 5 ); //restricted to 5 widgets
		echo '</div></section>';
	}
	?>
	<div class="bottom-wrap foot_tp_wrap clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="foot_tp testing">
						<?php
							if ( is_page_template( 'page-template/landing.php' ) )
								$menuLocationName = 'menu-landing-page-' . get_the_ID();
							else
								$menuLocationName = 'footer-menu';
							if ( ! is_page_template( 'page-template/construction.php' ) )
								wp_nav_menu( array(
										'theme_location'  => $menuLocationName,
										'menu'            => null,
										'container'       => null,
										'container_class' => null,
										'container_id'    => null,
										'menu_class'      => 'menu-footer',
										'menu_id'         => null,
										'echo'            => true,
										'fallback_cb'     => null,
										'before'          => null,
										'after'           => null,
										'link_before'     => null,
										'link_after'      => null,
										'items_wrap'      => '<div class="%2$s"><ul>%3$s</ul></div>',
										'depth'           => 1,
										'walker'          => ( has_nav_menu( $menuLocationName ) ) ? ( new wm_widget_walker() ) : ( null )
									) );
							$class = ( is_page_template( 'page-template/construction.php' ) ) ? ( 'text-center clearfix' ) : ( 'clearfix' );
							wm_credits( $class );
						?>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /bottom-wrap -->
	<div class="bottom-wrap foot_btm_wrap clearfix">
		<div class="container">
			<div class="foot_btm">
				<div class="our_footprints_section">
				<?php dynamic_sidebar('footer_worldwide_footprints'); ?>
					
				</div>
				<div class="security_content_area">
				<a href="//www.dmca.com/Protection/Status.aspx?ID=896e831b-16d2-4ef6-966f-06bc3ece4dd6" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/DMCA_badge_grn_100w.png?ID=896e831b-16d2-4ef6-966f-06bc3ece4dd6"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
				</div>
				<div class="our_certificates_section">
				<?php dynamic_sidebar('footer_accreditations_certifications'); ?>
					
				</div>
				<?php dynamic_sidebar('footer_bottom_text'); ?>
			</div>
		</div>
	</div> <!-- /bottom-wrap -->
</footer>
<!-- /footer -->
</div>


<div id="contact_modal" class="modal fade contact_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">	
		<button type="button" class="close z-indxng" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Have A One On One Interaction With Our Experts Now!</h4>
      </div>
      <div class="modal-body">
        <div class="form_wrap">
			<?php echo do_shortcode( '[contact-form-7 id="17809" title="pop_up_contact"]' ); ?>
		</div>
      </div>
    </div>
  </div>
</div>
<a href="#" id="new_tab_redirect" style="opacity:0;font-size:0;height: 0;display: inherit;">test</a>

<!--
<div class="slide-out-div" id="slideDive">
	<a id="handle1"></a>
	<div id="slideout_contact-inner"><?php echo do_shortcode('[contact-form-7 id="13776" title="fixed_contact_form"]'); ?></div>
</div>  -->
<?php do_action( 'wm_after_website' ); ?>
<!-- wp_footer() -->
<?php wp_footer(); //WordPress footer hook ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript" defer='defer'>
equalheight = function(container){

var currentTallest = 0,
currentRowStart = 0,
rowDivs = new Array(),
jQueryel,
topPosition = 0;
jQuery(container).each(function() {

jQueryel = jQuery(this);
jQuery(jQueryel).height('auto')
topPostion = jQueryel.position().top;

if (currentRowStart != topPostion) {
for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
rowDivs[currentDiv].height(currentTallest);
}
rowDivs.length = 0; // empty the array
currentRowStart = topPostion;
currentTallest = jQueryel.height();
rowDivs.push(jQueryel);
} else {
rowDivs.push(jQueryel);
currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
}
for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
rowDivs[currentDiv].height(currentTallest);
}
});
}

jQuery(window).on('load',function() {
equalheight('.repeat_list');
});


jQuery(window).resize(function(){
equalheight(' .repeat_list');
});





/* 
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56988ede87faab542680b4b8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})(); */
</script>
<script>


// Toggle Menu for Magento Page
jQuery(document).ready(function(){
	jQuery('.magentogetQuery').parents('body').addClass('magentogetQuery_parent');
 jQuery('.page_content_wrapper .fixme .grid_12').append('<span class="hambugerIconDiv"><b>Services Links</b></span>');
 jQuery('.hambugerIconDiv').on('click', function(){
  jQuery(this).parents('.page_content_wrapper  .fixme').find('ul').slideToggle();
 });
 
 jQuery(document).on('click', '.whtweareoffring .bannercontent a[href^="#"]', function (event) {
    event.preventDefault();
	var header_height_sticky = jQuery('header.sticky').outerHeight();
	var window_size = jQuery(window).width();
	if(header_height_sticky == null && window_size == 768){
		var header_height_sticky = 288;
		
	} else if(header_height_sticky != null && window_size == 768){
		var header_height_sticky = jQuery('header.sticky').outerHeight();
	} else {
		var header_height_sticky = 55;
	}
    jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top-header_height_sticky
    }, 500);
});
jQuery('a[data-toggle="modal"]').bind('contextmenu', function(e) {
    return false;
}); 
jQuery('a[data-toggle="modal"]').on('click', function(e) {
    jQuery('#spinner').hide();
});
});


</script>
<script>
	jQuery(window).on('load',function(){
		jQuery('.queryForm_parent form .captcha_field input[name*="captcha-3"]').attr('placeholder','Type Captcha')
	});
	jQuery(document).ready(function(){
		jQuery('.queryForm_parent form .captcha_field input[name*="captcha-3"]').attr('placeholder','Type Captcha')
	});
</script>
<?php global $post;
if($post->ID == 2064 || $post->ID == 18915){

?>
<script>
delete_cookie('form');
jQuery(document).ajaxComplete(function() {
  if (jQuery('.wpcf7-mail-sent-ok').length) {
	  document.cookie = "form=formsent;path=/";
   window.location.replace("https://www.orangemantra.com/thank-you/");
  }
});
var fixmeTop = jQuery('.fixme').offset().top;
jQuery(window).scroll(function() {
var currentScroll = jQuery(window).scrollTop();
if (currentScroll >= fixmeTop) {
jQuery('.fixme').css({
position: 'fixed',

left: '0'
});
} else {
jQuery('.fixme').css({
position: 'static'
});
}
});
</script>
<?php } ?>
<!--End of Tawk.to Script-->

<script>
   jQuery(document).ready(function() {
  jQuery.getJSON('http://ip-api.com/json', function(data) {
    // console.log(JSON.stringify(data, null, 2));
    var country = data.country;
    if(country == 'India'){
    var ip = data.query;
    alert(country+" "+ip);
    jQuery("#cf_lead_source_ip_address").val(ip);
  }
});
});
   // change select text in service type contact form
   jQuery('select[name=service_type] option:eq(1)').text('New Development');
   jQuery('select[name=service_type] option:eq(2)').text('Support & Maintenance');
    jQuery('.footerFomrcountweb select[name=service_type] option:eq(1)').text('New Development');
   jQuery('.footerFomrcountweb select[name=service_type] option:eq(2)').text('Support & Maintenance');
</script>



</body>
<?php if ( ! wm_option( 'general-website-author' ) ) echo '<!-- ' . wm_static_option( 'static-webdesigner' ) . ' -->'; ?>
</html>
