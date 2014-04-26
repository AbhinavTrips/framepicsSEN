<?php
require 'connection.php';
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 													Page to let the admin view all the orders. Implemented by Abhinav Tripathi

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
if(adloggedin()){
/*$user = $_SESSION['user_id'];
*/$query = "SELECT * FROM `order_frame` WHERE '1'";
if($run = mysql_query($query)){
	for($i=0;$i<mysql_num_rows($run);$i++){
	$query_array=mysql_fetch_array($run);
	$oid = $query_array['orderid'];
	$fid = $query_array['frameid'];
	$mid = $query_array['mountid'];
	$status = $query_array['status'];
	$delivery = $query_array['delivery'];
	$price = $query_array['price'];
	$queryf = "SELECT `color` FROM `frames` WHERE `frameid`='$fid'";
		if($runf = mysql_query($queryf)){
			for($f=0;$f<mysql_num_rows($runf);$f++){
			$query_arrayf = mysql_fetch_array($runf);
			//$colorf = $query_arrayf['color'];
			}
		}
	$querym = "SELECT `color` FROM `mount` WHERE `mountid`='$mid'";
		if($runm = mysql_query($querym)){
			for($m=0;$m<mysql_num_rows($runm);$m++){
			$query_arraym = mysql_fetch_array($runm);
			//$colorm = $query_arraym['color'];
			}
		}
		
	$queryr = "SELECT * from `reciever` WHERE `orderid` = '$oid'";
		if($runr = mysql_query($queryr)){
				for($r=0;$r<mysql_num_rows($runr);$r++){
				$query_arrayr = mysql_fetch_array($runr);
				$rfname = $query_arrayr['rfname'];
				//echo $rfname;
				$rlname = $query_arrayr['rlname'];
				$radd1 = $query_arrayr['radd1'];
				$radd2 = $query_arrayr['radd2'];
				$rcity = $query_arrayr['rcity'];
				$rstate = $query_arrayr['rstate'];
				$rmobile = $query_arrayr['rmobile'];
				$remail = $query_arrayr['remail'];
				}
			
		}  
		echo '<tr>
                  <td>'.$oid.'</td>
                  <td>'.$fid.'</td>
                  <td>'.$mid.'</td>
                  <td>
                  <div class="row">
                  <div class="col-md-12">
    			  <div class="input-group">
     			  <input type="text" class="form-control" id ="status'.$oid.'" name ="status" type="text" placeholder="'.$status.'">
     			  <span class="input-group-btn">
     			  <button id = "'.$oid.'" class="btn btn-default" type="button" onclick="statusUpdate('.$oid.')"><span class="glyphicon glyphicon-ok"></span></button>
     			  </span></div>
   				  </div><!-- /input-group -->
  				  </div>
  				  <div class ="row">
			      <div class = "col-md-10" id = "stat'.$oid.'"><img align = "center" id="imgs'.$oid.'"></div>
			      </div>
			      </td>
                  
                  <td>
                  <div class="row">                    
	     	         <div class="col-md-6">
	            		   <div class="input-group">
	     	      		   <input id ="dates'.$oid.'" name ="status" type="date" placeholder="'.$delivery.'" class="form-control" value="'.$delivery.'">
   	        	    	   <span class="input-group-btn">    	         
					 	   <button id = "dateb'.$oid.'" type="button" class="btn btn-primary" onclick="deliveryUpdate('.$oid.')"><span class="glyphicon glyphicon-ok"></span></button></span></div>	     	        
				  </div>
				  </div>
			         <div class = "row ">
			         <div class = "col-md-10" id = "date'.$oid.'">
			         <label id="label'.$oid.'"></label>
			         <img align = "center" id="img'.$oid.'"></div>
			         <div class = "row "> </div>

			         </div>
				  </td>
                  <td>'.$price.'</td>
                  <td>'.$rfname.'<br>'.$rlname.'<br>'.$radd1.'<br>'.$radd2.'<br>'.$rcity.'<br>'.$rstate.'<br>'.$rmobile.'<br>'.$remail.'</td>
              </tr>';
	}
	
}
}
else{
echo 'Please login to continue';
}
?> 


