<?php	
require 'current_page.php';
require 'connection.php';

if(loggedin()){
header('Location:home.php');
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
    <link rel="shortcut icon" href="docs-assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
      <script src="respond.min.js"></script>

    <![endif]-->
  </head>

  <body>

  <?php				
if(loggedin()){
	/*	echo   '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#contact"><span class="glyphicon glyphicon-globe"></span> Notifications</a></li>
            <li><a href="#about"><span class="glyphicon glyphicon-cog"></span> Account</a></li>
 
           <li><a href="#about"><span class="glyphicon glyphicon-info-sign"></span> Report Interpreter</a></li>
             <li><a href="#contact"><span class="glyphicon glyphicon-tint"></span> Blood Required</a></li>


          </ul>';
          
          include 'search.php';
   echo ' </div>
      </div>
    </div>';*/
    header('Location:home.php');
 
	}	else {

	 echo'
	  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container col-md-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            
          </ul>';
          	 include 'login.php';
         
 echo '         </div>
      </div>
    </div>';

		//include 'login.php';
		}

?>

 <div class="container" style="margin-top:5%">
 <div class="row">
 <div class="col-lg-7"style="background-image:url('images/abc.png.JPG');height:500px">Left one</div>
 <div class="col-lg-5">

        <?php
        if(!loggedin()){
        include 'register.php';
        }
        ?>
       
    </div> 		
</div>
</div>
 <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
