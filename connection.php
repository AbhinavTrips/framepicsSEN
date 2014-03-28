<?php
$db_host = "localhost";
$db_user = "abhimon";
$db_password = "baba123";
$db_name = "projectHope";
mysql_connect("$db_host","$db_user","$db_password") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>