/** Used Only For Touch Devices **/
jQuery(document).ready(function($) { 

	// for touch devices: add class cs-hover to the figures when touching the items
	if( Modernizr.touch ) {

		$( '.imgHover article:not(.generatedMoreLink)  figure').on( 'touchstart', function(e) {

			$(this).find( '.iconLinks > a, a.btn' ).on( 'touchstart', function(e) {
				e.stopPropagation();
			});

			$(this).toggleClass('cs-hover');

		});



	}

});