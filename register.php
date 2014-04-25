<!DOCTYPE html>
<html>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                                           Implemented by Abhinav Tripathi. 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>User Registration</title>

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
<!------------------------------------------------------------------------ Navigation Bar Starts Here ---------------------------------------------------------------------------->

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
            <li><a href="login.php"><span class="glyphicon glyphicon-off"></span>Login</a></li>
      		<li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
         <?php include 'search.php'; ?>
        
 </div>
      </div>
    </div>
    
<!------------------------------------------------------------------------ Navigation Bar Ends Here ---------------------------------------------------------------------------->

<!------------------------------------------------------------------------  Main Body Starts Here ---------------------------------------------------------------------------->


 <div class="row  col-md-offset-3"> 
 <div class="row col-md-6 " style="margin:5%">
 
<!------------------------------------------------------------------- Registration Form starts here ------------------------------------------------------------------------------>         

  <form class="form-horizontal" id ="form" role="form" method="get" action="reg_process.php">
  
      <div class="row">
           	<label> Name</label> 
	         <div class="col-md-6  "><input id ="first" name ="first" type="text" placeholder="Enter your First Name" class="form-control" required></div>
             <div class="col-md-5"> <input id ="last" name="last" type="text" placeholder="Enter your Last Name" class="form-control" required><br></div></div>
            
            <label >Email</label>
            <div class="row">
           <div class="col-md-6"> <input id ="email" name ="email" type="email" placeholder="Enter your email-id" class="form-control" required><br></div></div>
            
            <label>Password</label>
            <div class="row">
           <div class="col-md-6"> <input id="pass" name ="pass" type="password" placeholder="Enter the password" class="form-control" required></div>
           <div class="col-md-5 "> <input id ="repass" name="repass" type="password" placeholder="Re-enter a new password" class="form-control" required><br></div></div>
            <label>Mobile</label>
            <div class="row">
           <div class="col-md-6"> <input id="mobile" name ="mobile" type="tel" placeholder="Enter 10 digit mobile number" class="form-control" required><br></div></div>
            
			<div class="row">
			<div class="col-md-5">
            <button type="submit" class="btn btn-primary" >Register</button></div></div>
          </form> 
          <div id="regDiv"></div>
    </div>
</div>
<!--------------------------------------------------------------------- Registration Form ends here ------------------------------------------------------------------------------>         


<!------------------------------------------------------------------------  Main Body Ends Here ---------------------------------------------------------------------------->

</body>

</html>
