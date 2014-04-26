<?php

require 'connection.php';
require 'current_page.php';

if(isset($_SESSION["products"])) {
	if(!loggedin()){
		header("Location: login.php");
	}
	else if(loggedin()) {
		foreach($_SESSION["products"] as $cart_itm) {
			$product_code = $cart_itm["code"];
			$mount = $cart_itm["mount"];
			$status = "processing";
			
			$total = 0;
			foreach($_SESSION["products"] as $cart_itm) {
				$subtotal =($cart_itm["price"]*$cart_itm["qty"]);
				$total = ($total+ $subtotal);
			}

			$getdate = getdate();
			$date = $getdate['year'].'-'.$getdate['month'].'-'.$getdate['mday'];

			$sql = "INSERT INTO order_frame (frameid,mountid,status,price)
				VALUES ('$product_code','$mount','$status','$total')";
			$results = $mysqli->query($sql);	

			$sql = "INSERT INTO order_date (orderdate)
				VALUES ('$date')";
			$results = $mysqli->query($sql);

			$userid = $_SESSION['user_id'];
			$sql = "INSERT INTO order_user (userid)
				VALUES ('$userid')";
			$results = $mysqli->query($sql);
			
			unset($_SESSION['products']);
			if(isset($results)) {
				header("Location: dashboard.php");
			}
		}
	}
}

?>
