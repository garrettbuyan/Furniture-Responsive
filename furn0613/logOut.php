<?php

include("includes/function_lib.php");
	session_start();
	
	
	

		
		session_destroy();
		
	header('Location:allProducts.php');

?>