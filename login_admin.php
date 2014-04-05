<?php
require 'connection.php';
require 'admin.php';
//require 'current_page.php';
if(isset($_POST['login_user'])&&isset($_POST['login_pass'])){
$user = $_POST['login_user'];
$password = $_POST['login_pass'];
echo $user;
echo $password;
$query = "SELECT `adminid` FROM `admin` WHERE `name`='".mysql_real_escape_string($user)."' AND `password`='".mysql_real_escape_string($password)."' ";
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){
		echo 'user does not exist';
	} 	else if($query_num_rows==1){
		$user_id = mysql_result($query_run,0,'adminid');
		$_SESSION['adminid']= $user_id;
		//header('Location: home.php');
		

		}
	}
}
if(adloggedin()){
	$name = getadminfield('adminid');
	echo $name;
	}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Admin Login</title>

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

    <div class="container">


 
  <form class="form-signin" role="form" action="<?php echo $current_file; ?>" method="post">
         <h2 class="form-signin-heading">Please sign in</h2>

            <div class="form-group">
              <input name ="login_user" type="text" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <input name="login_pass" type="password" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form> 

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
