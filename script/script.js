$(document).ready(function() {
	navBlur();
	scrollPage();
	scrollItems();
});
/*BLURRY EFFECT ON OVERLAY NOT IMPLEMENT YET*/
let navBlur = ()=>{
	$(".nav-link").hover(function() {
	    $('.nav-link').not(this).addClass('blur');
	  
	},
	function() {
     $('.nav-link').not(this).removeClass('blur');
    
	});
}
/*Allows the user to scroll from left to right in the homepage*/
let scrollPage = ()=>{
	const scrollContainer = document.getElementById("sections");

	scrollContainer.addEventListener("wheel", (evt) => {
	    evt.preventDefault();
	    // scrollContainer.scrollLeft += evt.deltaY;
	});
}
/*Allows the illustrations to movve together with the page*/
let scrollItems = ()=>{
	const scrollContainer = document.getElementById("sections");

	// Varibales holding the initial values of each element
	let iniLeft = [];
	for (let i = 1; i < 5; i++){
		let temp = $("#ill span:nth-child("+i+")").css("left").replace("px");
		iniLeft.push(parseFloat(temp));
	}

	// Variables to control the movements of the elements.
	let marg = [iniLeft[0], iniLeft[1], iniLeft[2], iniLeft[3]];

	// Variables to control the elements to appear on the left or right.
	let wrap = [false, false, false, false];

	// Variables to determine if the element has already gone around once.
	let around = [false, false, false, false];

	let halt = [false, false, false, false];
	    
	let firstSec = $("#sections div.section:first-child").offset().left;
	let secondSec = $("#sections div.section:nth-child(2)").offset().left;
	let lastSec = $("#sections div.section:last-child").offset().left;

	// Varibales holding the initial values of each h1 element
	let h1Move = [];
	let h1Left = [];
	let secPositions = [];

	for (let i = 2; i < 6; i++){
		let temp = $("#sections .section:nth-child("+i+") h1").css("margin-left").replace("px");
		h1Left.push(parseFloat(temp));
		secPositions.push($("#sections .section:nth-child("+i+")").offset().left);
		h1Move.push(parseFloat(temp));
		// console.log($("#sections .section:nth-child("+i+") h1").css("margin-left"));
	}


	scrollContainer.addEventListener("wheel", (evt) => {
	    evt.preventDefault();
		let tempScroll = scrollContainer.scrollLeft;
	    scrollContainer.scrollLeft += evt.deltaY;

		// for(let i = 0; i < 4; i++){
			// let j=i+1;
			if($("#sections div.section:nth-child(2)").offset().left>firstSec){
				halt[0] = false;
			}
			if($("#sections div.section:nth-child(4)").offset().left<secondSec){
				halt[1] = false;
			}
			if($("#sections div.section:nth-child(5)").offset().left<secondSec){
				halt[2] = false;
			}
			if($("#sections div.section:nth-child(3)").offset().left<secondSec){
				halt[3] = false;
			}
		// }

	    // Calculate every element's movement
		if(scrollContainer.scrollLeft!=tempScroll&&firstSec<$("#sections div.section:last-child").offset().left){
		    if(!halt[0])
		    	marg[0] -= evt.deltaY/4;
		    if(!halt[1])
		    	marg[1] -= (evt.deltaY/4)*3;
		    if(!halt[2])
		    	marg[2] -= (evt.deltaY/4)*1.5;
		    if(!halt[3])
		   		marg[3] -= (evt.deltaY/4)*3.5;

		   	if(secondSec>$("#sections .section:nth-child(2)").offset().left)
		    	h1Move[0] -= evt.deltaY/4;

		   	if(secondSec>$("#sections .section:nth-child(3)").offset().left)
		    	h1Move[1] -= evt.deltaY/4;

		   	if(secondSec>$("#sections .section:nth-child(4)").offset().left)
		    	h1Move[2] -= evt.deltaY/4;

		   	if(secondSec>$("#sections .section:nth-child(5)").offset().left)
		    	h1Move[3] -= evt.deltaY/4;

		   	if(secondSec-1>$("#sections .section:nth-child(2)").offset().left&&$("#title h1 span").css("opacity")==0){
		   		$("#title h1").animate({fontSize:"380%"}).addClass("h1blur");
		   		$("#title h1 span").animate({opacity:"1",fontSize:"50%",top:"90px"});
		   	}
		   	else if(secondSec-1<$("#sections .section:nth-child(2)").offset().left){
		   		$("#title h1").animate({fontSize:"280%"}).removeClass("h1blur");
		   		$("#title h1 span").animate({opacity:"0",fontSize:"70%",top:"50px"});
		   	}
		}
		else if(firstSec<$("#sections div.section:last-child").offset().left){
			if(marg[3]<iniLeft[3]-(evt.deltaY)*3.5){
			    if(!halt[3])
			    	marg[3] -= (evt.deltaY)*3.5;
			}
			if(marg[2]<iniLeft[2]){
			    if(!halt[2])
			    	marg[2] -= (evt.deltaY)*1.5;
			}
			if(marg[1]<iniLeft[1]){
			    if(!halt[1])
			    	marg[1] -= (evt.deltaY)*3;
			}
			if(marg[0]<iniLeft[0]){
			    if(!halt[0])
				    marg[0] -= evt.deltaY;
			}
		}

		// Move every element from left to right and right to left
		// according to the user's scroll direction
		for(let i = 0; i < 4; i++){
		    let j=i+1;
		    if(marg[i]>iniLeft[i]&&!wrap[i]){
		    	$("#ill span:nth-child("+j+")").css("left",iniLeft[i]+"px");
		    	marg[i]=iniLeft[i];
		    }
		    else{
		    	$("#ill span:nth-child("+j+")").css("left",marg[i]+"px");
		    }
		}

		// Allow the element to disappear on the left hand side of the screen
		// and appear on the left hand side
		for(let i = 0; i < 4; i++){
			let j=i+1;
			$.each($("#ill span:nth-child("+j+")"),function(){
			    let p = $(this).offset();
			    if (p.left < 0 - $(this).width()&&!around[i]){
		        	$(this).offset({left:$(window).width()});
		        	marg[i] = $(this).css("left");
		        	marg[i].replace("px");
		        	marg[i] = parseFloat(marg[i]);
			        // console.log("wrap");
			        wrap[i] = true;
			        around[i] = true;
			        halt[i] = true;
			    }
			    else if (p.left > $(window).width()){
		        	$(this).offset({left:-$(this).width()});
		        	marg[i] = $(this).css("left");
		        	marg[i].replace("px");
		        	marg[i] = parseFloat(marg[i]);
			        // console.log("wrap[i]");
			        wrap[i] = false;
			        around[i] = false;
			        // halt[i] = true;
			    }
			});
		}
		// Paralax scrolling on the headings

		for(let i = 0; i < 4; i++){
		    let j=i+2;
		    if(secondSec>$("#sections .section:nth-child(2)").offset().left){
		    	$("#sections .section:nth-child("+j+") h1").css("margin-left",h1Move[i]+"px");		    	// h1Move[i]=secPositions[i];
		    }
		    /*else{
		    	$("#sections .section:nth-child("+j+") h1").css("left",marg[i]+"px");
		    }*/
		}
	});
}