$(document).ready(function() {

$(".nav-link").hover(function() {
    $('.nav-link').not(this).addClass('blur');
  
},
function() {
     $('.nav-link').not(this).removeClass('blur');
    
	});
});
/*BLURRY EFFECT ON OVERLAY NOT IMPLEMENT YET*/