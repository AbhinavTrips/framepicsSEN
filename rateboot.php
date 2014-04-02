<?php
if(isset($_GET['check'])){
$_GET['check'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Krajee JQuery Plugins - &copy; Kartik</title>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/star-rating.js" type="text/javascript"></script>
</head>
<body>
<form action="rateboot.php" method="get">
	<input name ="check" id="input-21" type="number" class="rating" min="1" max="5" step="1">
	<button class="btn btn-primary">Submit</button>
	<button class="btn btn-default" type="reset">Reset</button>
</form>
</body>
</html>