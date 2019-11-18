 
// Toggle Menu for Magento Page
jQuery(document).ready(function(){
	jQuery('.magentogetQuery').parents('body').addClass('magentogetQuery_parent');
 jQuery('.page_content_wrapper .fixme .grid_12').append('<span class="hambugerIconDiv"><b>Services Links</b></span>');
 jQuery('.hambugerIconDiv').on('click', function(){
  jQuery(this).parents('.page_content_wrapper  .fixme').find('ul').slideToggle();
 });
 
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
});


	jQuery(window).on('load',function(){
		jQuery('.queryForm_parent form .captcha_field input[name*="captcha-3"]').attr('placeholder','Type Captcha')
	});
	jQuery(document).ready(function(){
		jQuery('.queryForm_parent form .captcha_field input[name*="captcha-3"]').attr('placeholder','Type Captcha')
	}); 
	
	
	
	jQuery('a[data-target="#myModal1"]').attr('href','/get-a-quote');
jQuery('a[data-target="#myModal1"]').attr('data-toggle','');
equalheight = function(container){

var currentTallest = 0,
currentRowStart = 0,
rowDivs = new Array(),
jQueryel,
topPosition = 0;
jQuery(container).each(function() {

jQueryel = jQuery(this);
jQuery(jQueryel).height('auto')
topPostion = jQueryel.position().top;

if (currentRowStart != topPostion) {
for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
rowDivs[currentDiv].height(currentTallest);
}
rowDivs.length = 0; // empty the array
currentRowStart = topPostion;
currentTallest = jQueryel.height();
rowDivs.push(jQueryel);
} else {
rowDivs.push(jQueryel);
currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
}
for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
rowDivs[currentDiv].height(currentTallest);
}   
});  
}

jQuery(window).on('load',function() {
equalheight('.repeat_list');
});


jQuery(window).resize(function(){
equalheight(' .repeat_list');
});



jQuery(document).ready(function(){  
console.log(1);
jQuery('#nav li').click(function(){
		console.log("working");
 jQuery('.section').hide();
    jQuery('.section', this).toggle(); 
});
});