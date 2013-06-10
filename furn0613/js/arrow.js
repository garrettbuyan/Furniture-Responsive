// JavaScript Document

onload = init;

function init(){
	document.getElementsByTagName("body")[0].onkeydown = function(event){arrow(event)};
	
}

function arrow(){
	
	switch (event.keyCode){
	case 37:	
	
		console.log("left arrow");
	}
	
	
}//.value=;