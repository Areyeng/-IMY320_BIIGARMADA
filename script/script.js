$(document).ready(function() {

	$(".nav-link").hover(function() {
	    $('.nav-link').not(this).addClass('blur');
	  
	},
	function() {
     $('.nav-link').not(this).removeClass('blur');
    
	});
	
	const scrollContainer = document.getElementById("sections");

	scrollContainer.addEventListener("wheel", (evt) => {
	    evt.preventDefault();
	    scrollContainer.scrollLeft += evt.deltaY;
	});
});
/*BLURRY EFFECT ON OVERLAY NOT IMPLEMENT YET*/
