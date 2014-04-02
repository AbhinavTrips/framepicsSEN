<?php
require 'connection.php';
require 'current_page.php';
$aid = mysql_real_escape_string($_GET['id']);
$query = "DELETE FROM `address` WHERE `aid` ='$aid'";
mysql_query($query);
echo $aid;
?>
