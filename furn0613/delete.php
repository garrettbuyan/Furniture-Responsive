<?php
//bring in the code to run a query:
	include("includes/function_lib.php");
	$chosen_id=$_POST['delete_id'];
            //mysql command to remove item from database based upon id #
$result = runMyQuery("delete from furniture_table where id = $chosen_id ");



	 //redirect user to index pg:
	header("Location:allProducts.php");



?>
