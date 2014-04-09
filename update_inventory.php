<?php
require 'connection.php';
$stock = $_POST['stock'];
$base = $_POST['base'];
$fname = $_POST['fname'];
$query = "UPDATE `frames` SET `stock`='$stock',`baseprice`='$base' WHERE `fname`='$fname'";
if($query_run = mysql_query($query)){
echo 'update successful';
}
?>