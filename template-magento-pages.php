<?php
/*
Template Name: Magento Template
*/
?>
<?php get_header('solution'); ?>
<link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.css" rel="stylesheet">

<link rel='stylesheet' id='dashicons-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/magentopages.css' type='text/css' media='all' />
     
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <script>
        jQuery(function(){
        jQuery('.bxslider').bxSlider({
          captions: true,
          auto: true
      });
    });
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
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
			remove_filter( 'the_content', 'wpautop' ); 
			the_content();
		endwhile;
	endif; 
?>
<?php //the_field('client_logo_shortcode'); ?>
<section class="our-clients no-border">
    <div class="container">
        <h3 class="gradient-brd-btm section_heading" data-aos="fade-up" data-aos-delay="100">Happy Clients</h3>
        <div class="row">
            <div class="col-sm-12" data-aos="fade-up" data-aos-delay="300">
                <?php 
				echo do_shortcode('[logos columns="5" category="home-clients" count="15" order="new" scroll="3000"][/logos]'); 
				?> 
            </div>
        </div>
    </div>
</section>
<section class="magentodevFoooter"  style="background: url(/wp-content/uploads/2018/10/footer-up-bg.jpg)repeat center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 footerFomrcount footerFomrcountmob">
                <hr>
                <span class="letstalk">Let's Talk</span>
                <h3>Discuss Your Project!</h3>
                 <?php echo do_shortcode('[contact-form-7 id="19640" title="Magento New Dev Form"]'); ?>
            </div>
            <div class="col-md-5 leftsideinfo">
                <div class="leftboxCount media">
                  <div class="media-left">
                    <img class="media-object" src="/wp-content/uploads/2018/10/magento-dev-mail-icon.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <span>Mail Us at</span>
                    <p><a href="mailto:sales@orangemantra.com">sales@orangemantra.com</a></p>
                  </div>
                </div>
                <div class="leftboxCount media">
                  <div class="media-left">
                    <img class="media-object" src="/wp-content/uploads/2018/10/magento-dev-skype-icon.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <span>Skype Us at</span>
                    <p>salesom.orange</p>
                  </div>
                </div>
                <div class="leftboxCount media">
                  <div class="media-left">
                    <img class="media-object" src="/wp-content/uploads/2018/10/magento-dev-call-iicon.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <span>Call Us at</span>
                    <p><a href="tel:+16808001190">+1-6808001190 (US)</a></p>
                    <p><a href="tel:+919870289050">+91-9870289050 (IND)</a></p>
                  </div>
                </div>
                <div class="row socialSection">
                    <div class="col-md-5">
                        <span>Follow Us</span>
                        <div class="foot_social">
                            <a class="social-icon fa fa-facebook" href="http://www.facebook.com/OrangeMantraIndia" target="_blank"><span>facebook</span></a><a class="social-icon fa fa-twitter" href="https://twitter.com/OrangeMantraggn" target="_blank"><span>twitter</span></a><a class="social-icon fa fa-linkedin" href="https://www.linkedin.com/company/orange-mantra" target="_blank"><span>linkedin</span></a><!--a class="social-icon fa fa-google-plus" href="https://plus.google.com/115461688395063431720" target="_blank"><span>googleplus</span></a--><a class="social-icon fa fa-pinterest" href="https://www.pinterest.com/orangemantra/" target="_blank"><span>pinterest</span></a>
                            </div>
                    </div>
                    <div class="col-md-6 footerNewslett">
                        <span>Signup For Newsletter</span>
                        <?php echo do_shortcode('[contact-form-7 id="19641" title="Newsletter Form"]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 footerFomrcount footerFomrcountweb">
                <hr>
                <span class="letstalk">Let's Talk</span>
                <h3>Discuss Your Project!</h3>
                 <?php echo do_shortcode('[contact-form-7 id="19640" title="Magento New Dev Form"]'); ?>
            </div>
        </div>
    </div>
</section>


<div class="casestudyModalbox case_study_popup">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <i class="fa fa-times" data-dismiss="modal" aria-hidden="true"></i>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="col-md-6 footerFomrcount" style="width: 100%">
                <hr>
              <span class="letstalk">Want to know more about the Project? Fill your details to read full case study</span>
                 <?php echo do_shortcode('[contact-form-7 id="19639" title="Magento New Dev Form"]'); ?>
				 <span id="spinner" style="display:none;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form-spinner.gif"></span>
            </div>
        </div>
        
      </div>
      
    </div>
  </div>
</div>
<div class="casestudyModalbox magentogetQuery">
  <div class="modal fade" id="myModal1" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
          <div class="row">
                <div class="col-md-12">
            <div class="row">
               <div class="my-popup-section">
                  <div class="col-md-5 qote-bg hidden-xs">
                     <div class="qoute-left">
                        <div class="popup-logo">
                           <a class="" href="https://www.orangemantra.com"> 
                           <img class="normal-logo " src="/wp-content/uploads/2018/10/OM_LOGO-magento-dev.png" alt="logo"> 
                           </a>
                        </div>
                        <div class="qoute-left-inner">
                           <div class="qoute-circle-inner">
                              <strong>Lets Talk Business!</strong>
                              <span>Please take a quick moment to complete this form and a business representative will get back to you swiftly.</span>
                           </div>
						   <div class="qoute-left-content">Mail us at:<br>
						  <strong class="call"><a href="mailto:sales@orangemantra.com">sales@orangemantra.com</a></strong><br>
                           </div>
						   <div class="qoute-left-content">Skype us at:<br>
						  <strong class="call"><a href="skype:salesom.orange">salesom.orange</a></strong><br>
                           </div>
                           <div class="qoute-left-content">Call us at:<br>
						  <strong class="call"><a href="tel:+16808001190">+16808001190 (US)</a></strong><br>
                              <strong class="call"><a href="tel:+919870289050">+91-9870289050 (IND)</a></strong><br>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-7 qote-bg-right">
                        <div id="popup-innerbody" class="qoute-right-inner">
                           <h4>
                              Get your Quote! 
                              <div id="close" class="close-search close-qoute" data-dismiss="modal" aria-hidden="true">Close</div>
                           </h4>
                             <?php echo do_shortcode('[contact-form-7 id="19638" title="Get your Quote M-Dev"]'); ?>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
delete_cookie('form');
document.addEventListener( 'wpcf7mailsent', function( event ) {
   if ( '19638' == event.detail.contactFormId || '19640' == event.detail.contactFormId) { // Sends sumissions on form to the respective page
   document.cookie = "form=formsent;path=/";
	window.location.replace("https://www.orangemantra.com/thank-you/");
    } 
}, false );
</script>
<?php get_footer('solution'); ?>