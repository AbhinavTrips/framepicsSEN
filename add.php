<?php
/*

Include this file to display the stored addresses. There are options of deleting the addresses and choosing one of them as default.

Coded by : Abhinav Tripathi

*/
if(loggedin()){
$id = $_SESSION['user_id'];
$query = "SELECT * FROM `address` WHERE `userid` = '$id'";
$query_run = mysql_query($query);
for($i=0;$i<2;$i++) // This loop runs twice to retrieve values each time. We have ensured on dashboard.php that only two addresses are stored
{
$query_array=mysql_fetch_array($query_run);
$def = $query_array['def'];
$aid = $query_array['aid'];
if($i==0){
echo '<div class="col-md-5 add">';
}else{
if($def == NULL){
break;
}
echo '<div class="col-md-5 col-md-offset-1 add">';
}

// Displaying the retrieved information

echo $query_array['firstname'].' '.$query_array['lastname'].'<br>'.$query_array['address1'].'<br>'.$query_array['address2'].'<br>'.$query_array['city'].'<br>'.$query_array['state'].'-'.$query_array['pin'].'<br>'.$query_array['mobile'];

// If we already have a default address, disable make default button for it.
if($def == 1){
echo '<div class="row"><br><div class="col-md-5"><button type="button" class="btn btn-success btn-sm disabled">Default</button></div><div class="col-md-5 col-md-offset-1"><button id="'.$aid.'" type="button" class="btn btn-danger btn-sm" onclick=\'add_del('.$aid.')\'>Delete</button></div></div><br></div>';}
else{
echo '<div class="row"><br><div class="col-md-5"><button type="button" class="btn btn-success btn-sm" onclick=\'setDefault('.$aid.')\'>Default</button></div><div class="col-md-5 col-md-offset-1"><button id="'.$aid.'" type="button" class="btn btn-danger btn-sm" onclick=\'add_del('.$aid.')\'>Delete</button></div></div><br></div>';

}
}
}
?>
