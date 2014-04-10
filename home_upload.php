<?php
require 'connection.php';
//require 'current_page.php';
$structure = 'images/frame_demo';
$filename = $structure;
if(isset($_FILES['choose_file1'])){
$name1 = $_FILES['choose_file1']['name'];
$tmp1 =  $_FILES['choose_file1']['tmp_name'];
$type1 = $_FILES['choose_file1']['type'];
$ext1 = strtolower(substr(($name1),strpos($name1,'.')+1));
if(isset($name1)){
	if(!empty($name1)){
	echo 'OK'.'<br>';
	$location_pic = $structure.'/';
	echo $location_pic;
	//$name1 = 'corners.png';
		if(($ext1=='png'|| $ext1=='jpeg'|| $ext1=='jpg') && move_uploaded_file($tmp1,$location_pic.$name1)){
		echo 'successfully uploaded1';
		//echo $user;
		}else{
		echo 'Error occurred while uploading11 '.$name1.' </br>Please choose a jpeg or png file';
		//include 'upload_doc.php';
		}
	}else{
	echo 'No File was chosen1';
	}
}
}
?>

<!--<!DOCTYPE html>-->
<!--<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
<link href="../framePics/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<!--<link href="../framePics/dashboard.css" rel="stylesheet">
</head>

<body>
--><form action="home_upload.php" method ="post" enctype="multipart/form-data">
<input type="file" name="choose_file1" id="choose_file1" class="form-control" placeholder="corners file"><br><br>
<input type="submit" name="upload">
</form>
<!--</body>

</html>
-->