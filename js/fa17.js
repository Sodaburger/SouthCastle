/*-----------------------------------------------------------------------------------------------
Project:  Mos7 - Responsive Bootstrap 3 App Landing Page Template
Version:  1.6
Last change:  21/09/2016
Design by:  TemplatesPRO.com.br
-------------------------------------------------------------------------------------------------

INDEX:
--- DOCUMENT.READY ---
01) PRELOADER
21) BLOG - Carousel

--- WINDOW.SCROLL ---
28) NAVIGATION - Go Top Scroll
29) ANIMATION - Parallax Effect
-----------------------------------------------------------------------------------------------*/


/* DOCUMENT.READY =============================================================================*/
$(document).ready(function () {
'use strict';

	/*--------------------------------------------------------------------------------------------
	21) BLOG - Carousel
	--------------------------------------------------------------------------------------------*/
	if ($('section.blog').length) {
		$('#blog-carousel-2').slick( {
			slidesToShow: 3,
			slidesToScroll: 3,
			speed: 700,
			dots: true,
			useTransform: true,
			cssEase: 'ease-in-out',
			responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					mobileFirst: true
				}
			},{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					mobileFirst: true
				}
			},{
				breakpoint: 540,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					mobileFirst: true
				}
			}]
		});
	}

});
/* END WINDOW.SCROLL ==========================================================================*/
