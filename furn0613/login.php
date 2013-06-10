<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/cssReset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveTab.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveDesk.css"/>

<script src="js/validation.js"></script>
<title>FF-Login</title>
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
<li ><a href="#" class="Slink">Log Out</a></li>


    <?php }/*closes inner*/ } /*closes outer */?> 
    </ul>    </span></header>
        <div id="content">
          <div id="pageHead"><h1 class="pagetitle">Login</h1>
         <p class="salesDirect">To log on and see functionality, use 'boss' as both user name and password.<br>
          Once logged in, you are able to add and delete furniture records as well as sales records.</p>
          </div>
          <section id='contactLrg'>
          <form action="loginProcess.php" method="post" id="adding" onSubmit="return checkform();">
            <p>User Name<br><input name='Uname' type='text' id="Uname"><span id="userN"></span></p>
            <p>User Password<br><input name='Upass' type='password' id="Upass"><span id="userP"></span></p>
            <p><input type='submit' class="subCon"</p>

            
            
          </form>
          <br><br>
          
	  </section>
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
</div></p>
</body>
</html>