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
<?php do_action( 'wm_before_footer' ); ?>
<footer></footer>
</div>
<?php do_action( 'wm_after_website' ); ?>
<!-- wp_footer() -->
<?php wp_footer(); //WordPress footer hook ?>
<!--Start of Tawk.to Script-->

<script>
	jQuery(window).on('load',function(){
		jQuery('.queryForm_parent form .captcha_field input[name*="captcha-3"]').attr('placeholder','Type Captcha')
	});
	jQuery(document).ready(function(){
		jQuery('.queryForm_parent form .captcha_field input[name*="captcha-3"]').attr('placeholder','Type Captcha')
	});
</script>

<script>

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
	console.log(header_height_sticky);
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

</script>
<!--End of Tawk.to Script-->
<script>
jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

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
 //  jQuery('select[name=service_type] option:eq(1)').text('New Development');
 //  jQuery('select[name=service_type] option:eq(2)').text('Support & Maintenance');
  //  jQuery('.footerFomrcountweb select[name=service_type] option:eq(1)').text('New Development');
 //  jQuery('.footerFomrcountweb select[name=service_type] option:eq(2)').text('Support & Maintenance');
</script>

</body>
<?php if ( ! wm_option( 'general-website-author' ) ) echo '<!-- ' . wm_static_option( 'static-webdesigner' ) . ' -->'; ?>
</html>
