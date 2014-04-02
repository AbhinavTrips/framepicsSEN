
<?php
include('connection.php');
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$password = $_GET['password'];
$mobile = $_GET['mobile'];
$address1 = $_GET['address1'];
$address2 = $_GET['address2'];
$city = $_GET['city'];
$state = $_GET['state'];
$pin = $_GET['pin'];
	// Escape User Input to help prevent SQL Injection
//$query1 = "UPDATE `addres` SET `sex`= 'f' WHERE `sex`= '$sex'";`lastname`='$lastname',`address1`='$address1',`address2`='$address2',`city`='$city',`state`='$state',`pin`='$pin'
$query1 = "UPDATE `address` SET `firstname`='$firstname', WHERE `aid`='1'";
echo $query1;
$query_run = mysql_query($query1);
?>
