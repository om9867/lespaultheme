<?php
/*
Template Name: Emailer Template
*/
?>
<?php get_header('emailer'); ?>

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
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  jQuery('#myModal').show();
}, false );
</script>
<?php get_footer('ppc'); ?>
