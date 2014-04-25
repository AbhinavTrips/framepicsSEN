<!DOCTYPE html>
<html lang="en">
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                                          Implemented by Nachiket Desai. Layout by Abhinav Tripathi. 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>User Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
      <script src="respond.min.js"></script>
    <![endif]-->
  </head>
<body>


<?php
require 'connection.php';
require 'current_page.php';

if(isset($_POST['login_user'])&&isset($_POST['login_pass'])){
$user = $_POST['login_user'];
$password = $_POST['login_pass'];
$password_hash = md5($password);
if(!filter_var($user, FILTER_VALIDATE_EMAIL))//Checking for valid format email id
  {
  echo '
  <div style="margin : 5%">
  E-mail is not valid. Please add a domain name.Example:abc@xyz.com </div>';// This message gets displayed for wrong email id format
  }
  
//If email is valid then proceed to the below section  
else
  {
$query = "SELECT `user_id` FROM `users` WHERE `email_id`='".mysql_real_escape_string($user)."' AND `password`='".mysql_real_escape_string($password)."' ";
//Checking database for user with supplied email id
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){ // query returns 0 rows if no user exists with the supplied email
		echo 'user does not exist';
	} 	else if($query_num_rows==1){ // Query returns 1 for a unique user
		$user_id = mysql_result($query_run,0,'user_id');
		$_SESSION['user_id']= $user_id;
		header('Location:home.php');
		

		}
	}
	}
}
?> 
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Framepics</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
      		<li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
         <?php include 'search.php'; ?>
        
 </div>
      </div>
    </div>
    <div class="row">
<!----------------------------------------------------------------------- Login Forn starts here --------------------------------------------------------------------------------->         
        <form class="form-signin" role="form" action="<?php echo $current_file; ?>" method="post">
         <h2 class="form-signin-heading">Login to continue</h2>

            <div class="form-group">
              <input name ="login_user" type="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <input name="login_pass" type="password" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>
          </form> 
<!----------------------------------------------------------------------- Login Forn ends here ----------------------------------------------------------------------------------->         
    </div>

 
</body>

</html>
