// JavaScript Document checking contact page filled out properly
function popUp(){
	alert('Thank you for submitting your comment! You\'ll receive a reply email shortly.');
}

function checkContact(){
    var x=document.getElementsByTagName('input')[1].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

 document.getElementById("saleError").innerHTML="";
  document.getElementById("xmlDerror").innerHTML="";
   document.getElementById("expError").innerHTML="";
        var okCon= true;
        //checking saleName
        if(document.getElementById("nameCon").value==""){
            //wont submit
            document.getElementById("saleError").innerHTML=" must enter name";
            var okCon=false;
        }if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
             document.getElementById("xmlDerror").innerHTML=" must conatain '@' and valid .com";
            var okCon= false;
        }
        //checking saleDescript
        if(document.getElementById("email").value==""){
            //wont submit
            document.getElementById("xmlDerror").innerHTML=" must enter email";
            var okCon= false;
        }
        //checking saleExp
        if(document.getElementById("contactTxt").value==""){
            //wont submit
            document.getElementById("expError").innerHTML=" must enter description";
            var okCon= false;  
        }
        console.log("-------------------------");
		if (okCon){
		popUp();

		}
		
		return okCon;
		
		
		
}

