<?php
require 'current_page.php';
require 'connection.php';
?>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 													Page where framing is done . Implemented by Anuroop Kuppam ..... Layout by Abhinav Tripathi
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="imageframer/if.css" />
<link rel="stylesheet" type="text/css" href="imageframer/style.css" />

<script type="text/javascript" src="imageframer/if.js" ></script>
<style>
body{
	background:url('images/bg73.gif') repeat;
}

      .gwd-div-tulu {
      display: block;
        position: absolute;
        padding-left:5px;
        margin:1%;
        width: 91px;
        left: 546px;
        top: 659px;
        background-color:#E0DEDE;
        font-family:'Times New Roman';
        text-align: left;
        word-wrap:break-word;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
      }

</style>
<script type="text/javascript">
$(function() {

		$('.frames img').imageframer();
});


function mount_handler(color) {
	var frame = $(color).attr('class');	
	var value = color.value;
	var str = "solid 20px "+value;
	var mount = document.getElementById(frame);
	$(mount).css('border',str);
}

</script>
</head>

<body>

<?php
require 'connection.php';

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
/*    <div class="container">';
    include 'home_signin.php';
    echo '</div>';
*/}else if(loggedin()){
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
        
			$first_name = getuserfield('first_name');
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
?>

<?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = $_SESSION['file'];
$sql = "SELECT product_code FROM products";
$code = $mysqli->query($sql);
$code->data_seek(0);

for($i = 0; $i < $code->num_rows; $i++) {
	$frame = $code->fetch_row();	
	$frames[$i] = $frame[0];
}

echo '
<div class="row" style="margin:5%; text-align:center"><h1>Frame Store</h1></div>';

foreach($frames as $value) {
echo '<div>';
echo '<div class="row">';
echo  '<div class="frames col-md-offset-1 col-md-4">';
echo '<img id="'.$value.'" data-frame-type="'.$value.'" src = "'.$path.'" height = "200" style="border:20px solid brown"/>';
echo '</div>';
$sql = "SELECT * FROM products WHERE product_code = '".$value."'";
$results = $mysqli->query($sql);

	//fetch results set as object and output HTML
$obj = $results->fetch_object();
		echo '<br><br><div class="frames col-md-4">'; 
		echo '<form method="post" action="cart_update.php">';
		echo '<div><h3>'.$obj->product_name.'</h3>';
		echo '<div>'.$obj->product_desc.'</div>';
		echo '<div>';
		echo 'Price '.$currency.$obj->price.' | ';
		echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
		echo '<button class="add_to_cart">Add To Cart</button>';
		echo '</div></div>';
		echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
		echo '<input type="hidden" name="type" value="add" />';
		echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
echo '<select name="Mount" id="color" class="'.$value.'" onchange="mount_handler(this)">';
echo '<option value="red">Red</option>';
echo '<option value="blue">Blue</option>';
echo '<option value="black">Black</option>';
echo '<option value="yellow">Yellow</option>';
echo '<option value="brown">Brown</option>';
echo '</select>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '
<div class="gwd-div-tulu" style="left: 1050px; top: 195px; width: 228px; height:2040px">
<h3> Your Shopping Cart</h3>';
//////////////////Shows Cart/////////////////////////////

if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
	    echo '<div> Mount: '.$cart_itm["mount"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong>';
    echo '<br/>';
    echo '<a href="view_cart.php">Check-out!</a></span>';
	echo '<br/>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty</div>';

}
echo '
</div>';
?>
</body>
</html>
