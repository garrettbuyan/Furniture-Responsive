//JavaScript Document checking XML form


function checkXML(){
document.getElementById("saleError").innerHTML="";
 document.getElementById("xmlDerror").innerHTML="";
 document.getElementById("expError").innerHTML="";
        var okXML= true;
        //checking saleName
        if(document.getElementById("saleName").value==""){
            //wont submit
            document.getElementById("saleError").innerHTML=" must enter title";
            var okXML=false;
        }
        //checking saleDescript
        if(document.getElementById("saleDescript").value==""){
            //wont submit
            document.getElementById("xmlDerror").innerHTML=" must enter description";
            var okXML= false;
        }
        //checking saleExp
        if(document.getElementById("saleExp").value==""){
            //wont submit
            document.getElementById("expError").innerHTML=" must enter expiration date";
            var okXML= false;  
        }
        console.log("-------------------------"+okXML+"----------------------------");
    
        return okXML;


}

function testSale(){
    var tstTitle=document.getElementById("saleName").value;
    var tstDescript= document.getElementById("saleDescript").value;
    var tstExp=document.getElementById("saleExp").value;
   if ( document.getElementById("tstT").innerHTML="Sale Title") {
    document.getElementById("tstT").innerHTML=tstTitle;
};

   if ( document.getElementById("tstD").innerHTML="How the sales description will be published.") {
    document.getElementById("tstD").innerHTML=tstDescript;
};
  if ( document.getElementById("tstE").innerHTML="Exp: 00/00/00 ") {
    document.getElementById("tstE").innerHTML="Exp: "+tstExp;
};
}