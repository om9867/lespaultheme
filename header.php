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
<!-- Facebook Pixel Code -->
<meta name="robots" content="noindex, nofollow"/>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2374661609222381');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2374661609222381&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php echo get_field('head_script'); ?>
<?php if(get_the_ID() == 14549) { ?>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='40789109-4',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
<?php } ?>
	<!-- (c) Copyright <?php bloginfo( 'name' ); ?> -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- website title -->

	<title><?php wp_title( '', true ); ?></title>

	<?php if ( $meta_author = wm_option( 'general-website-author' ) ) : ?>

	<!-- website info -->

	<!-- <meta name="author" content="<?php //echo wm_option( 'general-website-author' ); ?>" /> -->

	<meta name="author" content="OrangeMantra - www.orangemantra.com" />

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

	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet"> -->

	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">

	<!-- css stylesheets -->

	<?php

	if ( wm_option( 'design-font-custom' ) )

		echo wm_option( 'design-font-custom' ) . "\r\n";

	?>

	<?php wm_favicon(); ?>

	<!-- wp_head() -->
<meta name="msvalidate.01" content="4B6CF145720A7FCB09BBDDD4E2D0198F" />
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
	<?php global $post; 
	$page_id = $post->ID;
	if($page_id == 23 || $page_id == 5 || $page_id == 1983 || $page_id == 1953 || $page_id == 2205){
	?>
	<script>
(function(h,e,a,t,m,p) {
m=e.createElement(a);m.async=!0;m.src=t;
p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
})(window,document,'script','https://u.heatmap.it/log.js');
</script>
	<?php } ?>
	<script>
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

   function removeEvents() {
        window.removeEventListener('scroll', sendInteractionEvent);
    }
    function sendInteractionEvent() {
        ga('send', 'event', 'Page Interaction');
        removeEvents();
    }
    window.addEventListener('scroll', sendInteractionEvent); 
        </script>
		<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0083/0328.js" async="async"></script>
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
		<header id="header" class="clearfix nav-down header<?php echo $headerClasses; ?>"><div class="wrap<?php wm_element_width( 'header', true ); ?>"><?php //Header has to be done this way for option of fixed header ?>
			<?php
			if ( ! is_page_template( 'page-template/construction.php' ) && ' nav-top' === wm_option( 'header-navigation-position' ) )
				//display only when top navigation header layout used and not Under construction template
				get_template_part( 'nav' );
			?>
			<?php do_action( 'wm_before_header' ); ?>
			<!-- HEADER -->
			<div class="wrap-inner">
				<div class="twelve pane clearfix">
					<?php wm_logo(); ?>
					<div class="yrs15"><img src="<?php echo site_url();?>/wp-content/uploads/2017/06/15yrs.png" alt="orangemantra 15yrs experience in IT world" width="65" height="65"></div>
					<div class="visible-xs-block clearfix"></div>
					<!--<div class="whatsapp_no"><a href="https://api.whatsapp.com/send?phone=918826132108" target="_blank" class="whatsapp-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/whatsapp_1.png" alt="orangemantra whatsapp number"></a></div>-->
					<!--<div class="head_call_us">
						<span>
							<a href="tel:+919870289050" class="om_color">(IND) +91-9870289050</a>
							<a href="tel:+16808001190" class="om_color">(US) +16808001190</a>
						</span> 
					</div> -->
					<?php
					if (! in_array( wm_option( 'header-navigation-position' ), array( ' nav-right', ' nav-left', ' nav-bottom logo-centered' ) ) ||
							is_page_template( 'page-template/construction.php' ) ||
							( is_page_template( 'page-template/landing.php' ) && ! has_nav_menu( 'menu-landing-page-' . get_the_ID() ) )
						) {
						//Header right area (display only when rich (normal) header layout used)
						$headerText = wm_option( 'header-right' );
						$headerText = ( ' ' == $headerText ) ? ( '' ) : ( $headerText );
						if ( is_page_template( 'page-template/landing.php' ) )
							$headerText = wm_meta_option( 'landing-header-right' );
						if ( is_page_template( 'page-template/construction.php' ) )
							$headerText = wm_meta_option( 'construction-header-right' );
						$replaceArray = array(
							'(r)'    => '&reg;',
							'(R)'    => '&reg;',
							'(tm)'   => '&trade;',
							'(TM)'   => '&trade;',
							'YEAR'   => date( 'Y' ),
							'SEARCH' => get_search_form( false )
						);
						$headerText = strtr( $headerText, $replaceArray );
						if ( $headerText )
							echo '<div class="header-side">' . apply_filters( 'wmhook_skip_link_navigation_html', '<a class="invisible" href="#nav-main">' . __( 'Go to main navigation', 'lespaul_domain' ) . '</a>' ) . '<div class="header-side-content">' . do_shortcode( $headerText ) . '</div></div>';
					} else {
						if ( ' nav-bottom logo-centered' !== wm_option( 'header-navigation-position' ) )
							get_template_part( 'nav' );
					}
					?>
				</div>
				</div> <!-- /wrap-inner -->
				<?php
				if ( ! is_page_template( 'page-template/construction.php' ) && in_array( wm_option( 'header-navigation-position' ), array( ' nav-bottom', ' nav-bottom logo-centered' ) ) )
					//display only when bottom navigation header layout used and not Under construction template
					get_template_part( 'nav' );
				?>
				</div><!-- /header --></header>
				<?php
				$subheading = wm_meta_option( 'no-heading', $post->ID );
				//var_dump($subheading);
				if(!is_page( array( 8, 1279, 1300, 1386, 1397, 1403, 1415, 1520, 1916, 1918, 1920, 1922, 1924, 1926, 1928, 1930, 1932, 1934, 1936, 1938, 1944, 2015, 2067, 2205, 13897, 13927, 13947, 14200, 14344, 14346, 1372, 14437, 14505, 14435, 14481, 14497, 14511, 14549, 14555, 14559, 14561, 14566, 14569, 14571, 14433, 14456, 14447, 14458, 14463, 14472, 14479, 14495, 14501, 14488, 14493, 14722, 14508, 14469, 14503, 14564, 15081, 15077, 15104, 15089, 15091, 15095, 15101, 15093,16760,17650,17657,17659,17661,1309,17665,17667,17669,17761,17932, 17374, 17404, 17663, 17324, 553, 17351,18244 ,560 ,17530 ,405 ,13858 ,17671 ,17469,17483 ,17361 ,1983, 16804, 18706, 18712, 19368)))
					
					{
					if(!$subheading){
					do_action( 'wm_after_header' );
					}
					}

				?>
				<!-- <?php //do_action( 'wm_after_header' ); ?> -->
				<div id="content" class="wrap clearfix content<?php echo wm_element_width( 'content' ); ?>">
					<!-- CONTENT -->
					<?php do_action( 'wm_before_main_content' ); ?>