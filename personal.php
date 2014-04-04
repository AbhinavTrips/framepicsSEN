<?php
require 'connection.php';
require 'current_page.php';
if(loggedin()){
if(isset($_GET['first'])&&isset($_GET['last'])&&isset($_GET['email'])&&isset($_GET['mobile'])){
$user = getuserfield['userid'];
echo $user
$first = mysql_real_escape_string($_GET['first']);
$last = mysql_real_escape_string($_GET['last']);
$email = mysql_real_escape_string($_GET['email']);
$mobile = mysql_real_escape_string($_GET['mobile']);
			$update_personal = "UPDATE `users` SET `first_name`='$first',`last_name`='$last',`email_id`='$email',`mobile`='$mobile' WHERE `user_id` = '$user'";
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
	}
	}
}
else{
echo 'Please login to continue';
}
?>