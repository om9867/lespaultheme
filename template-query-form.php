<?php
/*
Template Name: Query Form Template
*/
?>

<?php get_header('solution'); ?>
<script>
delete_cookie('form');
jQuery(document).ajaxComplete(function() {
  if (jQuery('.wpcf7-mail-sent-ok').length) {
	  document.cookie = "form=formsent;path=/";
   window.location.replace("https://www.orangemantra.com/thank-you/");
  }
});

</script>
<section class="queryForm_parent">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <hgroup>
                    <h3>Let's understand your needs</h3>
                    <p>Connect with us to share your requirements and we will get back to you. </p>
                </hgroup>
            <?php echo do_shortcode('[contact-form-7 id="18243" title="Query Form"]'); ?>
			
            </div>
        </div>
    </div>
</section>

<style>
.wpcf7-display-none {
    display: none!important;
}
</style>
<?php get_footer('solution'); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/autogrow_textare.js" type="text/javascript" defer></script>
<script>
jQuery(document).ready(function(){
    jQuery("textarea").attr('rows','2');
    jQuery("textarea").autogrow();	
});
</script>