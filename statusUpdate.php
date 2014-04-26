<?php
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                SQL for updating delivery status. Implemented by Abhinav Tripathi 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

require 'connection.php';
require 'admin.php';
if(isset($_GET['status'])&&!empty($_GET['status'])){
$status = mysql_real_escape_string($_GET['status']);
$oid = mysql_real_escape_string($_GET['oid']);
echo 'Status : '.$status;
echo 'Order : '.$oid;
$query = "UPDATE `order_frame` SET `status`='$status' WHERE `orderid` ='$oid'";// update status in order_frame file
if($query_run = mysql_query($query)){
echo 'Successfully updated delivery status';
}else{
echo 'Could not update status';
}
}else{
echo '  Update status field blank';
}
?>
