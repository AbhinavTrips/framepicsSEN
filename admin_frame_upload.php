<?php
require 'connection.php';
require 'admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 					Page to let the admin upload new frames. Form implemented in upload_adfile.php which is included separately. Implemented by Abhinav Tripathi

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
	<script src="jsfunc.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
      <script src="respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<!------------------------------------------------------------------- Navigation Bar starts here --------------------------------------------------------------------------------->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Framepics</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <?php    
            if(adloggedin()){// if admin is logged in, show logout option else show login option
		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';}
			else{
		echo '<li><a href="login_admin.php"><span class="glyphicon glyphicon-off"></span> Login</a></li>';
			}
			?>
           </ul>
		 </div>
      </div>
    </div>
<!-------------------------------------------------------------------- Navigation Bar ends here ---------------------------------------------------------------------------------->


    <div class="container-fluid">
      <div class="row">
      
<!----------------------------------------------------------------------- Side Bar starts here ----------------------------------------------------------------------------------->
      
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dashboard_admin.php">Pending Orders</a></li>
            <li><a href="dashboard_admin.php#allOrders">All Orders</a></li>
            <li class="active"><a href="#frameUpload">Upload Frames</a></li>
            <li><a href="#inventory">Manage Inventory</a></li>
            <li><a href="admin_inventory.php">Inventory</a></li>
          </ul>
        </div>
        
<!----------------------------------------------------------------------- Side Bar ends here ------------------------------------------------------------------------------------->
        
<?php
if(adloggedin()){
/*

File upload module included here in the file 'upload_adfile.php'. Admin can upload new frame pictures and details.

*/

echo     '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
          	<h2>Upload New Frame</h2>
			<div class="col-md-3" id="frameUpload">';
				include 'upload_adfile.php';
echo'
 			  <div class="row" id="updatePer">
			  </div>
			</div>';
			
/*

Inventory Management module included here in the file 'ad_inventory.php'. Admin can change the base price and stock of the existing items.

*/

echo	'<div class="col-md-4 col-md-offset-1"><br>
			 <div class="row" id="inventory">
				<h2  id="addresses">Manage Inventory</h2>';
				include 'ad_inventory.php';
echo'
		     </div>
		 </div>';

/*

Home Gallery Image module included here in the file 'home_upload.php'. Admin can upload a picture here, it gets displayed on the home gallery.

*/
		 
echo'	<div class="col-md-4 col-md-offset-1"><br>
			<div class="row" id="inventory">
				<h2  id="addresses">Add image to home gallery</h2>';
				include 'home_upload.php';
echo'
			</div>
		</div>';
		}

/*

Home Gallery Image module included here in the file 'home_upload.php'. Admin can upload a picture here, it gets displayed on the home gallery.

*/

		else{
		echo 'Please login as administrator to continue';
		header('Location:login_admin.php');
		}
		?>

          </div>
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
