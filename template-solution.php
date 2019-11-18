<?php

/*

Template Name: Solution templates

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

<script>
            jQuery(document).ready(function() {
              jQuery('.innovatingSlider').owlCarousel({
                margin: 30,
                nav: true,
                 loop: true,
                dots:false,
                 autoplay: true,
                 autoplayTimeout:3000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 3
                  }
                }
              })


              jQuery('.ourPortfolioSlider').owlCarousel({
                margin: 0,
                nav: true,
                dots:false,
                autoplay: true,
                autoplayTimeout:4000,
                loop: true,
                animateOut: 'fadeOut',
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
			  
			  
              jQuery('.home .clientCommendations').owlCarousel({
                margin: 10,
                nav: false,
				        dots:false,
				        autoplay: true,
                autoplayTimeout:4000,
                loop: true,
                animateOut: 'fadeOut',
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
              jQuery('.happy-clients .clientCommendations').owlCarousel({
                margin: 10,
                nav: true,
				        dots:false,
				        autoplay: true,
                autoplayTimeout:4000,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
			  
              jQuery('.wealthExperience').owlCarousel({
                margin: 50,
                nav: false,
                loop: true,
                dots: false,
                autoplay: true,
                autoplayTimeout:2000,
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
			  
			  
   jQuery('.industries-solution').owlCarousel({
                margin: 50,
                nav: true,
                loop: true,
                dots: false,
                autoplay: true,
                autoplayTimeout:5000,   
                autoplayHoverPause: true,             
                items:1,
                smartSpeed: 750
              });


            })
          </script>
<?php get_footer('solution'); ?>