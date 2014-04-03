<?php
require 'connection.php';
if(loggedin()){
$user = $_SESSION['user_id'];
$query = "SELECT * FROM `order_frame` WHERE `orderid` IN (SELECT `orderid` FROM `order_user` WHERE `userid`='$user')";
if($run = mysql_query($query)){
	for($i=0;$i<mysql_num_rows($run);$i++){
	$query_array=mysql_fetch_array($run);
	$oid = $query_array['orderid'];
	$fid = $query_array['frameid'];
	$mid = $query_array['mountid'];
	$status = $query_array['status'];
	$delivery = $query_array['delivery'];
	$price = $query_array['price'];
	$queryf = "SELECT `color` FROM `frames` WHERE `frameid`='$fid'";
		if($runf = mysql_query($queryf)){
			for($f=0;$f<mysql_num_rows($runf);$f++){
			$query_arrayf = mysql_fetch_array($runf);
			$colorf = $query_arrayf['color'];
			}
		}
	$querym = "SELECT `color` FROM `mount` WHERE `mountid`='$mid'";
		if($runm = mysql_query($querym)){
			for($m=0;$m<mysql_num_rows($runm);$m++){
			$query_arraym = mysql_fetch_array($runm);
			$colorm = $query_arraym['color'];
			}
		}
		echo '<tr>
                  <td>'.$oid.'</td>
                  <td>'.$colorf.'</td>
                  <td>'.$colorm.'</td>
                  <td>'.$status.'</td>
                  <td>'.$delivery.'</td>
                  <td>'.$price.'</td>
              </tr>';
	}
	
}
}
?> 

