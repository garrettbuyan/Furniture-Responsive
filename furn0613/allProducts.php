<?php
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
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/cssReset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveTab.css"/>
<link rel="stylesheet" type="text/css" href="css/responsiveDesk.css"/>


<title>FF-All Furniture</title>
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
    
       <!-- <li><a href='addFurn.php' id="link">Add Furniture</a></li>
      	<li><a href="addXML.php" id='link'>Add Sale</a></li>-->
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
    </ul>    </span>
   
      

  
  </header>
        <div id="content">
          <div id="pageHead"><h1 class="pagetitle">Furniture by <?php 
		  if ($sortCol == 'item_name'){
			$sortCol='Item Name';  
		  }
		    if ($sortCol == 'id'){
			$sortCol='Item Number';  
		  }
		     if ($sortCol == 'price'){
			$sortCol='Price';  
		  }
		 echo $sortCol; 
				
		
		  ?></h1>
         
          </div>  
            <div id='sort'>
            <ul class="sortNav">
                <li><a href="allProducts.php?ordercol=item_name" >Item Name</a></li>
            <li><a href="allProducts.php?ordercol=price" >Price</a></li>
            <li><a href="allProducts.php?ordercol=id" >Item Number</a></li>
            </ul>
            </div>
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
                               <!--output item name based on var-->
              <ul id="items"><h3><?php echo $f_name ?></h3>
              
                <form action="descript.php" id="smlImg" method="post">
                	<input type="image" src="imgs/<?php echo $f_smlImg ?>">
			<input type="hidden" name="view_id" id="view_id" value='<?php echo $f_id ?>'><!--output id based on var-->
                        <input type="submit" value="">
                
                </form>  <!--------- SHOW ONLY DELETE FUNCTION IF A USER IS LOGGED IN ------->
         <?php
         if(isset($_SESSION['userPriv'])){
            if($_SESSION['userPriv']=='admin'){
         ?>
                  <!----when delete is clicked, go out to delete.php and run process---->
                 <div id="delete"> 
                 <li > 
                   <form action="delete.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="delete_id"  value="<?php echo $f_id?>">
<input type="submit" value="Delete"  >


</form>
           
          
                </li></div><!-- output item img based on var-->
                 <?php }/*closes inner*/ } /*closes outer */?>  
                  
                <li id="smlDescript"><p><?php echo $f_smlDescript ?></p><!--output item description based on var-->
                   <form action="descript.php" method="post">
                        <input type="hidden" name="view_id" id="view_id" value='<?php echo $f_id ?>'><!--output id based on var-->
                        <input type="submit" value="click for more details">
                     <p class="price">$<?php echo $f_price ?></p>
                    <p class="num">Item #<?php echo $f_id ?></p>
                   </form></li> 
                     <li </li> 
       
    			       
            </ul>
            
            
         
            
            
            <!-- END WHILE LOOP HERE -->
            <?php } ?>
            
            
            
            
            
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
