(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 976) {
			$('.dctp--title').removeClass('h1 pt-3').addClass('pt-1');
			
		};
		if ($window.width() >= 976) {
			$('.dctp--title').addClass('h1 pt-3').removeClass('pt-1');
			
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );