<?php
include 'connection.php';
require 'current_page.php';
if(loggedin()){

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="docs-assets/ico/favicon.png">

    <title>Profile</title>
    <style type="text/css">
    .add{
	background-color:lavender;
	}
    </style>

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
<div class="container" style="background-color:white">
<div class="row">
<div class="col-md-2"><br><br>
<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="#home">Hello</a></li>
  <li><a href="#profile">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
</div>
<div class="col-md-3">
  <?php 
	include 'add_update.html';
  ?>
</div>
<div class="col-md-3"><br>
  <?php 
	include 'update_pass.php';
  ?>
</div>
<div class="col-md-4"><br>
	<div class="row">
	<h2>Your Addresses</h2>
	<?php require 'add.php'; ?>
	</div><br>
	<div class="row" id="defChange">
	</div>
</div>
</div>
<div class="row" id="home" style="height:1200px;background-color:yellow" ><?php 
include 'add_new.html';
?>
</div> 
</div>       
</body>

</html>
