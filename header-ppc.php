<?php

/**

* @since    1.0

* @version  3.0

*/

if ( wm_option( 'general-gzip' ) )

	ob_start( 'ob_gzhandler' ); //Enable GZIP

	global $is_opera, $is_IE, $content_width;

	$browser    = '';

	if ( $is_opera )

		$browser  = ' browser-opera';

	if ( $is_IE )

		$browser  = ' ie';

		$blogLayout = ''; //global for archives and single posts

		$postId     = ( is_home() ) ? ( get_option( 'page_for_posts' ) ) : ( null );

		$isTopBar   = is_active_sidebar( 'top-bar-widgets' ) && ! ( ! is_archive() && ! is_search() && wm_meta_option( 'no-top-bar', $postId ) ) && ! is_page_template( 'page-template/landing.php' ) && ! is_page_template( 'page-template/construction.php' );

?>

<!doctype html>

<!--[if IE 8]>     <html class="ie ie8 lie9 lie8 no-js" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 9]>     <html class="ie ie9 lie9 no-js" <?php language_attributes(); ?>> <![endif]-->

<!--[if gt IE 9]><!--><html class="no-js<?php echo $browser; ?>" <?php language_attributes(); ?>><!--<![endif]-->

<head>
<meta name="robots" content="noindex, nofollow"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="http://orangemantranew.iotsolutionindia.com/wp-content/themes/lespaul-child/css/custom24-9-2018.css" rel ="stylesheet">   

 <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.css" rel="stylesheet">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <script>
        $(function(){
        $('.bxslider').bxSlider({
          captions: true,
          auto: true
      });
    });
    </script>
    	
    
	<!-- (c) Copyright <?php bloginfo( 'name' ); ?> -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- website title -->

	<title><?php wp_title( '', true ); ?></title>

	<?php if ( $meta_author = wm_option( 'general-website-author' ) ) : ?>

	<!-- website info -->

	<!-- <meta name="author" content="<?php //echo wm_option( 'general-website-author' ); ?>" /> -->

	<meta name="author" content="OrangeMantra - www.orangemantra.com" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<?php

	endif;

	if ( 'r940' === wm_option( 'general-width' ) || 'r1160' === wm_option( 'general-width' ) ) : ?>

	<!-- mobile viewport -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<?php

	endif;

	if ( $is_IE ) : ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!--[if lt IE 9]>

	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

	<script>window.html5 || document.write('<script src="<?php echo WM_ASSETS_THEME; ?>js/html5.js"><\/script>')</script>

	<?php

	$isProductPage = ( class_exists( 'Woocommerce' ) ) ? ( is_product() ) : ( false );

	if ( ( 'r940' === wm_option( 'general-width' ) || 'r1160' === wm_option( 'general-width' ) ) && ! $isProductPage ) :

	?>

	<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

	<?php

	endif;

	?>

	<![endif]-->

	<?php endif; ?>

	<!-- profile and pingback -->

	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


	<!-- css stylesheets -->

	<?php

	if ( wm_option( 'design-font-custom' ) )

		echo wm_option( 'design-font-custom' ) . "\r\n";

	?>

	<?php wm_favicon(); ?>

	<!-- wp_head() -->

	<?php wp_head(); ?>

	<!-- wp_head() end -->

	<?php if (is_page('1409')): ?>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgVyEUfV6TZtsLYULebghctqT0GgHdhQU&callback=initialize" type="text/javascript"></script>
    
 
	<script type="text/javascript">

	var locations = [

		['loan 4', -27.448088, 153.180379, 'Orange Mantra AU'],

		['loan 3', 51.507351, -0.127758, 'Orange Mantra UK'],

		['loan 5', -36.887194, 174.614185, 'Orange Mantra NZ'],

		['loan 1', 39.749361, -75.643331, 'Orange Mantra US'],

		['loan 2', 28.413857, 77.042178, 'Orange Mantra IND']

		];

	function initialize() {

		var myOptions = {

		center: new google.maps.LatLng(28.413857, 77.042178),

		zoom: 2,

		scrollwheel: false,

		mapTypeId: google.maps.MapTypeId.ROADMAP

		};

		var map = new google.maps.Map(document.getElementById("new_cstm_map"),

		myOptions);

		//console.log(map);

		setMarkers(map,locations)

	}

	window.onload = initialize;



	function setMarkers(map,locations){



	var marker, i



		for (i = 0; i < locations.length; i++){



						var loan = locations[i][0]



			var lat = locations[i][1]



			var long = locations[i][2]



			var add =  locations[i][3]



			latlngset = new google.maps.LatLng(lat, long);



			var marker = new google.maps.Marker({



				map: map, title: loan , position: latlngset



			});
			map.setCenter(marker.getPosition())
	<!-- var content = "Loan Number: " + loan +  '</h3>' + "Address: " + add  -->
	var content = '</h3>' + add
	var infowindow = new google.maps.InfoWindow()
	google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
	return function() {
	infowindow.setContent(content);
	infowindow.open(map,marker);
	};
	})(marker,content,infowindow));
	}
	}
	</script>
	<?php endif; ?>
	<!-- analytics code -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-20595591-1', 'auto');
	ga('send', 'pageview');
	</script>
       
        <script>
        jQuery('.count').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});

function getCookie(w){
	cName = "";
	pCOOKIES = new Array();
	pCOOKIES = document.cookie.split('; ');
	for(bb = 0; bb < pCOOKIES.length; bb++){
		NmeVal  = new Array();
		NmeVal  = pCOOKIES[bb].split('=');
		if(NmeVal[0] == w){
			cName = unescape(NmeVal[1]);
		}
	}
	return cName;
}
function delete_cookie(name) {
  document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
        </script>
<script>
jQuery(document).ready(function(){
	if (jQuery(".sidebar").length){
		jQuery(".sidebar_menu_dropdown > a").on("click", function(){
			jQuery(this).closest(".sidebar_menu_dropdown").siblings(".sidebar_menu_dropdown").removeClass("active");
			jQuery(this).closest(".sidebar_menu_dropdown").toggleClass("active");
			jQuery(this).closest(".sidebar_menu_dropdown").siblings(".sidebar_menu_dropdown").find(".sidebar_submenu").slideUp();
            jQuery(this).siblings(".sidebar_submenu").slideToggle("sidebar_menu_dropdown").removeClass("active");
            
            
		})
	}
});        
</script>
        

<style type="text/css">
	.wrap{background-color: transparent;}
</style>
        
</head>
<body id="top" <?php body_class(); ?>>
	<?php do_action( 'wm_before_website' ); ?>
	<?php
	//Background image fit browser window width
	if (
			( isset( $post ) || is_home() ) &&
			! is_search() && ! is_archive() &&
			wm_css_background_meta( 'background-' ) &&
			wm_meta_option( 'background-bg-img-fit-window', $postId )
		) {
		$imageURL      = wm_meta_option( 'background-bg-img-url', $postId );
		$imageURL      = ( ! is_array( $imageURL ) ) ? ( esc_url( $imageURL ) ) : ( esc_url( $imageURL['url'] ) );
		$imagePosition = ( 'fixed' === wm_meta_option( 'background-bg-img-attachment', $postId ) ) ? ( 'fixed' ) : ( 'absolute' );
		echo '<img src="' . $imageURL . '" alt="" style="position: ' . $imagePosition . '; width: 100%; left: 0; top: 0; z-index: -1;" />';
	}
	//TOP BAR
	if ( $isTopBar ) {
		$topbarClasses = '';
		if ( wm_option( 'header-top-bar-fixed' ) )
			$topbarClasses = ' fixed';
	echo "\r\n\r\n" . '<div id="top-bar" class="clearfix top-bar' . $topbarClasses . '"><div class="wrap' . wm_element_width( 'toppanel' ) . '"><div class="wrap-inner"><div class="twelve pane clearfix">' . "\r\n" . '<!-- TOP BAR -->' . apply_filters( 'wmhook_skip_link_navigation_html', "\r\n" . '<a class="invisible" href="#nav-main">' . __( 'Go to main navigation', 'lespaul_domain' ) . '</a>' . "\r\n" );
	wm_sidebar( 'top-bar-widgets', 'widgets', 2 ); //restricted to 2 widgets
	echo '<!-- /top-bar --></div></div></div></div>' . "\r\n\r\n\r\n";
	}
	//header classes
	$headerClasses  = '';
	$headerClasses .= ( wm_css_background( 'design-header-' ) ) ? ( ' set-bg' ) : ( '' );
	$headerClasses .= wm_option( 'header-navigation-position' );
	?>
	<div class="page-wrapper">
		
		<!-- <?php //do_action( 'wm_after_header' ); ?> -->
		<div id="content" class="wrap clearfix content<?php echo wm_element_width( 'content' ); ?>">
			<!-- CONTENT -->
			<?php do_action( 'wm_before_main_content' ); ?>