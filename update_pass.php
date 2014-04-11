<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="docs-assets/ico/favicon.png">
	<script src="jsfunc.js"></script>
<!--    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<!--    <link href="css/bootstrap.css" rel="stylesheet">
-->
    <!-- Custom styles for this template -->
<!--    <link href="css/signin.css" rel="stylesheet">
-->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
<!--    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
   <!--[if lt IE 9]>
   <script src="html5shiv.js"></script>
    <script src="respond.min.js"></script>

    <![endif]
<title>Untitled 1</title>
-->          

</head>

<body>


<h2>Change Password</h2>
  <form class="form-horizontal" id ="updateForm" name ="updateForm" role="form">
  
           	<label>Old Password</label> 
     		 <div class="row">                    
	         <div class="col-md-12  "><input id ="oldpass" name ="oldpass" type="password" placeholder="Enter old password" class="form-control" required><br></div>
		     </div>
			 <label >New Password</label>     
	 		 <div class="row">                     
	         <div class="col-md-12  "><input id ="newpass" name ="newpass" type="text" placeholder="Enter new password" class="form-control" required><br></div>
		     </div>
            
            <label >Re-Enter new Password</label>
            <div class="row">
           <div class="col-md-12"> <input id ="repass" name ="repass" type="text" placeholder="Re-enter password" class="form-control" required><br></div></div>             
			<div class="row">
			<div class="col-md-5">
            <button type="button" id ="passb"class="btn btn-primary" onclick='updatepass()' >Change Password</button></div>
            </div>
          	</form>
               	  <div class ="row">
			      <div class = "col-md-10" id = "ajaxDiv"><img id="passimage"></div>
			      </div>
 </body>
 </html>         	
