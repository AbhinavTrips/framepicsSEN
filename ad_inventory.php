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
<form action="update_inventory.php" method ="post" enctype="multipart/form-data">
<select class="form-control" name="ftype">
<option>Select from available frames</option>
 <?php
 require 'connection.php';
$query = "SELECT `fname` FROM `frames` WHERE 1";
$run = mysql_query($query);
while($row = mysql_fetch_array($run)){
$namef = $row['fname'];
echo '<option>'.$namef.'</option>';
}
?>
</select>
<input type="text" name="stock" id="stock" class="form-control" placeholder="stock"><br>
<input type="text" name="base" id="base" class="form-control" placeholder="base price"><br>

<input type="submit" name="upload">
</form>
</body>

</html>
