<?php
require 'connection.php';
/*
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
									sql for fetching order history. Include to display order history table. Include between <tbody></tbody> tags
									By : Aditya Raikar
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
*/
if(loggedin()){
$user = $_SESSION['user_id'];
// Selecting order details for the logged in user from the order_frame table
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
	// query to get the mount color
	$querym = "SELECT `color` FROM `mount` WHERE `mountid`='$mid'";
		if($runm = mysql_query($querym)){
			for($m=0;$m<mysql_num_rows($runm);$m++){
			$query_arraym = mysql_fetch_array($runm);
			$colorm = $query_arraym['color'];
			}
		}
		//displaying entries in table rows
		echo '<tr>
                  <td>'.$oid.'</td>
                  <td>'.$mid.'</td>
                  <td>'.$status.'</td>
                  <td>'.$delivery.'</td>
                  <td>'.$price.'</td>
              </tr>';
	}
	
}
}
else{
// Display this message if not logged in
echo 'Please login to continue';
}
?> 

