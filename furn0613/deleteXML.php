<?php
//bring in the code to run a query:
	//include("includes/function_lib.php");
	$doc=$_POST['deleteXML'];
	//echo $doc;
            //mysql command to remove item from database based upon id #
unlink ("xml/".$doc);




	 //redirect user to index pg:
	header("Location:allSales.php");



?>
