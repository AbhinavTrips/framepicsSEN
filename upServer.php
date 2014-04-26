<?php
require 'connection.php';
require 'current_page.php';
//$user = getuserfield('username');
//echo $user;

$name = $_FILES['choose_file']['name'];
$tmp = $_FILES['choose_file']['tmp_name'];
$type = $_FILES['choose_file']['type'];
$ext = strtolower(substr(($name),strpos($name,'.')+1));
if(isset($name)){
	if(!empty($name)){
	echo 'OK'.'<br>';
	$location_pic = 'user_folders/';
	echo $location_pic;
		if(($ext=='png'|| $ext=='jpeg'|| $ext=='jpg') && move_uploaded_file($tmp,$location_pic.$name)){
		echo 'successfully uploaded';
		//echo $user;
		}else{
		echo 'Error occurred while uploading '.$name.' </br>Please choose a jpeg or png file';
		//include 'upload_doc.php';
		}
	}else{
	echo 'No File was chosen';
	}
}
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<form action="upServer.php" method ="post" enctype="multipart/form-data">
<input type="file" name="choose_file"><br><br>
<input type="submit" name="upload">
</form>
</body>

</html>
