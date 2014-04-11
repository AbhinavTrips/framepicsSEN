<?php
require 'connection.php';
require 'current_page.php';
if(loggedin()){
$user = getuserfield('user_id');
if(isset($_GET['oldpass'])&&isset($_GET['newpass'])&&isset($_GET['repass'])&&!empty($_GET['oldpass'])&&!empty($_GET['newpass'])&&!empty($_GET['repass'])){

$oldpass = mysql_real_escape_string($_GET['oldpass']);
$newpass = mysql_real_escape_string($_GET['newpass']);
$repass = mysql_real_escape_string($_GET['repass']);
	if($newpass == $repass){
	$passcheck = "SELECT `password` FROM `users` WHERE `user_id` = '$user' AND `password`='$oldpass'";
		if($query_run_check = mysql_query($passcheck)){
		$query_num_rows = mysql_num_rows($query_run_check);
			if($query_num_rows==1){
			$update_pass = "UPDATE `users` SET `password`='$newpass'";
				if($query_run_update = mysql_query($update_pass)){
				$query_num_rows = mysql_num_rows($query_run_check);
					if($query_num_rows==1){
					echo 'Password Updated successfully';
					}else{
					echo 'Could not change password';
					}
				} 	
			}else{
			echo 'Old password does not match our records';
			}
		}
	}else{
	 echo 'Passwords do not match';
	}
	}else{
	echo 'All fields are mandatory';
	}
}
else{
echo 'Please login to continue';
}
?>