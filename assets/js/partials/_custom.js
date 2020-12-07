(function( $ ) {

//Animate slide up and down nav dropdowns.
	$('.dropdown').on('show.bs.dropdown', function(e) {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});
	$('.dropdown').on('hide.bs.dropdown', function(e) {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});

	//DCTP Menu Colors
	
	$('#menu-dctp-menu').find('a.nav-link').addClass('btn btn-green btn-block rounded-0 text-left pl-3');

	


	
})( jQuery );