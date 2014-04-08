<?php
require 'connection.php';
require 'current_page.php';
$fname = $_POST['fname'];
$stock = $_POST['stock'];
$color = $_POST['color'];
$base = $_POST['base'];
/*$ftype = $_POST['ftype'];
$fsize = $_POST['fsize'];
$structure = 'admin_uploads/'.$ftype.'/'.$fname.$fsize;
$filename = $structure;

if (file_exists($filename)) {
    echo "The file $filename already exists exists";
} else {
	// To create the nested structure, the $recursive parameter 
	// to mkdir() must be specified.
	if (!mkdir($structure, 0777, true)) {
	    die('Failed to create folders... Please check if a duplicate folder already exists');
	}
    echo "The file $filename does not exist";
}
$name1 = $_FILES['choose_file1']['name'];
$name2 = $_FILES['choose_file2']['name'];
$name3 = $_FILES['choose_file3']['name'];
$tmp1 =  $_FILES['choose_file1']['tmp_name'];
$tmp2 =  $_FILES['choose_file2']['tmp_name'];
$tmp3 =  $_FILES['choose_file3']['tmp_name'];
$type1 = $_FILES['choose_file1']['type'];
$type2 = $_FILES['choose_file2']['type'];
$type3 = $_FILES['choose_file3']['type'];
$ext1 = strtolower(substr(($name1),strpos($name1,'.')+1));
$ext2 = strtolower(substr(($name2),strpos($name2,'.')+1));
$ext3 = strtolower(substr(($name3),strpos($name3,'.')+1));
if(isset($name1)){
	if(!empty($name1)){
	echo 'OK'.'<br>';
	$location_pic = $structure.'/';
	echo $location_pic;
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
if(isset($name2)){
	if(!empty($name2)){
	echo 'OK'.'<br>';
	$location_pic = $structure.'/';
	echo $location_pic;
		if(($ext2=='png'|| $ext2=='jpeg'|| $ext2=='jpg') && move_uploaded_file($tmp2,$location_pic.$name2)){
		echo 'successfully uploaded2';
		//echo $user;
		}else{
		echo 'Error occurred while uploading12 '.$name2.' </br>Please choose a jpeg or png file';
		//include 'upload_doc.php';
		}
	}else{
	echo 'No File was chosen2';
	}
}
if(isset($name3)){
	if(!empty($name3)){
	echo 'OK'.'<br>';
	$location_pic = $structure.'/';
	echo $location_pic;
		if(($ext3=='png'|| $ext3=='jpeg'|| $ext3=='jpg') && move_uploaded_file($tmp3,$location_pic.$name3)){
		echo 'successfully uploaded3';
		//echo $user;
		}else{
		echo 'Error occurred while uploading13 '.$name3.' </br>Please choose a jpeg or png file';
		//include 'upload_doc.php';
		}
	}else{
	echo 'No File was chosen3';
	}
}
*/
// Adding frame name to database

$query = "SELECT `fname` FROM `frames` WHERE `fname` = '$fname'";
$query_run = mysql_query($query);
if(mysql_num_rows($query_run)!=0){
echo 'fname exists';
}
else{
$queryi = "INSERT INTO `frames`(`fname`, `stock`, `color`, `baseprice`) VALUES ('$fname','$stock','$color','$base')";
$queryi_run = mysql_query($queryi);
}
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
<link href="../framePics/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../framePics/dashboard.css" rel="stylesheet">
</head>

<body>
<form action="upload_adfile.php" method ="post" enctype="multipart/form-data">
<input type="file" name="choose_file1" id="choose_file1" class="form-control"><br><br>
<input type="file" name="choose_file2" id="choose_file2" class="form-control"><br><br>
<input type="file" name="choose_file3" id="choose_file3" class="form-control"><br><br>
<select class="form-control" name="ftype">
  <option>Wooden</option>
  <option>Metallic</option>
<!--  <option>3</option>
  <option>4</option>
  <option>5</option>
--></select>
<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter FrameName"><br>
<select class="form-control" name="fsize">
  <option>-size-1</option>
  <option>-size-2</option>
  <option>-size-3</option>
  <option>-size-4</option>
</select>
<input type="text" name="stock" id="stock" class="form-control" placeholder="Initial stock"><br>
<input type="text" name="color" id="color" class="form-control" placeholder="color"><br>
<input type="text" name="base" id="base" class="form-control" placeholder="base price"><br>

<input type="submit" name="upload">
</form>
</body>

</html>
