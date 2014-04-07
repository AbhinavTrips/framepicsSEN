<?php
require 'connection.php';
require 'admin.php';
if(isset($_GET['del'])&&!empty($_GET['del'])){
$date = mysql_real_escape_string($_GET['del']);
$oid = mysql_real_escape_string($_GET['oid']);
//echo 'delivery : '.$date;
//echo 'Order : '.$oid;
$query = "UPDATE `order_frame` SET `delivery`='$date' WHERE `orderid` ='$oid'";
if($query_run = mysql_query($query)){
echo 'Successfully updated delivery status';
}else{
echo 'Could not update Delivery Date';
}
}else{
echo 'field blank';
}
?>
