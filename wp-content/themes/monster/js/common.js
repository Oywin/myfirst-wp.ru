$(document).ready(function () {
// paralax
$.stellar({
	responsive : true
});

$(".scroll").click(function (){
	$('html, body').animate({
		scrollTop: $("#top").offset().top
	}, 1000);
});            
// -------------------
// scrollup
jQuery('#scrollup').mouseover( function(){
	jQuery( this ).animate({opacity: 0.65},100);
}).mouseout( function(){
	jQuery( this ).animate({opacity: 1},100);
}).click( function(){
	window.scroll(0 ,0); 
	return false;
});

jQuery(window).scroll(function(){
	if ( jQuery(document).scrollTop() > 0 ) {
		jQuery('#scrollup').fadeIn('fast');
	} else {
		jQuery('#scrollup').fadeOut('fast');
	}
});
// --------------------
// poppup
$(".gallery").fancybox({
	'centerOnScroll'  :true,
	'autoScale'       :true,
	helpers: {
		overlay: {
			locked: false
		}
	}
});

// menu
$(".auth_buttons").click(function() {
	$(this).next().slideToggle();
});
$(".main_mnu_button").click(function() {
	$("#main").slideToggle();
});

$.easing.def = "easeInOutQuad";
$('li.button a').click(function(e){
	var dropDown = $(this).parent().next();
	$('.dropdown').not(dropDown).slideUp('slow');
	dropDown.slideToggle('slow');
	e.preventDefault();
})
// -------------------
// accordion
$(function() {
	$(".expand").on( "click", function() {
	    // $(this).next().slideToggle(200);
	    $expand = $(this).find(">:first-child");
	    
	    if($expand.text() == "+") {
	    	$expand.text("-");
	    } else {
	    	$expand.text("+");
	    }
	});
});





});
