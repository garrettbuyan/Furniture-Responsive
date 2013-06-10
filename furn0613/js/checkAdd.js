function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
function checkAdd(){
    var okSubmit= true;
document.getElementById("nameError").innerHTML="";
document.getElementById("priceError").innerHTML="";
		document.getElementById("descriptLrg").innerHTML="";
		document.getElementById("descriptSml").innerHTML="";
  // function to only allow numeric key presses in a textbox
// this doesn't stop pasting of non numeric values



	if(document.getElementById("newname").value==""){
		//won't submit if no name is entered 
		document.getElementById("nameError").innerHTML=" must enter name";
		console.log("hit");
		var okSubmit=false;	
	}

if(document.getElementById("newprice").value==""){
		//won't submit if no name is entered 
		document.getElementById("priceError").innerHTML=" must enter price";
		console.log("hit");
		var okSubmit=false;	
	}
	if(document.getElementById("newDescriptLrg").value==""){
		//won't submit if no name is entered 
		document.getElementById("descriptLrg").innerHTML=" must enter description";
		console.log("hit");
		var okSubmit=false;	
	}
	if(document.getElementById("newDescriptSml").value==""){
		//won't submit if no name is entered 
		document.getElementById("descriptSml").innerHTML=" must enter brief description";
		console.log("hit");
		var okSubmit=false;	
	}
    return okSubmit;
}