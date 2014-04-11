<?php
require 'connection.php';
require 'current_page.php';
//if($referer == 'index.php'){
//echo 'Hello';
//var_dump($_GET);
$email = mysql_real_escape_string($_GET['email']);
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
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
		//	$email = mysql_real_escape_string($_GET['email']);
			$repass = mysql_real_escape_string($_GET['repass']);
			$password = mysql_real_escape_string($_GET['pass']);
			$mobile = mysql_real_escape_string($_GET['mobile']);
			if($password == $repass){
				$qemail = "Select `email_id` FROM `users` WHERE `email_id` = '$email'";
				$qemail_run = mysql_query($qemail);
				if(mysql_num_rows($qemail_run) == 0){
					$query = "INSERT INTO `users`(`first_name`, `last_name`, `email_id`, `password`, `mobile`) VALUES ('$firstname','$lastname','$email','$password','$mobile')";
					echo $query;
					if($run = mysql_query($query) or die(mysql_error())){
					echo 'Registered successfully';
					}else{
					
					echo '<br><br><div class="row col-md-offset-3">Could not register</div>';
					include 'register.php';
					}
				}else{
				echo '<br><br><div class="row col-md-offset-3">email already registered</div>';
				include 'register.php';
				}
			}else{
			echo '<br><br><div class="row col-md-offset-3">passwords do not match</div>';
			include 'register.php';
			}
		}
}
?>
