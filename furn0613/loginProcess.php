<?php

$enterName="";
if(isset($_POST['Uname'])) {
     $_POST['Uname'] = trim($_POST['Uname']);
    if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['Uname'])){
        $enterName = $_POST['Uname'];
    }
}
$enterPass="";
if(isset($_POST['Upass'])) {
     $_POST['Upass'] = trim($_POST['Upass']);
    if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['Upass'])){
        $enterPass = $_POST['Upass'];
    }
}

//RUN A QUERY TO SEE IF THERE IS ANYONE IN THE USER TABLE BY THAT INFO:
include("includes/function_lib.php");
$result=runMyQuery("SELECT * FROM user_table WHERE username='$enterName' AND password='$enterPass'");

//IF SUCH A USER WAS FOUND....
if ($row= mysql_fetch_array($result)){

	//..DO AWESOME THINGS
	//echo "valid";
	//access a session:
	session_start();
	//look at the unique identifier we're assigned as a session starts
	//echo session_id();
	// store user name 
	$_SESSION['userName']=$row['username'];
	//store user privilege
	$_SESSION['userPriv']=$row['privilege'];
	header("location:allProducts.php");
//...OTHERWISE...
}else{
	
	//MAKE THEM TRY LOGGING IN AGAIN
 
header("location:login.php");
}
?>