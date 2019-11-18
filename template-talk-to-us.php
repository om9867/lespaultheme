<?php
/*
Template Name: Talk to us Template
*/
?>
<?php get_header('emailer'); 
global $post;
if($post->ID == 21489 ){
?>
<script>
delete_cookie('form');
jQuery(document).ajaxComplete(function() {
  if (jQuery('.wpcf7-mail-sent-ok').length) {
	  document.cookie = "form=formsent;path=/";
   window.location.replace("https://www.orangemantra.com/thank-you/");
  }
});

</script>
<?php } ?>
<style type="text/css">
    header, .breadcrumbs, .our-clients, footer{display: none !important;}
    .our-clients.ppc-clients{display: block !important;}
    .wrap{background: transparent;}
     #tawkchat-minified-container, .footerFomrcount .sednButton:before, .footerFomrcount .sednButton:after{display: none;}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<style>
/*body{
  background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);
}*/
.wpcf7-response-output.wpcf7-display-none.wpcf7-mail-sent-ok {display: none !important;}
.modal {background: rgba(84, 84, 84, 0.56);}
.fa-check-circle:before {
    content: "\f058";
    font-family: 'Font Awesome 5 Free';
    font-size: 7em;
    color: #0033cc;
    /* font-weight: 600; */
}
div.wpcf7-validation-errors, div.wpcf7-acceptance-missing {
    display: none!important;
}
.cForm .sub_text input.submit_btn {
    background-image: linear-gradient(120deg, #03c 0%, #03c 100%)!important;
}
.page-template{
overflow:visible!important;
}
.homelink {color: #03c;}
.form-row label {
    padding: 0;font-size: 13px !important;margin:0;
}
.cForm {
    background: #dedede;
    padding: 1.5rem 1rem;
    border-radius: 0;
}
.thanks_text {text-align: center; margin: 20px 0;}
select#category {
    margin-bottom:7px;
}
.contact_form textarea.form-control{
    height: 55px !important;
    margin-bottom: 10px !important;
}
#myModal .modal-dialog {
    margin: 70px auto !important;
}
.modal-body.emailer {
    text-align: center;
}
.p-0 {
    padding: 0 !important;
}
</style>
<?php
	if(have_posts()):
		while(have_posts()):
			the_post();
			remove_filter( 'the_content', 'wpautop' );
			the_content();
		endwhile;
	endif;
	
	
?>
<?php if($post->ID == 21489 ){ ?>
<script> function createFcn(nm){(window.freshsales)[nm]=function(){(window.freshsales).push([nm].concat(Array.prototype.slice.call(arguments,0)))}; } (function(url,appToken,formCapture){window.freshsales=window.freshsales||[];if(window.freshsales.length==0){list='init identify trackPageView trackEvent set'.split(' ');for(var i=0;i<list.length;i++){var nm=list[i];createFcn(nm);}var t=document.createElement('script');t.async=1;t.src='https://d952cmcgwqsjf.cloudfront.net/assets/analytics.js';var ft=document.getElementsByTagName('script')[0];ft.parentNode.insertBefore(t,ft);freshsales.init('https://orangem.freshsales.io','8e24c1344abc5b10c9652c9d64c9a8b65684785d6f879107b5a15e8c6bd58afb',true);}})();</script>
	<?php } ?>
<?php get_footer('ppc'); ?>
