<!--<?php
/*---START SESSIONS FOR WHEN/IF USER IS LOGGED IN ----*/
session_start();


include("includes/function_lib.php");

/*$result=runMyQuery("SELECT * FROM furniture_table");*/
//run query to drop table


//run query to create table

//insert original 10 records

/*---------- ORDER INFORMATION BY WHAT USER SELECTS --------*/
$sortCol="id";
/*--- IF PAGE HAS BEEN REFRESHED BY USERES SELECTION OF ORDER LINK, 'orderCol' PASSED $_GET ARRAY ---*/
if(isset($_GET['ordercol'])){
    $sortCol=$_GET['ordercol'];
    
}
$result=runMyQuery("SELECT * FROM furniture_table ORDER by $sortCol");
?>-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/cssReset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveTab.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveDesk.css"/>


<script src="js/checkCont.js" ></script>

<title>FF-Contact</title>
</head>

<body>
<div id="wrapAll">
<!-- side bar user nav -->

    
<!-- side bar end -->
<div id="wrapper">

 
    <header>
        <div id="logo"></div>
        
        
       <nav id='mainNav'>
    <ul >
	<li><a href="index.php" id="link">Home</a></li>
        <li><a href="allProducts.php" id="link">Furniture</a></li>
        <li><a href="allSales.php" id="link">Sales</a></li>
	<li><a href="contact.php" id="link">Contact</a></li>
        <!-- <li><a href="#" id="link">About</a></li> --> 
        
        <li><a href='login.php' id='link'>Login</a></li>
</ul>
       
   
      

  
  </header>
        <div id="content">
          <div id="pageHead"><h1 class="pagetitle">Contact Us</h1>
          <p class="salesDirect">For any questions or comments please fill out form below.<br> Remeber to call 1-800-Furn to place an order.</p>
          </div>  
          <span id="contactMargin"></span>
	  <section id='contactLrg'>
	  <form method='post'  name='contact' enctype='multipart/form-data' onSubmit="return checkContact();">
	    <fieldset class='contactForm'>
	   <p>Name:<br class="mobileForm"> <input type='text' name='name' class="nameCon" id="nameCon"/ placeholder=" *Required"><span id="saleError"></span></p>
	   <p>E-mail Address:<br class="mobileForm"> <input type='text' name='email' id="email" placeholder=" *Required"/><span id="xmlDerror"></span></p>
	   <p>Comments</p><textarea cols='50' rows='4' name='comment' id="contactTxt" class="contactTxt" placeholder=" *Required"></textarea><span id="expError"></span>
	   
	    <p><input type="submit"  class='subCon' value="Submit" /></p>   
	    </fieldset>
	  </form>
	   
         </section>
         
           
            
            
        </div><!-- CONTENT DIV CLOSED -->
        
        
        
        
        
        
        
 <div id="footer">
    
     
       <ul >
    <li><a href="index.php" class="foot">Home</a>&nbsp;|</li>
        <li><a href="allProducts.php" class="foot">All Furniture</a>&nbsp;|</li>
        <li><a href="allSales.php" class="foot">All Sales</a>&nbsp;|</li>
       
   
	<li><a href="contact.php" class="foot">Contact</a>&nbsp;|</li>
    
        <li><a href='login.php' class='foot'>Login</a></li>
        
        </ul>
	<p>1-800-FURNISH</p>

    
  </div> 
<!-- closing wrapper  -->
</div>


</div>
</body>
</html>
