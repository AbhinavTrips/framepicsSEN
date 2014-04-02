<?php
require 'connection.php';
require 'current_page.php';
if(loggedin()){
$id = mysql_real_escape_string($_GET['id']);
$i = 0;
$j = 0;
$k = 0;
$query1 = "UPDATE `address` SET `def`='2' WHERE `userid`='1' AND `def`='1'";
$query2 = "UPDATE `address` SET `def`='1' WHERE `userid`='1' AND `aid`='$id'";
$query3 = "UPDATE `address` SET `def`='0' WHERE `userid`='1' AND `def`='2'";
	if($query_run = mysql_query($query1)){
//	echo " Default address changed ";
	$i = 1;
	}else{
	echo 'Code 1: could not change default address ';
	$i = 0;
	}

	if($query_run = mysql_query($query2)){
	$j = 1;
	}else{
	echo 'Code 2: could not change default address ';
	$j = 0;
	}

	if($query_run = mysql_query($query3)){
	$k = 1;
	}else{
	echo 'Code 3: could not change default address ';
	$k = 0;
	}

	if($i == 1 && $j == 1 && $k == 1){
	echo " Default address changed successfully. Please reload the page to see changes. ";
	}else{
	echo " An error occurred ";
	}
}
?>
