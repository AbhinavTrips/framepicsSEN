<?php
include 'connection.php';
require 'current_page.php';
if(loggedin()){
$user = getuserfield('first_name');
//echo $_SESSION['user_id'];
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

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Framepics</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#dash">Dashboard</a></li>
            <li><a href="#personal">Personal Info</a></li>
            <li><a href="#addresses">Addresses</a></li>
            <li><a href="#changepass">Change Password</a></li>
            <li><a href="#orders">Orders</a></li>
            <li><a href="#newadd">Add Address</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" id="dash"><?php echo $user.'\'s ';?>Dashboard</h1>

          <div class="row">
			<div class="col-md-3">
			  <?php 
				include 'add_update.html';
 			  ?>
 			  <div class="row" id="updatePer">
			  </div>
			</div>
			<div class="col-md-4 col-md-offset-1"><br>
				<div class="row">
				<h2  id="addresses">Your Addresses</h2>
					<?php require 'add.php'; ?>
				</div><br>
				<div class="row" id="defChange">
				</div>
			</div>

			<div class="col-md-3 col-md-offset-1"><br>
  				<?php 
				include 'update_pass.php';
 				 ?>
			</div>
		</div>

          <h2 class="sub-header"  id="orders">Order History</h2>
          <div class="table-responsive">
              <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Frame Color</th>
                  <th>Mount Color</th>
                  <th>Current Status</th>
                  <th>Delivered On</th>
                  <th>Price(Rs.)</th>
                </tr>
              </thead>
              <tbody>
              <?php
              include 'user_order.php';
              ?>
			  </tbody>
			</table>
          </div>
          
            <div class="row">
			<div class="col-md-3">
			  <?php 
				include 'new_add.html';
 			  ?></div>
 			  
 			<div class="row" id="addnew">
			
			</div>
			</div>

        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
