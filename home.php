<?php	
require 'current_page.php';
require 'connection.php';
?>

<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

						       Home Page as seen by a logged in user. Implemented by Abhinav Tripathi and Sneha Reddy(Slider Gallery)

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
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
    
	<!--Flex Slider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
      <script src="respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	.auto-style1 {
		color: #FFFFFF;
	}
	</style>
  </head>

  <body>
 <?php
 
////////////////////////////////////////////////////////////////////// Navbar if not logged in //////////////////////////////////////////////////////////////////////////////////// 

if(!loggedin()){
echo
 '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
          <ul class="nav navbar-nav">';
           

      echo '<li><a href="view_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-off"></span> Login</a></li> 	
			<li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>';
          
          include 'search.php';
echo'           
 </div>
      </div>
    </div>';
}    
    
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////      

//////////////////////////////////////////////////////////////////////// Navbar if logged in ////////////////////////////////////////////////////////////////////////////////////// 
else if(loggedin()){
	echo   '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
        
			$first_name = getuserfield('first_name');// Get user's firstname using the function 'getuserfield' defined in current_page.php
			echo '<li class="active"><span class="glyphicon glyphicon-home"></span></a></li>' ;			 
		
           echo '
            <li><a href="view_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>';
		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			 <li><a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> '.$first_name.'</a></li>            
            </ul>';
          
          include 'search.php';
   echo ' </div>
      </div>
    </div>';

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////      

?> 

<div class="row" style="margin:5% ">
<div class="row">

<!------------------------------------------------------------------- Div for photo frame Starts here ---------------------------------------------------------------------------->

<div class="col-md-5 col-md-offset-1" style="text-align:center; height:400px; background-color:#D1D9DE">
	<span class="auto-style1">Photo Frames
  </span>
  
<!---------------------------------------------------------------------- Code for Image gallery ---------------------------------------------------------------------------------->  
 
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
<!-- Code to display images in slider. It iterates though all the images in images/frame_demo folder -->          
<?php
$dirname = "images/frame_demo/";
$images = glob($dirname."*.*");
$i=0;
foreach($images as $image) {
echo '<li><img src="'.$images[$i].'" /></li>';
$i++;

}
?>
          </ul>
        </div>
      </section>
<!---------------------------------------------------------------------- Code for Image gallery Ends here ----------------------------------------------------------------------->  
  
  <a href="upload_test.php"><button type="button" class="btn btn-success btn-lg">
  <span class="glyphicon glyphicon-upload"></span> Upload Photo For Choosing Frame
</button></a>
</div>
<!---------------------------------------------------------------- Div for photo frame Ends here --------------------------------------------------------------------------------->


<!------------------------------------------------------------ Div for Digital Painting Starts here ------------------------------------------------------------------------------>


<div class="col-md-5" style="text-align:center; height:400px; background-color:#C3C3E6">Digital Printing
  <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
<!-- Code to display images in slider -->          
<?php
$dirname = "images/frame_demo/";
$images = glob($dirname."*.*");
$i=0;
foreach($images as $image) {
echo '<li><img src="'.$images[$i].'" /></li>';
$i++;

}
?>

</ul>
        </div>
      </section>
<button type="button" class="btn btn-success btn-lg">
  <span class="glyphicon glyphicon-upload"></span> Upload Photo For Digital Printing
</button>
	</div>
	
<!-------------------------------------------------------------- Div for Digital Painting Ends here ------------------------------------------------------------------------------>
	
	
</div>
</div>
<!--<div class="row">
--><div class="col-md-12" style="height:150px;text-align:center;background-color:black">

</div>
<!--</div>
-->
<!-- jQuery for the slider script -->
  <script src="jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 250,
        itemMargin: 5,
        pausePlay: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  </body>
</html>
