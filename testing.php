<?php
require 'connection.php';
require 'current_page.php';
/*if(loggedin()){
$id = getuserfield('user_id');
echo 'ID '.$id.'<br>';
*//*	$query = "SELECT COUNT(`userid`) FROM `address` WHERE `userid`='$id'";
	$run = mysql_query($query);
	$rows =mysql_num_rows($run);
	//echo $rows;
	$rows = $id.'0';
	echo $rows;
}*/
/*	$addcount = numadd($id);
	if($addcount==0){
	$addcount = $addcount.'1';
	echo $addcount;
	
	}else if($addcount==1){
	$addcount = $addcount.'2';
	echo $addcount;
	}
*/
$num ="SELECT COUNT(`userid`) FROM `address` WHERE `userid`='2'";
$run = mysql_query($num);
$rows = mysql_fetch_array($run);
echo $rows['COUNT(`userid`)'];
/*}*/

?>