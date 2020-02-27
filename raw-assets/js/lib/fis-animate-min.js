/*! fis-animate version.1.0 | 
	(Author) Filjumar Jumamoy 
	(Author LinkedIn) https://www.linkedin.com/in/filjumar-jumamoy-26243182/ 
*/

"use strict";

var $fis = $('.fis-animate'),
	$this = "",
	$fis_opt = "fade-in",
	$fis_opt_after = '',
	$fis_opt_before = '',
	$fis_offset = 100,
	$fis_duration = .3,
	$scroll_check = 0;

$.fn.isInViewport = function() {
	var elementTop = $(this).offset().top;
	var elementBottom = elementTop + $(this).innerHeight() + 200;
	var viewportTop = $(window).scrollTop() + ( $(window).height() - ($(window).height()/1.8));
	var viewportBottom = viewportTop + ( $(window).height() - ($(window).height()/1.8));
	return elementBottom > viewportTop && elementTop < viewportBottom;
};


function flipOption($fis_opt) {

	if( $fis_opt == "fade-up" ) {

		$fis_opt_after = 'translateY(0%)';
		$fis_opt_before = 'translateY(-30%)';

	}else if( $fis_opt == "fade-up-left" ) {

		$fis_opt_after = 'translate(0%, 0%)';
		$fis_opt_before = 'translate(30%, 30%)';

	}else if( $fis_opt == "fade-up-right" ) {

		$fis_opt_after = 'translate(0%, 0%)';
		$fis_opt_before = 'translate(-30%, 30%)';

	}else if( $fis_opt == "fade-down" ) {

		$fis_opt_after = 'translateY(0%)';
		$fis_opt_before = 'translateY(30%)';

	}else if( $fis_opt == "fade-down-left" ) {

		$fis_opt_after = 'translate(0%, 0%)';
		$fis_opt_before = 'translate(30%, -30%)';

	}else if( $fis_opt == "fade-down-right" ) {

		$fis_opt_after = 'translate(0%, 0%)';
		$fis_opt_before = 'translate(-30%, -30%)';
	
	}else if( $fis_opt == "fade-left" ) {

		$fis_opt_after = 'translateX(0%)';
		$fis_opt_before = 'translateX(30%)';
	
	}else if( $fis_opt == "fade-right" ) {

		$fis_opt_after = 'translateX(0%)';
		$fis_opt_before = 'translateX(-30%)';
		
	}else if( $fis_opt == "flip-x" ) {

		$fis_opt_after = 'scaleX(1)';
		$fis_opt_before = 'scaleX(-.01)';

	}else if( $fis_opt == "flip-y" ) {

		$fis_opt_after = 'scaleY(1)';
		$fis_opt_before = 'scaleY(-.01)';

	}else if( $fis_opt == "zoom-in" ) {

		$fis_opt_after = 'scale(1)';
		$fis_opt_before = 'scale(.6)';

	}else if( $fis_opt == "zoom-in-up" ) {

		$fis_opt_after = 'translateY(0%) scale(1)';
		$fis_opt_before = 'translateY(30%) scale(.6)';

	}else if( $fis_opt == "zoom-in-down" ) {

		$fis_opt_after = 'translateY(0%) scale(1)';
		$fis_opt_before = 'translateY(-30%) scale(.6)';

	}else if( $fis_opt == "zoom-in-left" ) {

		$fis_opt_after = 'translateX(0%) scale(1)';
		$fis_opt_before = 'translateX(30%) scale(.6)';

	}else if( $fis_opt == "zoom-in-right" ) {

		$fis_opt_after = 'translateX(0%) scale(1)';
		$fis_opt_before = 'translateX(-30%) scale(.6)';

	}else if( $fis_opt == "zoom-out" ) {

		$fis_opt_after = 'scale(1)';
		$fis_opt_before = 'scale(1.2)';

	} else {

		$fis_opt_after = 'translateY(0%)';
		$fis_opt_before = 'translateY(0%)';

	}

}


function elem() {
	$fis.each(function(index){

		$this = $(this);
		$fis_opt = $this.data('fis');
		$fis_duration = $this.data('fis-duration');
		$fis_offset = $this.offset().top;
		
		flipOption( $fis_opt);
	
		if( $this.isInViewport() ) {
			$this.css({
				opacity: 1,
				transform: $fis_opt_after,
				transition: 'ease-in-out '+$fis_duration+'s'
			});
		}
		// else{
		// 	$this.css({
		// 		opacity: 0,
		// 		transform: $fis_opt_before,
		// 		transition: 'ease-in-out .2s',
		// 	});
		// }
	
	});
}

$(window).on('scroll',function(){
	elem();
});
