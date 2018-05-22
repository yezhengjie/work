

/* ----------------------------- 
Scroll into viewPort Animation
----------------------------- */
$(document).ready(function() {	
	
	'use strict';
	$('.animated').appear(function() {

		var element = $(this),
			animation = element.data('animation'),
			animationDelay = element.data('animation-delay');
			if ( animationDelay ) {

				setTimeout(function(){
					element.addClass( animation + " visible");
				}, animationDelay);

			} else {
				element.addClass( animation + " visible");
			}
	});
});
