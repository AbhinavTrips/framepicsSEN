<?php
/*session_start();
*/require 'connection.php';
require 'current_page.php';
?>
<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                Backend and cart display by Anuroop Kuppam. Layout by Abhinav Tripathi 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
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


/////////////////////////////////////////////////////////////////////////// Navbar if logged in /////////////////////////////////////////////////////////////////////////////////// 

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
        
			$first_name = getuserfield('first_name'); // Get user's firstname using the function 'getuserfield' defined in current_page.php

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



<div class="row" style="margin:5%">
<div id="products-wrapper">
 <h1>View Cart</h1>
 
 <!------------------------------------------------------------------------ Cart Display Starts Here ----------------------------------------------------------------------------->
 <!------------------------------------------------------------------------ Coded by Anuroop Kuppam ------------------------------------------------------------------------------>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="order.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
           $mount = $cart_itm["mount"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
			echo '<h3> Mount:'.$mount.'</h3>';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong> </br></br> ';
		echo '<input class="btn btn-success" type="submit" value="Place Order" />';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
<!------------------------------------------------------------------------- Cart Display Endss Here ------------------------------------------------------------------------------>
</div>
</div>
</body>
</html>
