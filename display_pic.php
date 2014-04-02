<?php	
require 'current_page.php';
require 'connection.php';
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

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

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
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
         <?php include 'search.php'; ?>
 </div>
      </div>
    </div>

<div class="container jumbotron">

<?php

if(loggedin()){
$name = getuserfield('username');
		
		echo 'Welcome '.$name.'!</br> You are now logged in. </br> <a href="logout.php"> Log out</a>';
} else{
echo 'could not login';
}
?>
</div>
<div class="container">
<?php
$folder = 'user_folders/'.$name.'/Pictures/';
echo $folder;
$filetype = '*.*';
$files = glob($folder.$filetype);
for ($i=0; $i<count($files); $i++) {
	echo '<div class="thumbnail col-lg-2">';
    echo '<img src="'.$files[$i].'" />';
    echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));// This line will display the name of the file also
    echo '</div>';
}
?>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />


    
  </body>
  <!-- Placed at the end of the document so the pages load faster -->
</html>
