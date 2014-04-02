<?php 
$rating_tableName     = 'ratings';
$rating_unitwidth     = 15;
$rating_dbname        = 'projectHope';
$units=5;
function connect(){
	$host="localhost";
 $uname="abhimon";
 $pass="baba123";
 $rating_dbname        = 'projectHope';

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


