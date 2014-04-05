<?php
require 'connection.php';
require 'current_page.php';
if(loggedin()){
	if(isset($_GET['first'])&&isset($_GET['last'])&&isset($_GET['mobile'])&&isset($_GET['add1'])&&isset($_GET['add2'])&&isset($_GET['pin'])){
	$user = getuserfield('user_id');
//	echo $user.'<br>';
/*	$addcount = numadd($user);
	if($addcount==0){
	$addcount = $addcount.'1';
	echo $addcount.'<br>';
	}else if($addcount==1){
	$addcount = $addcount.'2';
		echo $addcount.'<br>';

	}

*/	//echo $user;
	$first = mysql_real_escape_string($_GET['first']);
//	echo $first.'<br>';
	$last = mysql_real_escape_string($_GET['last']);
//		echo $last;

	$add1 = mysql_real_escape_string($_GET['add1']);
//		echo $add1.'<br>';

	$add2 = mysql_real_escape_string($_GET['add2']);
//		echo $add2.'<br>';

	$city = mysql_real_escape_string($_GET['city']);
//		echo $city.'<br>';

	$state = mysql_real_escape_string($_GET['state']);
//		echo $state.'<br>';

	$pin = mysql_real_escape_string($_GET['pin']);
//		echo $pin.'<br>';

//	$email = mysql_real_escape_string($_GET['email']);
	$mobile = mysql_real_escape_string($_GET['mobile']);
//		echo $mobile.'<br>';

	$new_add = "INSERT INTO `address`(`userid`,`firstname`, `lastname`, `mobile`, `address1`, `address2`, `city`, `state`, `pin`, `def`) VALUES ('$user','$first','$last','$mobile','$add1','$add2','$city','$state','$pin','0')";
			if($query_new_add = mysql_query($new_add)){
			echo 'Added successfully, Please reload to see changes.';
			}else{
			echo 'Could not update information';
			}
				
	}
}else{
 echo 'Please login to continue';
}
?>