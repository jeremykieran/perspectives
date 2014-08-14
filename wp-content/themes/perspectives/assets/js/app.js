$(document).ready(function() {
  /* Film Modals on Landing */
  $('[data-film-id]').click(function(){
  	$('.avatar').removeClass('pop');
  	$(this).find('.avatar').addClass('pop');
  	var filmID = $(this).data('film-id');
  	$('.modal').removeClass('animated fadeIn');
  	$('.landing').find("[data-modal-id='" + filmID + "']").addClass('animated fadein');
	});
	
	$('.modal-close').click(function(){
		$('.avatar').removeClass('pop');
		$('.modal').fadeOut().removeClass('animated fadeIn').fadeIn();
	});
});