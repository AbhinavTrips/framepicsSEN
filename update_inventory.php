<?php
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                                SQL for updating inventory. Implemented by Abhinav Tripathi 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

require 'connection.php';
$stock = $_POST['stock'];
$base = $_POST['base'];
$fname = $_POST['fname'];
$query = "UPDATE `frames` SET `stock`='$stock',`baseprice`='$base' WHERE `fname`='$fname'";// Update details in frames table
if($query_run = mysql_query($query)){
echo 'update successful';
header('Location:dashboard_admin.php');
}
?>