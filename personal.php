<?php
require 'connection.php';
require 'current_page.php';
if(loggedin()){

//echo 'Hi This is Sneha';
	if(isset($_GET['first'])&&isset($_GET['last'])&&isset($_GET['email'])&&isset($_GET['mobile'])&&!empty($_GET['first'])&&!empty($_GET['last'])&&!empty($_GET['email'])&&!empty($_GET['mobile'])){
	$user = getuserfield('user_id');
	//echo $user;
	$first = mysql_real_escape_string($_GET['first']);
	$last = mysql_real_escape_string($_GET['last']);
	$email = mysql_real_escape_string($_GET['email']);
	$mobile = mysql_real_escape_string($_GET['mobile']);
	$update_personal = "UPDATE `users` SET `first_name`='$first',`last_name`='$last',`email_id`='$email',`mobile`='$mobile' WHERE `user_id` = '$user'";
			if($query_run_update = mysql_query($update_personal)){
			echo 'Personal Information updated successfully';
			}else{
			echo 'Could not update information';
			}
				
	}else{
	echo 'Please fill all the fields';
	}
}else{
 echo 'Please login to continue';
}
?>