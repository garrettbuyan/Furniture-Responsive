<?php

//bring in the code to run a query:
	include("includes/function_lib.php");
	
	//make var to store the funriture info the user inputed on addFurn.php:
		$new_name=$_POST["newname"];
		$new_price=$_POST["newprice"];
                $new_descriptSml=$_POST["newDescriptSml"];
                $new_descriptLrg=$_POST["newDescriptLrg"];
                $lrg_img=$_POST["newlrg"];
                $thumb_img=$_POST["newthumb"];
                
        //-----------------------------
/*              if(isset($_POST['newname'])) {
     $_POST['newname'] = trim($_POST['newname']);
    if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['newname'])){
        $new_name = $_POST['newname'];
    }
}  
              if(isset($_POST['newDescriptSml'])) {
     $_POST['newDescriptSml'] = trim($_POST['newDescriptSml']);
    if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['newDescriptSml'])){
        $new_name = $_POST['newDescriptSml'];
    }
}  */
        
        
	//----------------------------	
	// make var to store the new id for new record:
	$new_id=0;
	//retrieve the highest pk id number from the furniture table:
	$result = runMyQuery('select * from furniture_table ORDER BY id DESC LIMIT 1');
	while ($row= mysql_fetch_array($result)){
	$new_id=$row['id'];
	}
		//add one to the highest id being used:
		$new_id++;
	//make name for upload image, concatenate  'sml' then PK ID
	 $thumb_img='sml'.$new_id.$_FILES['newthumb']['name'];
         //make name for upload image, concatenate'lrg' then PK ID
	$lrg_img='lrg'.$new_id.$_FILES['newlrg']['name'];
		
	//move the uploaded JPG to a location and filename of our choice
	move_uploaded_file($_FILES['newthumb']['tmp_name'], "imgs/$thumb_img");
	move_uploaded_file($_FILES['newlrg']['tmp_name'], "imgs/$lrg_img");
        
        
	
	runMyQuery("INSERT INTO furniture_table
	 (id, item_name, price, SMLdescript, descript, large_img, sml_img)
	 values
        ($new_id, '$new_name', $new_price, '$new_descriptSml', '$new_descriptLrg', '$lrg_img','$thumb_img')
	 ");
	
	 //redirect user to main page:
	header("Location:allProducts.php");

?>