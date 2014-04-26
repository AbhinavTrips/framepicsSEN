<?php
require 'connection.php';
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 									Form to let the admin add new frames to his inventory. Implemented by Abhinav Tripathi

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
if(!empty($_POST['fname'])&&!empty($_POST['stock'])&&!empty($_POST['color'])&&!empty($_POST['base'])&&!empty($_POST['choose_file1'])&&!empty($_POST['choose_file2'])&&!empty($_POST['choose_file3'])){
$fname = $_POST['fname'];
$stock = $_POST['stock'];
$color = $_POST['color'];
$base = $_POST['base'];
$ftype = $_POST['ftype'];
$fsize = $_POST['fsize'];
$structure = 'admin_uploads/'.$ftype.'/'.$fname.$fsize;// The images will be stored in the folder admin_uploads/Wooden(or Metallic)/framename1(2or3or4)
$filename = $structure;

if (file_exists($filename)) {
    echo "The file $filename already exists exists";
} else {
//Creating the directory to store files associated with a frame in its own folder
	if (!mkdir($structure, 0777, true)) {
	    die('Failed to create folders... Please check if a duplicate folder already exists');
	}
}
// Fetching parameters associated will all the three files uploaded
$name1 = $_FILES['choose_file1']['name'];
$name2 = $_FILES['choose_file2']['name'];
$name3 = $_FILES['choose_file3']['name'];
$tmp1 =  $_FILES['choose_file1']['tmp_name'];
$tmp2 =  $_FILES['choose_file2']['tmp_name'];
$tmp3 =  $_FILES['choose_file3']['tmp_name'];
$type1 = $_FILES['choose_file1']['type'];
$type2 = $_FILES['choose_file2']['type'];
$type3 = $_FILES['choose_file3']['type'];

//Determining file extensions
$ext1 = strtolower(substr(($name1),strpos($name1,'.')+1));
$ext2 = strtolower(substr(($name2),strpos($name2,'.')+1));
$ext3 = strtolower(substr(($name3),strpos($name3,'.')+1));
if(isset($name1)){
	if(!empty($name1)){
	echo 'OK'.'<br>';
	$location_pic = $structure.'/';
	echo $location_pic;
	$name1 = 'corners.png';
	//Storing the first(Corner) image as corners.png in the folder specific to that frame
		if(($ext1=='png'|| $ext1=='jpeg'|| $ext1=='jpg') && move_uploaded_file($tmp1,$location_pic.$name1)){
		echo 'successfully uploaded1';
		}else{
		echo 'Error occurred while uploading11 '.$name1.' </br>Please choose a jpeg or png file';
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
		$name2 = 'right-left.png';
		//Storing the second(right-left) image as right-left.png in the folder specific to that frame
		if(($ext2=='png'|| $ext2=='jpeg'|| $ext2=='jpg') && move_uploaded_file($tmp2,$location_pic.$name2)){
		echo 'successfully uploaded2';
		}else{
		echo 'Error occurred while uploading12 '.$name2.' </br>Please choose a jpeg or png file';
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
		$name3 = 'top-bottom.png';
		//Storing the third(top-bottom) image as top-bottom.png in the folder specific to that frame
		if(($ext3=='png'|| $ext3=='jpeg'|| $ext3=='jpg') && move_uploaded_file($tmp3,$location_pic.$name3)){
		echo 'successfully uploaded3';
		}else{
		echo 'Error occurred while uploading13 '.$name3.' </br>Please choose a jpeg or png file';
		}
	}else{
	echo 'No File was chosen3';
	}
}



// Avoiding duplication by checking if the framename already exists in database
$query = "SELECT `fname` FROM `frames` WHERE `fname` = '$fname'";
$query_run = mysql_query($query);
if(mysql_num_rows($query_run)!=0){
echo 'fname exists';
}
else{
// Adding frame name to database
$queryi = "INSERT INTO `frames`(`fname`, `stock`, `color`,`baseprice`,`ftype`) VALUES ('$fname','$stock','$color','$base','$ftype')";
$queryi_run = mysql_query($queryi);
header('Location:admin_frame_upload.php');
}
}else{
echo 'All fields are mandatory';
}
?>

<!-- Form for frame upload -->
<form action="upload_adfile.php" method ="post" enctype="multipart/form-data">
<input type="file" name="choose_file1" id="choose_file1" class="form-control" placeholder="corners file" required><br><br>
<input type="file" name="choose_file2" id="choose_file2" class="form-control" placeholder="right-left file" required ><br><br>
<input type="file" name="choose_file3" id="choose_file3" class="form-control" placeholder="top-bottom file" required><br><br>
<select class="form-control" name="ftype">
  <option>Wooden</option>
  <option>Metallic</option>
</select>
<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter FrameName" required><br>
<select class="form-control" name="fsize">
  <option>-size1</option>
  <option>-size2</option>
  <option>-size3</option>
  <option>-size4</option>
</select>
<input type="text" name="stock" id="stock" class="form-control" placeholder="Initial stock" required><br>
<input type="text" name="color" id="color" class="form-control" placeholder="color" required><br>
<input type="text" name="base" id="base" class="form-control" placeholder="base price" required><br>

<input type="submit" name="upload">
</form>
<!-- form ends here -->