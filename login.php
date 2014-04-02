
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php
require 'connection.php';
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

 
  <form class="navbar-form navbar-right" role="form" action="<?php echo $current_file; ?>" method="post">
            <div class="form-group">
              <input name ="login_user" type="text" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <input name="login_pass" type="password" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form> 
  <!--    <form class="form-signin" role="form" action="<?php echo $current_file; ?>" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="login_user" type="text" class="form-control" placeholder="username" required autofocus>
        <input name ="login_pass" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>-->

</body>

</html>
