<?php
require 'connection.php';
//require 'current_page.php';
//require 'current_page.php';
if(isset($_POST['login_user'])&&isset($_POST['login_pass'])){
$user = $_POST['login_user'];
$password = $_POST['login_pass'];
$password_hash = md5($password);


$query = "SELECT `user_id` FROM `users` WHERE `email_id`='".mysql_real_escape_string($user)."' AND `password`='".mysql_real_escape_string($password)."' ";
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){
		echo 'user does not exist';
	} 	else if($query_num_rows==1){
		$user_id = mysql_result($query_run,0,'user_id');
		$_SESSION['user_id']= $user_id;
		header('Location: home.php');
		

		}
	}
}
if(loggedin()){
	$name = getuserfield('first_name');
	$_GET[$name];
	}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
      <script src="respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    

      <form class="form-signin" role="form" method="post" action="<?php echo $current_file; ?>">
        <h3 class="form-signin-heading">Please sign in to continue</h3>
        <input name ="login_user" type="text" class="form-control" placeholder="Email address" required autofocus>
        <input name="login_pass" type="password" class="form-control" placeholder="Password" required>
     <!--   <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

     <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
