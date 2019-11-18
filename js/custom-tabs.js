jQuery(document).ready(function() {
  var ab;
  jQuery(".tabs-list").click(function() {
    var cd = jQuery(this).attr('data-href');
    jQuery(this).addClass('active');
    jQuery(this).siblings().removeClass('active');
    jQuery(this).parent().next().children().each(function() {
      var ab = jQuery(this).attr("data-target");
      console.log(ab);
      if (cd == ab) {
        jQuery(this).addClass('activediv');
        console.log('yes');
      } else {
        jQuery(this).removeClass('activediv');
      }
    });

  });
});

jQuery(function() {
  var selector = '.shopify_nav ul li';
    var url = window.location.href;
    var target = url.split('/');
     jQuery(selector).each(function(){
        if(jQuery(this).find('a').attr('href')===('/'+target[target.length-2])){
          jQuery(selector).removeClass('active');
          jQuery(this).removeClass('active').addClass('active');
        }
     });

});