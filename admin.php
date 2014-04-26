<?php
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                             Implemented by Abhinav Tripathi. 
This file should be included wherever we want session info.
It also has several useful functions

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER'])){
	$referer = $_SERVER['HTTP_REFERER']; //tells from which page we have reached on current page
	}

function adloggedin(){ // This function should be used to check whether admin is logged in or not. It returns true if admin is logged in else returns false
if(isset($_SESSION['adminid'])&& !empty($_SESSION['adminid'])){
	return true;
	}	else{
		return false;
		}
}

function getadminfield($field){// This function can be used to fetch any field from admin table for the current loggedin admin
	$query="SELECT `$field` FROM `admin` WHERE `adminid` = '".$_SESSION['adminid']."'";
	if($query_run = mysql_query($query)){
		if($query_result = mysql_result($query_run, 0, $field)){
		return $query_result;		
		}
	}
}

?>
