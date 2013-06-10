<?php
//REDIRECT USER AWAY IF THEY HAVEN'T LOGGED IN
session_start();
if(!isset($_SESSION['userPriv'])){ 
	header('Location:login.php');
}
?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/cssReset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<link rel="stylesheet" type="text/css" href="css/forms.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveTab.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveDesk.css"/>

<script src="js/checkAdd.js"></script>

<title>Add Furniture</title>
</head>

<body>
<div id="wrapAll">
<!-- side bar user nav -->


<!-- side bar end -->


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
          <div id="pageHead"><h1 class="pagetitle">Add Furniture</h1>

     <p class="salesDirect">Fill out the information below to add more furniture to catalog.</p>

          </div>  
        
        
        
            <section id='contactLrg'>
              
            <form action="addProcess.php" method="post" enctype="multipart/form-data" id="adding" onSubmit="return checkAdd();">
<p>Furniture Name<br> <input type="text" name="newname" id="newname"><span id="nameError"></span></p>
<p>Furniture Price<br> <input type="text" name="newprice" id="newprice" onkeypress="return isNumberKey(event)"><span id="priceError" ></span></p>
<p>New Description </p><textarea form="adding" cols="40" rows="10" name="newDescriptLrg" id="newDescriptLrg"></textarea><span id="descriptLrg"></span>
<p>New Description Short<br> <input type="text" name="newDescriptSml" id="newDescriptSml"><span id="descriptSml"></span></p>
<p>Furniture Large Image (250x250 jpg, please) <input type="file" name="newlrg"></p>
<p>Furniture Thumbnail Image (150x150 jpg, please) <input type="file" name="newthumb"></p>

<p><input type="submit" class='subCon' value="Add Furniture"> </p><!-- on submit, information is stored and passed along to the addProcess.php then added to DB -->
            
          
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
</div></div>
</body>
</html>
