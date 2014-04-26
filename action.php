
<?php
include('connection.php');
$firstname = mysql_real_escape_string($_GET['firstname']);
$lastname = mysql_real_escape_string($_GET['lastname']);
$email = mysql_real_escape_string($_GET['email']);
$mobile = mysql_real_escape_string($_GET['mobile']);
//$query1 = "UPDATE `addres` SET `sex`= 'f' WHERE `sex`= '$sex'";`lastname`='$lastname',`address1`='$address1',`address2`='$address2',`city`='$city',`state`='$state',`pin`='$pin'
$query1 = "UPDATE `address` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`mobile`='$mobile' WHERE `user_id`='$user'";
echo $query1;
$query_run = mysql_query($query1);
?>
