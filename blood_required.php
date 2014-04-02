<?php	
require 'current_page.php';
require 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Bootstrap Form Helpers -->

    <link href="css/bootstrap-formhelpers.css" rel="stylesheet" media="screen">

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
<h3>Please fill out this form</h3>
  <form class="form-horizontal" id ="registerForm"role="form" action="<?php echo $current_file; ?>" method="post">
  
      <div class="row">
	       <div class="col-md-3 ">
			<select id="blood_group" name="blood_group" class="form-control">
			  <option>Choose the desired blood group</option>
              <option>A+</option>
              <option>A-</option>
			  <option>AB+</option>
              <option>AB-</option>
              <option>B+</option>
              <option>B-</option>
              <option>O+</option>
              <option>O-</option>
              </select> </div>  
	  </div>
            
            <div class="row">
           <div class="col-md-3"> 
           <input id ="units" name ="units" type="number" min="1" placeholder="Select how many units of blood you require" class="form-control" required></div>
            </div>
            <br>

            <label>Country, state and contact number</label>
            <div class="row">
           <div class="col-md-3"> <input id="person" name ="person" type="text" placeholder="Name of the contact person" class="form-control" required></div></div>       
            <div class="row">
           <div class="col-md-3">
           <select id="countries_phone1" class="form-control bfh-countries" data-country="IN" required></select></div></div>
            <div class="row">
            <div class="col-md-3">
			<select id="month" name="month" class="form-control">
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select> </div></div>
            <div class="row">
            <div class="col-md-3">
            <input type="text" class="form-control bfh-phone" data-country="countries_phone1">
           
           </div></div>
			<div class="row">
			<div class="col-md-5">
            <button type="submit" class="btn btn-primary">Register</button></div></div>
          </form> 

 <!-- jQuery -->
	<script src="jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Form Helpers -->
    <script src="js/bootstrap-formhelpers.js"></script>

</body>

</html>
