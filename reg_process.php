<?php
require 'connection.php';
require 'current_page.php';
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                SQL for user registration. Implemented by Abhinav Tripathi 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
$email = mysql_real_escape_string($_GET['email']);
if(!filter_var($email, FILTER_VALIDATE_EMAIL))//Checking for valid format email id

  {
  echo '
  <div style="margin : 5%">
  E-mail is not valid. Please add a domain name.Example:abc@xyz.com </div>';
  }
else
  {
 // echo "E-mail is valid";
		if(isset($_GET['first'])&&isset($_GET['last'])&&isset($_GET['email'])&&isset($_GET['repass'])&&isset($_GET['pass'])&&isset($_GET['mobile'])){
			$firstname = mysql_real_escape_string($_GET['first']);
			$lastname = mysql_real_escape_string($_GET['last']);
			$repass = mysql_real_escape_string($_GET['repass']);
			$password = mysql_real_escape_string($_GET['pass']);
			$mobile = mysql_real_escape_string($_GET['mobile']);
			if($password == $repass){
				$qemail = "Select `email_id` FROM `users` WHERE `email_id` = '$email'";
				$qemail_run = mysql_query($qemail);
				if(mysql_num_rows($qemail_run) == 0){// Checking to ensure that email doesn't exist already.Proceed if 0 rows are returned for $qemail query
					$query = "INSERT INTO `users`(`first_name`, `last_name`, `email_id`, `password`, `mobile`) VALUES ('$firstname','$lastname','$email','$password','$mobile')";
					if($run = mysql_query($query) or die(mysql_error())){
					echo 'Registered successfully';
					header('Location:login.php');
					}else{
					//If registration fails due to unsuccessful query, display registration form along with error message
					echo '<br><br><div class="row col-md-offset-3">Could not register</div>';
					include 'register.php';
					}
				}else{
				//If registration fails due to duplicate email, display registration form along with error message
				echo '<br><br><div class="row col-md-offset-3">email already registered</div>';
				include 'register.php';
				}
			}else{
			//If registration fails due to password mismatch, display registration form along with error message
			echo '<br><br><div class="row col-md-offset-3">passwords do not match</div>';
			include 'register.php';
			}
		}
}
?>
