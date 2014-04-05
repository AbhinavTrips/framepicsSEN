<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER'])){
	$referer = $_SERVER['HTTP_REFERER'];
	}

function adloggedin(){
if(isset($_SESSION['adminid'])&& !empty($_SESSION['adminid'])){
	return true;
	}	else{
		return false;
		}
}

function getadminfield($field){
	$query="SELECT `$field` FROM `admin` WHERE `adminid` = '".$_SESSION['adminid']."'";
	if($query_run = mysql_query($query)){
		if($query_result = mysql_result($query_run, 0, $field)){
		return $query_result;		
		}
	}
}

/*function numadd($id){
$num ="SELECT COUNT(`aid`) FROM `address` WHERE `userid`='$id'";
$run = mysql_query($num);
$rows = mysql_fetch_array($run);
return $rows['COUNT(`aid`)'];
	}
*/
?>
