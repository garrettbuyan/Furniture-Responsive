<?php
function runMyQuery($query){
/*------------GET INFO FROM DB .SQL FILE--------*/
$handle = mysql_connect ('localhost','root');
	/*--- IF CONNECTION CAN NOT BE MAD ----*/
	if($handle==false){
		/*----DISPLAY ERROR ---*/
		die ('Connection to .sql was not made'.mysql_error());
	}
/*-----	 CONNECTING TO .SQL ----*/
$DB=mysql_select_db('server_final_DB') or die('DB ERROR'.mysql_error());
/*--- STORE INFORMATION FROM DB IN QUERY ---*/

/*---- MAKE ARRAY OF QUERY INFO ----*/
$result = mysql_query($query) or die("Query issue".mysql_error());
/*--- CLOSE CONNECTION TO DATA BASE ----*/
mysql_close($handle);
//SEND BACK THE INFO TO WHERE THE FUNCTION WAS CALLED
	return $result;
}
?>