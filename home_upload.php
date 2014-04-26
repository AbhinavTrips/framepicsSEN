<?php
require 'connection.php';
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 									Form to let the admin add new images to the gallery on the home page. Implemented by Abhinav Tripathi.

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
if(adloggedin()){
$structure = 'images/frame_demo';//images for gallery are stored in "images/frame_demo" folder
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
	// Upload routine
		if(($ext1=='png'|| $ext1=='jpeg'|| $ext1=='jpg') && move_uploaded_file($tmp1,$location_pic.$name1)){
		echo 'successfully uploaded1';
		}else{
		echo 'Error occurred while uploading11 '.$name1.' </br>Please choose a jpeg or png file';
		}
	}else{
	echo 'No File was chosen1';
	}
}
}
//form for uploading
echo'

<form action="home_upload.php" method ="post" enctype="multipart/form-data">
<input type="file" name="choose_file1" id="choose_file1" class="form-control" placeholder="corners file"><br><br>
<input type="submit" name="upload">
</form><br>
';
}
else{
echo 'Please login to upload files';
}