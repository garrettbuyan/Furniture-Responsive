<?php
session_start();
if(isset($_SESSION['user_name'])){
echo "WELCOME".$_SESSION['user_name'];
}
/*RETRIEVE AND STORE INFORMATION FOR DISPLAY*/
/*FIRST STEP : SOURCE YOU SQL
	THIS CODE DOES NOT ACCESS IT FROM THE .SQL FILE....SRC IT!*/
	
/*READ IN THE DB CONNECTION CODE FROM A SEPRATE FILE:*/
include("includes/function_lib.php");
//EXUCUTE A FUNCTION FROM THAT INCLUDE
//INTERCEPT THE CHOSEN ID FROM THE INDEX PAGE:
$chosen_id=$_POST['view_id'];

/*THIS $result HAS TO BE SAME NAME AS WHILE LOOP*/
$result=runMyQuery("SELECT * FROM furniture_table WHERE id=$chosen_id");
// if nothing is to be returned, loop back to all products or stop from moving forward
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/cssReset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!-- <script src="js/arrow.js"></script> -->
<?php
       /*----------- STORE INFO FROM DATABASE ---------*/
    
       while ($row=mysql_fetch_array($result)){
	    $f_id = $row['id'];/*store id*/
            $f_name= $row['item_name'];/*store item name*/
            $f_price = $row['price'];/*store price*/
            $f_smlDescript = $row['SMLdescript'];/*store sml description*/
            $f_descript = $row['descript'];/*store lrg description*/
            $f_largeImg = $row['large_img'];/*store lrg img*/
            $f_smlImg = $row['sml_img'];/*store sml img*/
       ?>
<title>FF-Products-<?php echo $f_name ?></title>
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
         
        
          <div id="pageHead"><h1 class="pagetitle"><?php echo $f_name ?></h1></div>  <!-- output item name based on var -->
            
       <div id="Ldescript">
            <img  id="Limg" src="imgs/<?php echo $f_largeImg ?>"><!--output item lrg img based on var -->
            <div id='lrgTxt'>
                <p><?php echo $f_descript ?></p><!--output description based on var -->
		<p class="lrgPrice">$<?php echo $f_price?>             </p><!--output price based on var*-->
	<p class="lrgItem">Item #:<?php echo $f_id ?></p><!--output item # based on var*-->
                <p class="viewAll"><a href="allProducts.php">View all Items</a></p>
           
            
	<?php          
   //////////// IF there's a product with a lower ID, have a PREV link ///////////////        
          $resultPrev=runMyQuery("SELECT * FROM furniture_table WHERE id < $chosen_id ORDER BY id DESC LIMIT 1");
		  //if that query found a row
		  if ($row= mysql_fetch_array($resultPrev)){
			  //get the id of that row
			  $prev_id=$row['id'];
         ?>  
	   <form action="descript.php" method="post" id="nxtF" >
                        <input type="hidden" name="view_id" id="view_id" onKeyDown="return arrow(event)" value='<?php echo $prev_id; 
				/* trying to get the page to stop if records arn't there */		
 ?>'<!--output id based on var-->
                        <input type="submit" value="Previous" class="prev" ></form>
   <?php                      
		  } /////close IF for PREV link
   //////////// IF there's a product with a higher ID, have a NEXT link ///////////////        
                  $resultNext=runMyQuery("SELECT * FROM furniture_table WHERE id > $chosen_id ORDER BY id  LIMIT 1");      
                         if ($row= mysql_fetch_array($resultNext)){
			  //get the id of that row
			  $next_id=$row['id'];
                ?>              
        <form action="descript.php" method="post" id="nxtF">
                        <input type="hidden" name="view_id" id="view_id" value='<?php echo $next_id; 
				/* trying to get the page to stop if records arn't there */		
 ?>'<!--output id based on var-->
                        <input type="submit" value="Next" class="nxtP"></form>
                        
        <?php                      
						 }
                        
                        
                ?>    
               
       </div>
                    
          
        
       </div><!-- CONTENT DIV CLOSED -->
            
              
            
            
          
            
            
            
            <!-- END WHILE LOOP AROUND HERE -->
            <?php } ?>
            
            
            
            
            
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
</div></div>
</body>
</html>
