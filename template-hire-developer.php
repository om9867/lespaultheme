<?php
/*
Template Name: Hire Developer Template
*/
?>
<?php get_header('solution');?>
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
                <?php echo do_shortcode('[logos columns="5" category="home-clients" count="15" order="new" scroll="3000"][/logos]'); ?> 
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
                 <?php echo do_shortcode('[contact-form-7 id="19839" title="Magento New Dev Form"]'); ?>
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
                           <img class="normal-logo " src="/wp-content/uploads/2018/04/OM_LOGO-magento-dev.png" alt="logo"> 
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
						  <strong class="call"><a href="skype:orangemantra">orangemantra</a></strong><br>
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
                             <?php echo do_shortcode('[contact-form-7 id="19761" title="Get your Quote M-Dev"]'); ?>
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
<script type='text/javascript' src='/wp-content/themes/lespaul-child/js/cs-slider.js'></script>
<script type="text/javascript">
  /*profolio slider starts*/
jQuery(document).ready(function($) {
  //portfolio-sec  //portfolio-slide-outer
  var height = parseInt($('.portfolio-slide-outer').css('height'));
  var applyheight = height/2 + 'px';
  $('.portfolio-slide-outer').css('margin-top','calc(50% - '+applyheight+')');

  var owl = $('#portfolio-slider');
  var option = {
    items: 1,
    loop: true,
    margin: 10,
    autoplay: 2000,
    nav:true,
    autoplayHoverPause: true,
  }
  if(!mobilemode){
    option['animateIn'] = 'fadeInRight';
  }
  owl.owlCarousel(option);
  owl.on('changed.owl.carousel', function(e) {
    if(mobilemode){
            //var animateType = "slideIn";
            var animateType = "fadeIn";
        }else{
          var animateType = "fadeInLeft";
        }
        $('.active-img').hide().removeClass();
        $('#img'+e.page.index).show();
        $('#img'+e.page.index).addClass('active-img animated '+animateType);
    });
});
/*profolio slider ends*/
</script>
<?php get_footer('solution'); ?>