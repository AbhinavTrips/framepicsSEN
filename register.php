<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
	<script src="jsfunc.js"></script>
</head>

<body>

<h2>Register Now!</h2>
  <form class="form-horizontal" id ="form" role="form">
  
           	<label>Name</label> 
      <div class="row">
                      
	         <div class="col-md-6  "><input id ="firstName" name ="first_name" type="text" placeholder="Enter your First Name" class="form-control" required></div>
             <div class="col-md-5"> <input id ="lastName" name="last_name" type="text" placeholder="Enter your Last Name" class="form-control" required><br></div></div>
            
            <label >Email</label>
            <div class="row">
           <div class="col-md-6"> <input id ="email" name ="email_id" type="email" placeholder="Enter your email-id" class="form-control" required></div>
           <div class="col-md-5 "> <input id ="confirmEmail" name="re_email" type="email" placeholder="Re-enter your email-id" class="form-control" required><br></div></div>
            
            <label>Password</label>
            <div class="row">
           <div class="col-md-6"> <input id="password" name ="password" type="password" placeholder="Enter a new password" class="form-control" required><br></div></div>
            <label>Mobile</label>
            <div class="row">
           <div class="col-md-6"> <input id="mobile" name ="mobile" type="tel" placeholder="Enter 10 digit mobile number" class="form-control" required><br></div></div>
            
			<div class="row">
			<div class="col-md-5">
            <button type="button" class="btn btn-primary" onclick="reg()">Register</button></div></div>
          </form> 
          <div id="regDiv"></div>
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
