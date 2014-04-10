<div style="border-bottom:dotted">
<form action="update_inventory.php" method ="post" enctype="multipart/form-data">
<select class="form-control" name="fname">
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
<input type="text" name="stock" id="stock" class="form-control" placeholder="stock" required><br>
<input type="text" name="base" id="base" class="form-control" placeholder="base price" required><br>

<input type="submit" name="upload">
</form><br>
</div>
<!--</body>

</html>
-->