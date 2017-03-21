$(document).ready(function() {
	
	$('#enter').click(function() {
		$('.enter').fadeIn();
		$('section').hide();
	});
	$('#register').click(function() {
		$('.reg').fadeIn();
		$('section').hide();
	});	
	$('.close').click(function() {
		$('section').show();
		$('.overlay').fadeOut();
	});


});