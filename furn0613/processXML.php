<?php
/*--STORE WHAT INFO USER ENTERED --*/

$userTitle =$_POST['saleName'];
$userDescript =$_POST['saleDescript'];
$userExp =$_POST['saleExp'];

/*--VAR REFERING TO XML PATH --*/
$xmlPath ='xml/';
/*-- CREATE TEMP BLANK DOC IN PHP --*/
$doc = new DOMDocument();
/*--------ADD TO XML DOCUMENT --------*/
/*-- CREATE THE ROOT ELEMENT --*/
$root = $doc ->createElement('sale');

/*-- ATTACHED TITLE AS ROOT --*/
$doc -> appendChild($root);

/*-- ADD TITLE --*/
$title = $doc -> createElement ('title');
/*-- ATTACH TITLE TO ROOT --*/
$root -> appendChild($title);
/*-- STORING WHAT USER ENTERED --*/
$txtTitle = $doc -> createTextNode($userTitle);
/*--ATTACH TXT AS CHILD --*/
$title ->appendChild ($txtTitle);


/*-- ADD DESCRIPTION --*/
$descript = $doc ->createElement ('descript');
/*-- ATTACH --*/
$root -> appendChild($descript);
/*-- STORING WHAT USER ENTERED --*/
$txtD = $doc -> createTextNode($userDescript);
/*--ATTACH TXT AS CHILD --*/
$descript ->appendChild ($txtD);

/*-- ADD EXP DATE --*/
$exp =$doc -> createElement ('expDate');
/*-- ATTACH --*/
$root -> appendChild ($exp);
/*-- STORING WHAT USER ENTERED --*/
$txtE = $doc -> createTextNode($userExp);
/*--ATTACH TXT AS CHILD --*/
$exp ->appendChild ($txtE);
/*-------------------------------------*/
$id = date('YmdHis');
/*-- use timestamp as doc title --*/
$root -> setAttribute ('id',$id);

$fileName = $xmlPath.'sale'.$id.'.xml';

$doc -> save ($fileName);


	header("Location:allSales.php");




?>