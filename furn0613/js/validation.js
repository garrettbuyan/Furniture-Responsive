// JavaScript Document


function checkform(){
		document.getElementById('userN').innerHTML='';
	document.getElementById('userP').innerHTML='';

if(document.getElementById("Uname").value==''){
	document.getElementById('userN').innerHTML=' must enter user name';
	var okToSubmit=false;	
}
if(document.getElementById("Upass").value==''){
	document.getElementById('userP').innerHTML=' must enter user password';
	var okToSubmit=false;
}

return okToSubmit;
}