<?php
/**********************************************************************************************************************************************************************************

							Implemented by Abhinav Tripathi. Deletes an address stored by the user. Called from add_del function in jsfunc.js file

**********************************************************************************************************************************************************************************/
require 'connection.php';
require 'current_page.php';
$aid = mysql_real_escape_string($_GET['id']);
$query = "DELETE FROM `address` WHERE `aid` ='$aid'";
mysql_query($query);
echo 'Removed address, reload to see changes';
?>
