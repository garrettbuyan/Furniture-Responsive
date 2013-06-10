<?php
//REDIRECT USER AWAY IF THEY HAVEN'T LOGGED IN
session_start();
if(!isset($_SESSION['userPriv'])){ 
	header('Location:login.php');
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FF-Add Sale</title>
<script src="js/checkXML.js"></script>
 <link rel="stylesheet" type="text/css" href="css/cssReset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveTab.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveDesk.css"/>


</head>

<body>
<div id="wrapAll">

<div id="wrapper">
   
    <header>
        <div id="logo"></div>
        
              <nav id='mainNav'>
    <ul>
      <li><a href="index.php" id="link">Home</a></li>
        <li><a href="allProducts.php" id="link">Furniture</a></li>
        <li><a href="allSales.php" id="link">Sales</a></li>
	<li><a href="contact.php" id="link">Contact</a></li>
       <!-- <li><a href="#" id="link">About</a></li>CHANGE TO CREDITS -->
        
        <li><a href='login.php' id='link'>Login</a></li>
        </ul> </nav>
        <?php if(isset($_SESSION['userName'])){
    if($_SESSION['userPriv']=='admin'){
   
 ?><ul>
<span id="loggedIn">
    <?php echo  "<li><p class='userName'>Welcome, ".$_SESSION['userName']."! What would you like to do?</p></li>" ?>

<li ><a href="addFurn.php" class="Slink" >Add Furniture</a></li>
<li ><a href="addXML.php" class="Slink">Add Sale</a></li>
<li ><a href="logOut.php" class="Slink">Log Out</a></li>


    <?php }/*closes inner*/ } /*closes outer */?> 
    </ul>    </span></header>
        <div id="content">
          <div id="pageHead"><h1 class="pagetitle">Add Sale</h1>
     <p class="salesDirect">Fill out the information below to add another sale item.<br> Click 'Test Sale' to preview the sale before adding.</p>
          </div>  
             <section id='contact'>
		<form action="processXML.php" method="post" enctype="multipart/form-data" id='adding' onSubmit="return checkXML();">
			<p>Sale Title<br> <input type="text" name="saleName" id="saleName"/><span id="saleError"></span></p>
			<p>Description <br></p><p><textarea type="text"  cols="20" rows="10" name="saleDescript" id="saleDescript"></textarea><span id="xmlDerror"></span></p>
			<p>Expiration<br><input type="tel" name="saleExp" id="saleExp"/><span id="expError"></span></p>
            <p><input type="submit" value="Add Sale" class='subCon'>  <input type="submit" value="Test Sale" class='subCon' id="testView" onclick="testSale()"></p>
          
		</form>
	  
</div>

<span id="float"></span>



          
   <h2 class="salesPrev">Sale Preview</h2>
          <div class="salesTest">
          <p> <h2 class="salesTitle" id="tstT">Sale Title</h2></p>
          <p> <h3 class="salesDescript" id="tstD">How the sales description will be published.</h3></p><br>
          <p id="tstE">Exp: 00/00/00 </p>
          <p>Sale Number: 1234567</p>

          </div>
      
  </section>

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
</div></div>




</body>
</html>