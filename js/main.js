jQuery(document).ready(function() {

    if (jQuery(".services-sidebar").length) {
        var e = jQuery(".services-sidebar"),
            s = e.offset().top - 40,
            t = jQuery(".ser_sec3").offset().top - e.outerHeight() - 70;
        jQuery(document).scroll(function() {
            var r = jQuery(this).scrollTop();
            r > s ? (e.addClass("sticky"), r > t ? e.css("top", t - r + 32) : e.css("top", 38)) : e.removeClass("sticky"), jQuery(".service-single").each(function() {
                jQuery(this).offset().top - jQuery(window).scrollTop() <= 40 && jQuery(this).offset().top - jQuery(window).scrollTop() > 0 && (jQuery(".services-sidebar li").removeClass("active"), jQuery('.services-sidebar li[data-href="' + jQuery(this).attr("data-target") + '"]').addClass("active"))
            })
        }), jQuery(document).on("click", ".services-sidebar li>a", function() {
            console.log(jQuery('.service-single[data-target="' + jQuery(this).closest("li").attr("data-href") + '"]')), jQuery("body, html").animate({
                scrollTop: jQuery('.service-single[data-target="' + jQuery(this).closest("li").attr("data-href") + '"]').offset().top - 40
            }, 500)
        })
    }
    jQuery("#nav").children("li").first().children("a").addClass("active").next().addClass("is-open").show(), jQuery("#nav").on("click", "li > a", function() {
        jQuery(this).hasClass("active") ? (jQuery("#nav .is-open").removeClass("is-open").hide(), jQuery(this).removeClass("active")) : (jQuery("#nav .is-open").removeClass("is-open").hide(), jQuery(this).next().toggleClass("is-open").toggle().show(), jQuery("#nav").find(".active").removeClass("active"), jQuery(this).addClass("active"))
    }), jQuery("#handle1").click(function() {
        jQuery(this).parent().toggleClass("active")
    }), AOS.init({
        easing: "ease-in-out-sine"
    });
    new Swiper(".swiper_container", {
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev",
        effect: "coverflow",
        grabCursor: !0,
        centeredSlides: !0,
        slidesPerView: 2,
        autoplay: 1,
        speed: 4500,
        loop: !0,
        coverflow: {
            rotate: 20,
            stretch: 0,
            depth: 400,
            modifier: 1,
            slideShadows: !0
        }
    });
    jQuery(window).scroll(function() {
        jQuery(this).scrollTop() > 135 ? jQuery(".header").addClass("sticky") : jQuery(".header").removeClass("sticky")
    })
    jQuery('.reactSlide').bxSlider({
        minSlides: 5,
        maxSlides: 5,
        pager: false,
        controls:false,
        auto: true,
        slideWidth: 600
    });
});
jQuery(document).ready(function(){
jQuery('#nav2 li:first-child .section').show();
jQuery('#nav2 li:first-child a').addClass("active");
jQuery('#nav2 li a').click(function(){

  var t = jQuery(this).attr('id');
  
  if(jQuery(this).hasClass('active') != true){ //this is the start of our condition 
    jQuery('#nav2 li a').removeClass('active');           
    jQuery(this).addClass('active');

    jQuery('#nav2 li .section').hide();
    jQuery('#'+ t + 'C').fadeIn('slow');
 }
});

jQuery(window).scroll(function() {
        if (jQuery(document).scrollTop() > 100) {
            jQuery("header").addClass('fixed-ie-header');
        }
        else {
            jQuery("header").removeClass('fixed-ie-header');
        }
    }); 


})


