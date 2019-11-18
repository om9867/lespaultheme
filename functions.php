<?php
function footag_func($atts) {
return "foo";
}
add_shortcode('footag', 'footag_func');
function my_theme_enqueue_styles() {
$parent_style = 'wm-global';
    global $post;
$tmp = get_page_template_slug($post->ID);

wp_enqueue_script('custom-tab-js', get_stylesheet_directory_uri() . '/js/custom-tabs.js','',null,true);

if('template-solution.php' != $tmp) {
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css','','');
	wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/style.css','',null);
	wp_enqueue_style('custom-style-responsive', get_stylesheet_directory_uri() . '/css/style-responsive.css','',null);
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper.min.css','',null);
    wp_enqueue_style('staying-e-commerce-trends', get_stylesheet_directory_uri() . '/css/staying-e-commerce-trends.css','',null);
	wp_enqueue_style('new-custom-style', get_stylesheet_directory_uri() . '/css/new-style.css','',null);
	wp_enqueue_style('blog-style', get_stylesheet_directory_uri() . '/css/blog.css','',null);
	wp_enqueue_style('industries', get_stylesheet_directory_uri() . '/css/industries.css','',null);
	wp_enqueue_style('animate-style', get_stylesheet_directory_uri() . '/css/animate.css','',null);
	wp_enqueue_style('flipclock-style', get_stylesheet_directory_uri() . '/css/flipclock.css','',null);
	wp_enqueue_style('calender-style', get_stylesheet_directory_uri() . '/css/calender.css','',null);
	wp_enqueue_style('bug-style', get_stylesheet_directory_uri() . '/css/bug.css','',null);
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/css/fonts.css','',null);
	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js','',null,true);
	wp_enqueue_script('swipe-slide-js', get_stylesheet_directory_uri() . '/js/swiper.min.js','',null,true);
	wp_enqueue_script('flipclock-js', get_stylesheet_directory_uri() . '/js/flipclock.min.js','',null,true);
	wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.min.js','',null,true);
} else {   
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css','',null);
    wp_enqueue_style('solution_style', get_stylesheet_directory_uri() . '/css/solution-style.css','',null);
	wp_enqueue_style('solution-responsive', get_stylesheet_directory_uri() . '/css/solution-responsive.css','',null);
	wp_enqueue_script('bootstrap_min_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js','',null,true);
	wp_enqueue_script('owl_carousel_js', get_stylesheet_directory_uri() . '/js/owl.carousel.js','',null,true);
	wp_deregister_style( 'wm-global' );
}
	wp_enqueue_style('headerfooter', get_stylesheet_directory_uri() . '/css/headerfooter.css','',null);
	wp_enqueue_style('bootstrap_min_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css','',null);
	wp_enqueue_style('font_awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css','',null);
	wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/css/flaticon.css','',null);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('widgets_init', 'theme_slug_widgets_init');
function theme_slug_widgets_init() {
register_sidebar(array(
'name' => __('Services Sidebar', 'theme-slug'),
'id' => 'services_sidebar',
'description' => __('Widgets in this area will be shown on selected services pages.', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widget_title">',
'after_title' => '</h2>',
)
);
register_sidebar(array(
'name' => __('Country Pages Sidebar', 'theme-slug'),
'id' => 'country_sidebar',
'description' => __('Widgets in this area will be shown on selected services pages.', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widget_title">',
'after_title' => '</h2>',
)
);
register_sidebar(array(
'name' => __('marketing Pages Links', 'theme-slug'),
'id' => 'marketing_menubar',
'description' => __('Widgets in this area will be shown on selected services pages.', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widget_title">',
'after_title' => '</h2>',
)
);

 register_sidebar(array(
'name' => __('Footer Worldwide footprints', 'theme-slug'),
'id' => 'footer_worldwide_footprints',
'description' => __('Widgets in this area will be shown on selected services pages.', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget_title">',
'after_title' => '</h4>',
)
);

register_sidebar(array(
'name' => __('Footer Accreditations and Certifications', 'theme-slug'),
'id' => 'footer_accreditations_certifications',
'description' => __('Widgets in this area will be shown on selected services pages.', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget_title">',
'after_title' => '</h4>',
)
);

register_sidebar(array(
'name' => __('Footer Bottom Text', 'theme-slug'),
'id' => 'footer_bottom_text',
'description' => __('Widgets in this area will be shown on selected services pages.', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget_title">',
'after_title' => '</h4>',
)
); 

}
function getportfolioimages_func($atts) {
    global $wpdb;
    $prefix = $wpdb->base_prefix;
    $query = "SELECT object_id FROM ".$prefix."term_relationships tr left join ".$prefix."term_taxonomy tt on tr.term_taxonomy_id=tt.term_taxonomy_id left join ".$prefix."terms t on t.term_id=tt.term_id left join ".$prefix."posts p on p.ID=tr.object_id where t.slug='".$atts["category"]."' and p.post_status='publish'";
    $result = $wpdb->get_results($query);
    $html = '<div class="swiper_container"><div class="swiper-wrapper">';
    if ($result) {
        foreach ($result as $row) {
        $html .= '<div class="swiper-slide" id="'.$row->object_id.'">'.get_the_post_thumbnail($row->object_id, array(520,0)).'</div>';
        }
    }
    $html .= '</div><div class="swiper-pagination"></div><div class="swiper-button-next"></div><div class="swiper-button-prev"></div></div>';
    return $html;
}
add_shortcode('portfolio-image', 'getportfolioimages_func' );
function getfeedsfunc($atts){
    $rss = new DOMDocument();
    $rss->load("https://www.orangemantra.com/blog/category/".$atts['category']."/feed/");
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
    }
    $html = '<div id="recent-news-carousel-'.$atts['category'].'" class="carousel slide" data-ride="carousel" data-interval="false">';
    $html .= '<div class="carousel-inner" role="listbox"  data-aos="fade-up">';
    for ($x = 0; $x < count($feed); $x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $description = $feed[$x]['desc'];
        $date = date('l F d, Y', strtotime($feed[$x]['date']));
        $imgpattern = '/src="(.*?)"/i';
        preg_match($imgpattern, $description, $matches);
        $image = @$matches[1];
            $widthpattern = '/width="(.*?)"/i';
        preg_match($widthpattern, $description, $matches);
        $width = @$matches[1];
            $heightpattern = '/height="(.*?)"/i';
        preg_match($heightpattern, $description, $matches);
            $height = @$matches[1];
        $active = ($x == 1) ? 'active':'';
        $str = "-".$width."x".$height;
        $full_image = str_replace($str,'',$image);
        //    $str_matches = [];
        preg_match_all('#<p>(.*?)<\/p>#', $description, $str_matches);
        $str_matches = $str_matches[1];
        $title = (strlen($title) <= 50) ? $title:substr($title,0,50).'...';
        $html .= '<div class="item '.$active.'">';
        $html .= '<div style="background-image:url('.$full_image.')" class="post-img"></div>';
        $html .= '<h3><a href="' . $link . '">' . $title . '</a></h3>';
        $html .= '<p>' . $date . '</p>';
        $html .= '</div>';
    }
    $html .= '</div><a class="left carousel-control" href="#recent-news-carousel-'.$atts['category'].'" role="button" data-slide="prev"><span class="fa fa-angle-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#recent-news-carousel-'.$atts['category'].'" role="button" data-slide="next"><span class="fa fa-angle-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
    $html .= '</div>';
    return $html;
}
add_shortcode('get-post-feeds', 'getfeedsfunc' );
function getchildpagesfunc($atts){
    $args = array(
    'sort_order' => 'asc',
        'sort_column' => 'post_title',
    'parent' => $atts['parent'],
    'exclude_tree' => '',
    'number' => 4,
    'offset' => 0,
    'include' => array($atts['page-1'],$atts['page-2'],$atts['page-3'],$atts['page-4']),
    'post_type' => 'page',
    'post_status' => 'publish'
    );
    $pages = get_pages($args);
    $html = '';
    $x = 0;
    foreach($pages as $page){
        $link = get_permalink($page->ID);
        $image = get_the_post_thumbnail_url($page->ID);
		$pagetitle= get_the_title($page->ID);
		$pagetag= "web development for $pagetitle";
        $tagline = get_post_meta($page->ID,'page-tag',true);
        $delay = ($x %2 ==0) ? 200:400;
        $html .= '<div class="col-sm-6 plr30">';
        $html .= '<div class="single_technology">';
        $html .= '<div class="row"><div class="col-sm-6">';
        $html .= '<img src="'.$image.'" alt="'.$pagetag.'" class="aligncenter size-full wp-image-86" width="253" height="139"/>';
        $html .= '</div><div class="col-sm-6"><h4 class="service_title">'.$page->post_title.'</h4>';
            $html .= '<p class="service_desc">'.$tagline.'</p>';
        $html .= '<div class="service_overlay"><a href="'.$link.'">Read More <i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>';
        $html .= '</div></div></div></div>';
        $x++;
    }
    return $html;
}
add_shortcode('get-child-pages', 'getchildpagesfunc' );
function getcustomfieldpagesfunc($atts){
    $args = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => 16,
    'order' => 'ASC',
    'orderby' => 'menu_order' ,
    'meta_key' => $atts['custom-field'],
    'meta_value' => $atts['custom-value']
    );
    $html = '';
    $x = 0;
    $myPages = new WP_Query($args);
    while ($myPages->have_posts()) : $myPages->the_post();
        $id = get_the_ID();
        $link = get_permalink($id);
        $image = get_the_post_thumbnail_url($id);
        $tagline = get_post_meta($id,'page-tag',true);
        $delay = ($x %2 ==0) ? 200:400;
        $html .= '<div class="col-sm-6 plr30">';
        $html .= '<div class="single_technology">';
        $html .= '<div class="row"><div class="col-sm-6">';
        $html .= '<img src="'.$image.'" alt="'.get_the_title($id).'" class="aligncenter size-full wp-image-86" width="253" height="139" />';
        $html .= '</div><div class="col-sm-6"><h4 class="service_title">'.get_the_title($id).'</h4>';
        $html .= '<p class="service_desc">'.$tagline.'</p>';
		if($id == 15971 || $id == 15975) {
		}
		else {
			$html .= '<div class="service_overlay"><a href="'.$link.'">Read More <i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>';
		}
        $html .= '</div></div></div></div>';
        $x++;
    endwhile;
    wp_reset_postdata();
    return $html;
}
add_shortcode('get-custom-pages', 'getcustomfieldpagesfunc' );
function getpostsliderfunc($atts){
    $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name'  => $atts['category'],
    'order' => 'asc',
    'orderby' => 'post_title',
    'posts_per_page'   => -1,
    );
    $posts = get_posts($args);
    $html = '';
    $x = 0;
    $html = '<div id="carousel-example-generic-'.$atts['category'].'" class="carousel slide" data-ride="carousel">';
    $html .= '<div class="carousel-inner" role="listbox">';
    foreach($posts as $post){
        $active = ($x == 1) ? 'active':'';
        $image = get_the_post_thumbnail_url($post->ID);
        $image2 = get_the_post_thumbnail($post->ID);
        $tagline = get_post_meta($post->ID,'page-tag',true);
        $html .= '<div class="item '.$active.'"><div class="row"><div class="col-sm-8">';
        $html .= '<h3 class="app-title">'.$post->post_title.'<span>'.$tagline.'</span></h3>';
        $html .= '<p class="app-desc">'.$post->post_content.'</p>';
        $html .= '<ul class="app-store-btn list-unstyled"><li class="google-play"><label class="sr-only">Goggle play</label></li>';
        $html .= '<li class="apple-store"><label class="sr-only">Apple Store</label></li></ul></div>';
        $html .= '<div class="col-sm-4">'.$image2.'</div></div></div>';
        // $html .= '<div class="col-sm-4"><img class="img-responsive" src="'.$image.'" width="325" height="331" alt="" /></div></div></div>';
        $x++;
    }
    $html .= '</div><a class="left carousel-control" href="#carousel-example-generic-'.$atts['category'].'" role="button" data-slide="prev"><span class="fa fa-angle-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic-'.$atts['category'].'" role="button" data-slide="next"><span class="fa fa-angle-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
    $html .= '</div>';
    return $html;
}
add_shortcode('get-posts-slider', 'getpostsliderfunc' );

function getpostappfunc($atts){
    $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name'  => $atts['category'],
    'order' => 'DESC',
    'orderby' => 'publish_date',
    'posts_per_page'   => -1,
    );
    $posts = get_posts($args);
    $html = '';
    $x = 0;
    $html = '<div class="portfolio-app-list">';
    foreach($posts as $post){
        $image = get_the_post_thumbnail_url($post->ID);
        $image2 = get_the_post_thumbnail($post->ID);
        $tagline = get_post_meta($post->ID,'page-tag',true);
        $html .= '<div class="portfolio-single-app clearfix" data-aos="fade-up" data-aos-duration="3000">';
        $html .= '<div class="row flex">';
        $html .= '<div class="col-sm-6 cols_left">';
        $html .= '<h3 class="app-title">'.$post->post_title.'<span>'.$tagline.'</span></h3>';
        $html .= '<p class="app-desc">'.$post->post_content.'</p>';
        $html .= '</div>';
        $html .= '<div class="col-sm-6 cols_right">'.$image2.'</div>';
        $html .= '</div>';
        $html .= '</div>';
        $x++;
    }
    return $html;
}
add_shortcode('get-posts-app', 'getpostappfunc' );

//Funtions to get recent blog section

function getrecentblogfunc(){
	ob_start();
	include(WP_CONTENT_DIR . '/themes/lespaul-child/template-demo.php');
	$output = ob_get_clean();
	return $output;
}

add_shortcode( 'get-recent-blogs', 'getrecentblogfunc' );

// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Orange Mantra';
}

/* send career form data to hr portal and sale portel*/
function cfdbFilterSaveFile($formData)
{
    // CHANGE THIS: CF7 form name you want to manipulate
     $formName1 = 'Resume Form'; 
    $formName3 = 'get_in_touch'; 
    $formName2 = 'request a quote'; 
 
    // CHANGE THIS: upload field name on your form
    
	$uploaddir = '/var/www/html/wp-content/uploads/wpcf7_file/';
	/* if($formData->title==$formName2){
		$fieldName = 'file-827'; 
		$formCopy = clone $formData;
        $path = pathinfo($formCopy->uploaded_files[$fieldName]);
		$time = time();
		mkdir($uploaddir."/".$time, 0777);
        $newfile = $uploaddir."/".$time.'/'.$path['basename'];
		copy($formCopy->uploaded_files[$fieldName], $newfile);
		$formCopy->posted_data[$fieldName] = $newfile; 
		// 'resume_file' => home_url().'/wp-admin/admin-ajax.php?action=cfdb-file&s='.$formData->submit_time.'&form='.urlencode(trim($formData->title)).'&field=file-41' 
	
		
		
		$data = array(
                'user_name' => $formData->posted_data['your-name'],
				'user_email' => $formData->posted_data['your-email'],
                'skypeid' => $formData->posted_data['your-skype'],
                'user_mgs' => $formData->posted_data['your-message'],
                'source' => $_SERVER['HTTP_HOST'],
                'phone' =>$formData->posted_data['tel-no'],
                'attachment' => home_url().'/wp-content/uploads/wpcf7_file/'.$time.'/'.$path['basename']
        );
		$headers = array('Content-Type: application/json');
		 $url = 'http://demo3.1hour.in/index.php/emaillist/emaildata/curl_data'; 
		$curl = curl_init();
		curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $url,
				CURLOPT_USERAGENT => 'Codular Sample cURL Request',
				CURLOPT_POST => 1,
				CURLOPT_POSTFIELDS => $data
		));
		curl_exec($curl);
	} */
	
	
	
	if($formData->title==$formName1){
		$fieldName = 'user_file'; 
		$formCopy = clone $formData;
        $path = pathinfo($formCopy->uploaded_files[$fieldName]);
		$time = time();
		mkdir($uploaddir."/".$time, 0777);
        $newfile = $uploaddir."/".$time.'/'.$path['basename'];
		copy($formCopy->uploaded_files[$fieldName], $newfile);
		$formCopy->posted_data[$fieldName] = $newfile; 
		/* 'resume_file' => home_url().'/wp-admin/admin-ajax.php?action=cfdb-file&s='.$formData->submit_time.'&form='.urlencode(trim($formData->title)).'&field=file-41' */
		$data = array(
                'first_name' => $formData->posted_data['emp_name'],
				'email' => $formData->posted_data['emp_email'],
                'company_name' => '',
                'position_applied_for' => $formData->posted_data['emp_pos'],
                'message' => $formData->posted_data['user_msg'],
                'created_on' => date('Y-m-d H:i:s'),
                'source' => $_SERVER['HTTP_HOST'],
                'contact_number' =>$formData->posted_data['emp_phone'],
                'resume_file' => home_url().'/wp-content/uploads/wpcf7_file/'.$time.'/'.$path['basename']
        );
		$headers = array('Content-Type: application/json');
		$url = 'http://demo13.1hour.in/applications/curl_data';
		$curl = curl_init();
		curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $url,
				CURLOPT_USERAGENT => 'Codular Sample cURL Request',
				CURLOPT_POST => 1,
				CURLOPT_POSTFIELDS => $data
		));
		curl_exec($curl);
	}
	return $formData;
}
 
add_filter('cfdb_form_data', 'cfdbFilterSaveFile'); 


function get_latest_blog_feeds(){
    $rss = new DOMDocument();
    $rss->load("https://www.orangemantra.com/blog/feed/");
    $feed = array();
    $i=0;
    foreach ($rss->getElementsByTagName('item') as $node) { $i++;
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
    if ($i==3) { break; }
    }
    return $feed;
}
// Hooking up our functions to WordPress filters
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 ); 
function delete_post_type(){
  unregister_post_type( 'wm_staff' );
  unregister_post_type( 'wm_price' );
  unregister_post_type( 'wm_faq' );
  unregister_post_type( 'wm_modules' );
}
add_action('init','delete_post_type', 100);

add_image_size('new_verticals_thumbnails',212,140,true);


add_action( 'wp_footer', 'redirect_cf7' );
 
function redirect_cf7() {
?>
<script type="text/javascript">
var id;
jQuery(document).ready(function(){
jQuery(document).on("click", ".contactcallaction a", function() {
    id = jQuery(this).parents('.diyaonlineCase').attr("data-url");
	jQuery('#new_tab_redirect').attr('href',id);
});
jQuery(document).on("click", "i[data-dismiss='modal'],#close", function() {
		jQuery('input,textarea').not('input[type="submit"]').val('');
		jQuery(".footerFomrcount form").trigger('reset'); 
		jQuery('#spinner').hide();
	
});
});

	jQuery( ".footerFomrcount form" ).submit(function( event ) {
		console.log(2);
  jQuery('#spinner').show();
});
document.addEventListener( 'wpcf7invalid', function( event ) {
   jQuery('#spinner').hide();
   jQuery('.user_file .wpcf7-not-valid-tip').parents('.choose_field').find('.file-support').addClass('file_support_error');
}, false );
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	jQuery('#spinner').show();
   if ( '19639' == event.detail.contactFormId ) { // Sends sumissions on form to the respective page
	jQuery('#new_tab_redirect')[0].click();
    } 
}, false );

</script>
<?php
}


function help4cms_wpcf7_form_elementss($html)
	{
		function help4cms_replace_include_blank($name, $text, &$html)
			{
				$matches = false;
				preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);
				if ($matches)
					{
						$select = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $matches[0]);
						$html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);
					}
			}
 
		help4cms_replace_include_blank('service_type', 'Service Type', $html); // Chnage here your dropdown menu ID
		help4cms_replace_include_blank('category', 'Category Type', $html); // Chnage here your dropdown menu ID
		return $html;
	}
 
//add_filter('wpcf7_form_elements', 'help4cms_wpcf7_form_elementss');
 
 
 

add_filter( 'wpcf7_validate_text', 'custom_website_validation_filter', 20, 2 );
function custom_website_validation_filter( $result, $tag ) {
  if ( $tag->name == 'website' ) {

    $domain = isset( $_POST['website'] ) ? trim( $_POST['website'] ) : '';
	$domain = preg_replace('#^https?://#', '', $domain);
    if ( ! checkdnsrr($domain, 'ANY') && $domain ) { // Check DNS records corresponding to a given Internet host name or IP address
      $result->invalidate( $tag, "Not a valid website url?" );
    }
  }
  return $result;
}



function check_country_by_ip(){
$add = '';
$IPaddress  =  $_SERVER["REMOTE_ADDR"];
  $json = file_get_contents("https://geoip-db.com/json/{$IPaddress}");
    $data = json_decode($json);
    // print_r($data);
    $add = '';
    if($data->country_code != 'IN'){ 
     $add = $data->IPv4;

 }
return $add;
}


add_filter( 'wpcf7_validate_select*', 'custom_text_validation_filter', 20, 2 );
add_filter( 'wpcf7_validate_select', 'custom_text_validation_filter', 20, 2 );

function custom_text_validation_filter( $result, $tag ) {

$add = check_country_by_ip(); 
    if ( 'cf_hourly_limit' == $tag->name  && $_POST['service_type'] == 'Support & Maintenance' && $_POST['cf_hourly_limit'] == '') {
$result->invalidate($tag, "The field is required." );
}
if ( ('budget' == $tag->name && $_POST['service_type'] == 'New Development' && $_POST['budget'] == '' && $add == '') || ('budget' == $tag->name && $_POST['service_type'] == '' && $_POST['budget'] == '' && $add == '')) {
$result->invalidate($tag, "The field is required." );
}
if ( ('cf_budget' == $tag->name && $_POST['service_type'] == 'New Development' && $_POST['cf_budget'] == '' && $add != '') || ('cf_budget' == $tag->name && $_POST['service_type'] == '' && $_POST['cf_budget'] == '' && $add != '')) {
$result->invalidate($tag, "The field is required." );
}

    return $result;
}


function itsme_disable_feed() {
 wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}

add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);


function no_frame_headers()
{
    header( "X-Frame-Options: DENY", true );
    header( "Content-Security-Policy: frame-ancestors 'none'", true );
}

add_action( 'login_init',        'no_frame_headers', 1000 );
add_action( 'admin_init',        'no_frame_headers', 1000 );
add_action( 'template_redirect', 'no_frame_headers', 1000 );


function industies_automotive_menu(){
	return '
                    <div class="automotive_home_services_list">
                        <ul>
                           <li><a href="/industries/automotive/connected-cars">Connected & Internet Cars</a></li>
                            <li><a href="/industries/automotive/smart-bikes">Smart Bikes</a></li>
                            <li><a href="/industries/automotive/vehicle-telematics">Telematics</a></li>
                            <li><a href="/industries/automotive/adas">Autonomous & ADAS</a></li>
                            <li><a href="/industries/automotive/ai-and-machine-learning">AI & Machine Learning</a></li>
                            <li><a href="/industries/automotive/navigation-mapping">Navigation & Mapping</a></li>
                            <li><a href="/industries/automotive/iot-embedded-systems">IoT & Embedded Solutions</a></li>
                            <li><a href="/industries/automotive/human-machine-interface">HMI</a></li>
                            <li><a href="/industries/automotive/security">Security </a></li>
                        </ul>
                    </div>';
}
add_shortcode('industies_automotive_menu','industies_automotive_menu');







function shopify_pages_menu(){
    return '
                     <section class="navbar-main retail_nav shopify_nav">
    <div class="container">
      <div class="navbar-title">
        <h2>Services</h2>
      </div>
      <nav id="fixed-navbar" style="background:#98BF4A;">
        <ul class="list-unstyled retail_nav_items">
          <li class=""><a href="/shopify-store-setup-configuration">Store Setup & Configuration</a></li>
          <li><a href="#">Theme Design & Customization</a></li>
          <li><a href="/shopify-integration">Shopify Integration</a></li>
          <li><a href="/shopify-migration">Shopify Migration</a></li>
          <li><a href="/shopify-app-development">App Development</a></li>
          <li><a href="/shopify-plus-development">Shopify Plus Development</a></li>
          <li><a href="#">Maintenance & Support</a></li>
        </ul>
      </nav>
    </div>
  </section>';
}
add_shortcode('shopify_pages_menu','shopify_pages_menu');