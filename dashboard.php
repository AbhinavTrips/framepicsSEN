<?php
/**********************************************************************************************************************************************************************************

 User Dashboard by Abhinav Tripathi. Individual modules coded by other team members.

**********************************************************************************************************************************************************************************/
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

    <title>User Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

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
// Display logout and Dashboard link in navbar only if user is logged in Else give login link only
if(loggedin()){
echo'
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
          <ul class="nav navbar-nav"><a href="#">';
        
			$first_name = getuserfield('first_name'); // Displays user name
			echo '<li class="active"><span class="glyphicon glyphicon-home"></span></a></li>' ;			 
		
           echo '
            <li><a href="view_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>';
		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			 <li><a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> '.$first_name.'</a></li>            
            </ul>';
          
          include 'search.php'; // Not yet implemented
   echo ' </div>
      </div>
    </div>';

echo'
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#dash">Dashboard</a></li>
            <li><a href="#personal">Personal Info</a></li>
            <li><a href="#addresses">Addresses</a></li>
            <li><a href="#changepass">Change Password</a></li>
            <li><a href="#orders">Orders</a></li>';
          
            $id = getuserfield('user_id');
            $addnum = numadd($id);// Checks how many addresses are stored for the logged in user and displays the Add Address link only if the user has less than 2 addresses
            	if($addnum == 1||$addnum == 0 )
            	{
            		echo '<li><a href="#newadd">Add Address</a></li>';
            	}     
///////////////////////////////////////////////////////////////                    Address Update               //////////////////////////////////////////////////////////////////       	       
echo'
        </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">'.$user.'\'s Dashboard</h1> 

          <div class="row" id="dash">
			<div class="col-md-3">';
				include 'add_update.html';
				// Added address update file above
				
				
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////  	
///////////////////////////////////////////////////////////////                Update personal Info          //////////////////////////////////////////////////////////////////       			
echo'
 			  <div class="row" id="updatePer">
			  </div>
			</div>
			<div class="col-md-4 col-md-offset-1"><br>
				<div class="row"  id="addresses">
				<h2>Your Addresses</h2>';
				require 'add.php';
				//Added Personal Information update file above
				
				
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////                Update Password          /////////////////////////////////////////////////////////////////

echo'
				</div><br>
				<div class="row" id="defChange">
				</div>
			</div>

			<div class="col-md-3 col-md-offset-1"><br>';
 				include 'update_pass.php';
 				
 				//Added password update file above

///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////               Display User Order History        /////////////////////////////////////////////////////////////////


echo'
			</div>
		</div>

          <h2 class="sub-header">Order History</h2>
          <div class="table-responsive"  id="orders">
              <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                
                  <th>Mount Color</th>
                  <th>Current Status</th>
                  <th>Delivered On</th>
                  <th>Price(Rs.)</th>
                </tr>
              </thead>
              <tbody>';
              include 'user_order.php';
              // Added user order history file above
              
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////               Add New Address        /////////////////////////////////////////////////////////////////


echo'
			  </tbody>
			</table>
          </div>';

            $id = getuserfield('user_id');
            $addnum = numadd($id);
            	if($addnum == 1 || $addnum == 0)
            	{
            		echo '<div class="row">
			<div class="col-md-3">';
		
				include 'new_add.html';
				
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////
				
 			echo'</div>
 			<div class="row" id="addnew">
			</div>
			</div>';
            	}  
            	
}else {
echo 'login to continue';
header('Location:login.php');
}         
?>


        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
