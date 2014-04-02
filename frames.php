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
    
	<!--Flex Slider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  	<script src="js/modernizr.js"></script>
  	<script src="js/bootstrap-colorpalette.js"></script>
<!--  	<script src="holder.js"></script>
-->
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
  <?php
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
          <a class="navbar-brand" href="#">Framepics</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">';
           

      echo '<li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>';
          
          include 'search.php';
echo'           
 </div>
      </div>
    </div>
    <div class="container">';
    include 'home_signin.php';
    echo '</div>';
}else if(loggedin()){
	echo   '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
          <ul class="nav navbar-nav"><a href="#">';
          if(loggedin()){
			$first_name = getuserfield('first_name');
			echo '<li class="active"><span class="glyphicon glyphicon-home"></span> '.$first_name.'</a></li>' ;			 
			 }
           echo '


          </ul>';
          
          include 'search.php';
   echo ' </div>
      </div>
    </div>';

}
?> 

<!--<div class="container" style="margin:5%">
-->
<div class="row" style="margin:5% ">

<?php
if(loggedin()){
echo '
<div class="row">
<div class="col-md-3 col-md-offset-1" style="text-align:center; height:600px; background-color:aqua">
<div class = "row"> </br>';
include 'color_picker.html';

echo 
'
</div>
</div>
<div class="col-md-7" style="text-align:center; height:600px; background-color:beige">';
include 'frame_gallery.php';
echo '
	</div>
</div>
<div class="row">
<div class="col-md-10 col-md-offset-1" style="height:200px;text-align:center;background-color:red ">Recommended Frames
';
echo'</div>
</div>
';

}
?>
<div class="btn-group">
  <a id="selected-color2" class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i>A</i></a>
  <ul class="dropdown-menu" style="width:293px;">
    <li style="display:inline-block;">
      <div> font color</div>
      <div id="colorpalette2"></div>
    </li>
    <li style="display:inline-block;">
      <div> background color</div>
      <div id="colorpalette3"></div>
    </li>
  </ul>
</div><!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
    
    $('.colorpalette1').colorPalette()
  .on('selectColor', function(e) {
    $('.selected-color i').css('color', e.color);
  });
$('.colorpalette2').colorPalette()
  .on('selectColor', function(e) {
    $('.selected-color i').css('background-color', e.color);
  });  

  </script>




<!--</div>
--> <!-- /container -->

<!--<div class="col-md-offset-1 style="margin:5% ">
-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
