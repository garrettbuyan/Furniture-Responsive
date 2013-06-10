<?php
//REDIRECT USER AWAY IF THEY HAVEN'T LOGGED IN
session_start();
/*if(!isset($_SESSION['userPriv'])){ 
	header('Location:login.php');
}*/
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FF-All Sales</title>

 <link rel="stylesheet" type="text/css" href="css/cssReset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveTab.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveDesk.css"/>


</head>

<body>

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
   
 ?>
<span id="loggedIn"><ul>
    <?php echo  "<li><p class='userName'>Welcome, ".$_SESSION['userName']."! What would you like to do?</p></li>" ?>

<li ><a href="addFurn.php" class="Slink" >Add Furniture</a></li>
<li ><a href="addXML.php" class="Slink">Add Sale</a></li>
<li ><a href="logOut.php" class="Slink">Log Out</a></li>


    <?php }/*closes inner*/ } /*closes outer */?> 
    </ul>    </span></header>
        <div id="content">
          <div id="pageHead"><h1 class="pagetitle">All Sales</h1>
  <p class="salesDirect">Call 1-800-FURN to place order. Give the 'Sale Number' to take advantage of the sale.</p>
          </div>  
          <span id="saleMargin"></span>
       <?php  
        /*-- var refering to xmp path --*/
		$xmlPath = 'xml/';
		/*-- open connection --*/
          $handle = opendir($xmlPath);
         /*-- while loop checking each file in folder --*/
          while (($file = readdir ($handle))!== false && $file!="._.DS_Store" ){
			  // skip if item not file
			  if(is_dir($xmlPath.$file))continue;
			  
			/*-- load xml from crnt file --*/
          $saleFile = simplexml_load_file($xmlPath.$file);
          // store as var from xml 
          $sTitle = $saleFile -> title;
		  $sDescript = $saleFile -> descript;
		  $sExp = $saleFile -> expDate;
		  $sId = $saleFile ['id'];
          ?>
          <div class="sales">
          <p> <h2 class="salesTitle"><?php echo $sTitle; ?></h2></p>
          <p> <h3 class="salesDescript"><?php echo $sDescript; ?></h3></p><br>
          <p>Exp: <?php echo $sExp; ?></p>
          <p>Sale Number: <?php echo $sId; ?></p>
          <p> <form action="deleteXML.php" method="post" id="deleteXML"  enctype="multipart/form-data">
	<input type="hidden" name="deleteXML" value="<?php echo $file;?>">
<input type="submit" value="Delete"  ></form>
</p>
          </div>
          <?php 
		  //close loop
		  } ?>
          </div>

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


          

<body>
</body>
</html>