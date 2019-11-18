<?php
/*
Template Name: Vertical
*/
?>
<?php get_header('solution'); ?>
<?php 
  if(have_posts()):
    while(have_posts()):
      the_post();
      remove_filter( 'the_content', 'wpautop' ); 
      the_content();
    endwhile;
  endif; 
?>
<!--<section class="verticals_btm1 featured-app">
<div class="container">
<div class="row">
<div class="col-sm-12 section-head">
<h3 class="section_heading gradient-brd-btm">Some of Our Featured Apps</h3>
</div>
<div class="col-sm-12">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">           
<div class="carousel-inner" role="listbox">
<div class="item active">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Pocket Pandit <span>Fusion of Technology & Spirituality</span></h3>
<p class="app-desc">The android and iOS app was rightly released during the Chaitra Navaratri, 2016, and has reached millions of people. It is a sacred chant on Durga Saptashati recited by Acharya Ramanuj Ji for spiritual growth leading to karmic nullification. One may easily download the app owing to its compressed streaming and size; security; create a favorite playlist and listen without ads interruption.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/pocketp-295x300.png" alt="pocket pandit application" width="295" height="300" class="img-responsive aligncenter size-medium wp-image-142" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">M Teacher<span>Search Your Locality Teacher</span></h3>
<p class="app-desc">The parents of Gurgaon, Haryana may download the app, search for private tuition teachers in their locality. They can have a quick view of the teacher's profile, calculate commuting distance, look for commuting facility and select the best suitable teacher for their wards.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/teacher-295x300.png" alt="teacher find application" width="295" height="300" class="aligncenter size-medium wp-image-145" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">SRS Grocery<span>Online Grocery Store</span></h3>
<p class="app-desc">An online grocery store that operates in Delhi-NCR for delivering grocery at your doorstep. Simply log on to the website, choose your products, add them to your cart, proceed to checkout, followed by the payment done.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/srs-295x300.png" alt="SRS application" width="295" height="300" class="aligncenter size-medium wp-image-144" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Church Blaze<span>Christian community</span></h3>
<p class="app-desc">Churchblaze stands tall in Christian Social Media community. Their website and mobile applications cover an approx. of 1 lakh users who are interconnected globally with a common faith. Further, it’ s has become a global leader with more than 1000 churches under its hood. Moreover, it has a virtual marketplace, blogs, forums, online bible, chat facility, and, etc., to keep people connected.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/church-295x300.png" alt="church blaze application" width="295" height="300" class="aligncenter size-medium wp-image-132" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Armada International<span>The Publishing House</span></h3>
<p class="app-desc">Armada is a Thailand based WP site in Publishing. Media Transasia Group publishers of Armada International are one of most diversified and vertically integrated publishing houses across the globe. The gamut of publishing activities includes conceptualizing new publications, from editorial and design to printing.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/armada-295x300.png" alt="armada application" width="295" height="300" class="aligncenter size-medium wp-image-127" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">China Southern Airlines<span>Booking Management</span></h3>
<p class="app-desc">The app facilitates the team members to manage the flights, its arrival or the departure details, enlisted passengers, actual travelling passengers, food orders, and other required things during the flight journey so as to make a perfect ground facilities in short compass of time.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/china-airlines-295x300.png" alt="china airlines application" width="295" height="300" class="aligncenter size-medium wp-image-131" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Flash Light Tourch<span>The Brightest Torch Ever In Mobile</span></h3>
<p class="app-desc">The app is simple and user-friendly. It uses the phone screen as the brightest torch with defined colours. It facilitate the users to switch on/off the flash led instantly and thus, turn the device into a bright flash light.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/flash-light-295x300.png" alt="flash light tourch application" width="295" height="300" class="aligncenter size-medium wp-image-137" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Gyanshree School<span>The Best School In Noida</span></h3>
<p class="app-desc">A website made in WordPress in the field of Education. They believe to achieve excellence, Gyanshree will offer stimulating environment, set opportunities to broaden horizons and facilitate building of knowledge and skills, in an effortless manner for children and teachers thereby creating a learning institution.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/gyanshree-295x300.png" alt="gyanshree school application" width="295" height="300" class="aligncenter size-medium wp-image-138" /></div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">User Friendly Resources<span>By Teacher For The Teacher</span></h3>
<p class="app-desc">User Friendly Resources (UFR) is a leading firm, which has its own repository of supplementary curriculum and teacher support materials. Over the past 25 years, UFR has been successful in establishing its strong image for developing and providing creative, innovative, and engaging materials.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/userfriendly-295x300.png" alt="user friendly resources application" width="295" height="300" class="aligncenter size-medium wp-image-146" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Flash Notification<span>Enhance Your Phone Functionality</span></h3>
<p class="app-desc">The app enhances the functionality of the phone through flash notification on receiving sms or calls. Moreover, when the phone is in vibration/silent mode, the user has choice to set or choose the notification as a flash blink or specified number of blinks.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/flash-295x300.png" alt="flash notification application" width="295" height="300" class="aligncenter size-medium wp-image-136" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Andre Lani Custon Clothier<span>Get A Great Custom Suit</span></h3>
<p class="app-desc">It is a Retail Apparel store made in Word Press. They have 40 years of experience and have created lasting professional relationships. It is an end product of an ability to transform transnational satisfaction into long term loyalty.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/andre-295x300.png" alt="Custon Clothier application" width="295" height="300" class="aligncenter size-medium wp-image-126" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">BAT Tech<span>The IT Support And Repairs</span></h3>
<p class="app-desc">The Sydney people are priviliged by the Bat Tech i-solutions. They can avail support and repair services for their Laptop, Computer NoteBook, iPhone, iPad, and other electronic gadgets from anywhere anytime through their simple and interactive apps.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/battech-295x300.png" alt="bat tech application" width="295" height="300" class="aligncenter size-medium wp-image-128" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Blaze Bay<span>The Virtual Marketplace</span></h3>
<p class="app-desc">Blazebay, the virtual market place simulates the experience of a physical market place. It is linked to the christian community, the Churchblaze where one can advertise, sell and buy products and services through their app.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/blazebay-295x300.png" alt="blazebay application" width="295" height="300" class="aligncenter size-medium wp-image-130" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">CIOL<span>The News At Your Fingertips</span></h3>
<p class="app-desc">It is the determined destination for top vendors and the IT professionals to get acquainted with business technology news. The download of their app eases the browsing of the website at convenient time.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/ciol-295x300.png" alt="ciol application" width="295" height="300" class="aligncenter size-medium wp-image-133" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Coach Revolution<span>Make Life Better</span></h3>
<p class="app-desc">The Coach Revolution helps one to get acquainted with more knowledge in the field of Psychology and personal development. In addition, one may create their own network with the people of like mindedness, clients, or the coaches and interact with each other at convenient time slots.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/coach-295x300.png" alt="coach revolution application" width="295" height="300" class="aligncenter size-medium wp-image-134" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Diva<span>The NY Collection</span></h3>
<p class="app-desc">Diva, the popular online store for fashion wears in New York has an user-friendly application through which the fashion trendsetters can shop easily by downloading their mobile app.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/diva-295x300.png" alt="diva collection application" width="295" height="300" class="aligncenter size-medium wp-image-135" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Luxoutnet<span>Online Designer Shop</span></h3>
<p class="app-desc">The e-commerce app of Luxoutnet, the designer shop has brought various vendors under one single roofs. This facilitates the shoppers to buy authentic and branded products at competitive and discount rates.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/luxoutnet-295x300.png" alt="luxoutnet designer shop application" width="295" height="300" class="aligncenter size-medium wp-image-140" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Goodness Store<span>The Online Organic Store</span></h3>
<p class="app-desc">One can download the apps of the Goodness store, the online organic store with doorstep delivery facility and order Organic, Natural and Eco Friendly products like fruits, vegetables, personal care, gluten free products, and, etc.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/organic-295x300.png" alt="organic store application" width="295" height="300" class="aligncenter size-medium wp-image-141" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">IQX<span>A Passion To Help</span></h3>
<p class="app-desc">IQX Business Solutions concentrates on quickening and securing critical business processes. Their solution platform encompasses web and mobile Apps, workflow automation and decision support, and consistent SAP and document management system integration.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/iqx-295x300.png" alt="IQX application" width="295" height="300" class="aligncenter size-medium wp-image-139" />
</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-sm-7">
<h3 class="app-title">Roachway<span>The Brand of Probiotics, Australia</span></h3>
<p class="app-desc">Rochway is a Magento based website on Australian Healthcare. The past few years marked some significant changes in making them one of the highly efficient and technologically advanced manufacturer and distributor of Multi-Ingredient Probiotic formulas and high quality Nutraceutical health supplements worldwide.</p>
<ul class="app-store-btn list-unstyled">
<li class="google-play"><label class="sr-only">Goggle play</label></li>
<li class="apple-store"><label class="sr-only">Apple Store</label></li>
<li class="blackberry-store"><label class="sr-only">Blackberry Store</label></li>
</ul>
</div>
<div class="col-sm-5">
<img src="<?php echo site_url();?>/wp-content/uploads/2017/06/roachway-295x300.png" alt="roachway application" width="295" height="300" class="aligncenter size-medium wp-image-143" />
</div>
</div>
</div>
</div><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
</div>
</div>
</div>
</section>-->
<section class="verticals_btm2">
<div class="container">
<div class="row">
<div class="col-sm-7 testimonials">
<h3 class="section_heading">Client’s Testimonials</h3>
<div id="testimonial-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
<div class="carousel-inner" role="listbox">
<div class="item active">
<p class="client_review">This has by far been our best experience on oDesk and we are glad we made the right decision by hiring Orange Mantra guys for our eCommerce website. The team was super responsive over Skype, there design skills were beyond exceptional and their professionalism was high class. I would continue to work with OM for future projects...well done guys!!!</p>
<span class="client_name">Claudius</span>
</div>
<div class="item">
<p class="client_review">The Team excels in fast service. They designed, developed and delivered our android and iOS app within a short duration of time that anyone may not even imagine. It's the result of an amazing team effort.</p>
<span class="client_name">Arnald</span>
</div>
<div class="item">
<p class="client_review">This has by far been our best experience on oDesk and we are glad we made the right decision by hiring Orange Mantra guys for our eCommerce website. The team was super responsive over Skype, there design skills were beyond exceptional and their professionalism was high class. I would continue to work with OM for future projects...well done guys!!!</p>
<span class="client_name">Mick</span>
</div>
<div class="item">
<p class="client_review">The project required moving one of my website pages which was showing on google second page to first page for a given keyword - they said this will take 2 weeks to reflect and in 2 weeks the page started showing up on the first page of google results - so excellent work done.</p>
<span class="client_name">Omair</span>
</div>
<div class="item">
<p class="client_review">OM team did a great job. The mobile app was developed in a short time! I liked the consistency in their way of communication. I was always informed about the working status and the next steps involved. Thank you again!.</p>
<span class="client_name">Brunell</span>
</div>
</div>
</div>
</div>
<div class="col-sm-5 portfolio-verticals-section">
<div class="port-verticals-section-inner">
<h3 class="section_heading">Verticals</h3>
<ul class="list-unstyled">
<li><a href="<?php echo site_url(); ?>/verticals/apparel-retail"><i class="icon-check" aria-hidden="true"></i>Apparel &amp; Retail</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/publishing"><i class="icon-check" aria-hidden="true"></i>Publishing </a></li>
<li><a href="<?php echo site_url(); ?>/verticals/coaching-consulting"><i class="icon-check" aria-hidden="true"></i>Coaching &amp; Consulting</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/real-state"><i class="icon-check" aria-hidden="true"></i>Real Estate</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/fmcg"><i class="icon-check" aria-hidden="true"></i>FMCG</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/healthcare"><i class="icon-check" aria-hidden="true"></i>Healthcare</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/finance"><i class="icon-check" aria-hidden="true"></i>Finance</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/multi-vendor-marketplaces"><i class="icon-check" aria-hidden="true"></i>Multi Vendor Marketplaces</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/art-fashion"><i class="icon-check" aria-hidden="true"></i>Beauty &amp; Fashion</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/social-community"><i class="icon-check" aria-hidden="true"></i>Social Community &amp; Blogging</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/retail-store"><i class="icon-check" aria-hidden="true"></i>E-commerce Store</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/astrology"><i class="icon-check" aria-hidden="true"></i>Astrology</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/clients"><i class="icon-check" aria-hidden="true"></i>Corporate Branding</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/Jewellery"><i class="icon-check" aria-hidden="true"></i>Jewellery</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/mobile-app"><i class="icon-check" aria-hidden="true"></i>Mobile App</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/cms-development"><i class="icon-check" aria-hidden="true"></i>Cms Develpoment</a></li>
<li><a href="<?php echo site_url(); ?>/verticals/hospitality"><i class="icon-check" aria-hidden="true"></i>Hospitality</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<!-- /app slider -->
<script>
	jQuery(document).ready(function(){
	var img_src = jQuery('.imgParent img').attr('src');
	jQuery('.imgParent').css('background-image', 'url(' + img_src + ')');

	});
</script>
<?php get_footer('solution'); ?>

