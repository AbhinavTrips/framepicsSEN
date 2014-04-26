function reg(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
   if(ajaxRequest.readyState != 4){
 // alert(date);
 document.getElementById(regDiv).setAttribute('src','images/ajax-loader.gif');

    //  var ajaxDisplay = document.getElementById(date);
	// ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }

   if(ajaxRequest.readyState == 4){
 // alert(date);
      var ajaxDisplay = document.getElementById('regDiv');
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var first = document.getElementById('first').value;
var last = document.getElementById('last').value;
var email = document.getElementById('email').value;
var repass = document.getElementById('repass').value;
var mobile = document.getElementById('mobile').value;
var pass = document.getElementById('pass').value;
if(repass == pass){
var queryString = "?first=" + first ;
queryString += "&last=" +last+"&email=" +email+"&repass=" +repass+"&mobile=" +mobile+"&pass=" +pass;
//alert(queryString);
ajaxRequest.open("GET", "reg_process.php" + 
                              queryString, true);
                                ajaxRequest.send(null); 
 }else{
 alert('Emails do not match');
 }


}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////





/////////////////////////////////////////// This function is called from admin_pending.php or admin_order.php for updating delivery date //////////////////////////////////////////
///////////////////////////////////////////////////////////////////// Implemented by Abhinav Tripathi /////////////////////////////////////////////////////////////////////////////

function deliveryUpdate($id){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
   if(ajaxRequest.readyState != 4){
   var a = 'img';
   var id = $id;
   var load = a.concat($id);
 // alert(date);
 document.getElementById(load).setAttribute('src','images/ajax-loader.gif');

    //  var ajaxDisplay = document.getElementById(date);
	// ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }

   if(ajaxRequest.readyState == 4){
   var dat = 'date';
   var id = $id;
   var date = dat.concat($id);
 // alert(date);
      var ajaxDisplay = document.getElementById(date);
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var del = 'dates';
var deldate = del.concat($id);
//alert(deldate);
var delivery = document.getElementById(deldate).value;
var oid = $id;
alert(oid);
var queryString = "?del=" + delivery ;
queryString += "&oid=" +oid;
//alert(queryString);
ajaxRequest.open("GET", "deliveryUpdate.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////





/////////////////////////////////////////// This function is called from admin_pending.php or admin_order.php for updating status /////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////// Implemented by Abhinav Tripathi /////////////////////////////////////////////////////////////////////////////


function statusUpdate($id){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
   if(ajaxRequest.readyState == 4){
   var stat = 'stat';
   var id = $id;
   var stats = stat.concat($id);
  //alert(stats);
      var ajaxDisplay = document.getElementById(stats);
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var state = 'status';
var statusq = state.concat($id);
alert(statusq);
var status = document.getElementById(statusq).value;
var oid = $id;
alert(oid);
var queryString = "?status=" + status ;
queryString += "&oid=" +oid;
//alert(queryString);
ajaxRequest.open("GET", "statusUpdate.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////



//////////////////////////////////// js function for adding a new address from user dashboard///////////////
/////////////////////////////////////////// Nachiket Desai//////////////////////////////////////////////////


function address(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
     if(ajaxRequest.readyState != 4){
 
 document.getElementById('addimage').setAttribute('src','images/ajax-loader.gif');

    //  var ajaxDisplay = document.getElementById(date);
	// ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }

   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('newAdd');
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var first = document.getElementById('first').value;
var last = document.getElementById('last').value;
var add1 = document.getElementById('add1').value;
var add2 = document.getElementById('add2').value;
var pin = document.getElementById('code').value;
var city = document.getElementById('city').value;
var state = document.getElementById('state').value;
var email = document.getElementById('mail').value;
var mobile = document.getElementById('mobi').value;
var queryString = "?first=" + first ;
queryString +=  "&last=" + last + "&add1=" + add1 + "&add2=" + add2 + "&city=" + city + "&state=" + state  + "&pin=" + pin + "&email=" + email + "&mobile=" + mobile;
//alert(queryString);
ajaxRequest.open("GET", "new_add.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////// Function to update password on dashboard.php page //////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////               Function written by Sneha Reddy               ///////////////////////////////////////////////////////////
function updatepass(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
     if(ajaxRequest.readyState != 4){
 
 document.getElementById('passimage').setAttribute('src','images/ajax-loader.gif');
   }
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var password = document.getElementById('oldpass').value;
var newpassword = document.getElementById('newpass').value;
var repassword = document.getElementById('repass').value;
var queryString = "?oldpass=" + password ;
queryString +=  "&newpass=" + newpassword + "&repass=" + repassword;
ajaxRequest.open("GET", "pass_update_query.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////// Function to choose a default address on dashboard.php page //////////////////////////////////////////////////////////////

function setDefault(id){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('defChange');
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
/*var password = document.getElementById('oldpass').value;
var newpassword = document.getElementById('newpass').value;
var repassword = document.getElementById('repass').value;*/
var queryString = "?id=" + id ;
/*
queryString +=  "&newpass=" + newpassword + "&repass=" + repassword;
alert(queryString);
*/ajaxRequest.open("GET", "set_def.php" +queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////



////////////////////////////////////////////// Function to delete a stored address on dashboard.php page by AbhinavTripathi ///////////////////////////////////////////////////////

function add_del(id){
 var id = id;
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('defChange');
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var queryString = "?id=" + id ;
ajaxRequest.open("GET", "add_del.php" + queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////**************************************************//////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////// Function to update personal information on dashboard.php page ///////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////               Function written by Dweep Trivedi               ///////////////////////////////////////////////////////////

function personal(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	  try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
 
    if(ajaxRequest.readyState != 4){
 
 document.getElementById('perimage').setAttribute('src','images/ajax-loader.gif');
   }

   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('pers');
	 ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
var firstname = document.getElementById('firstName').value;
var lastname = document.getElementById('lastName').value;
var email = document.getElementById('email').value;
var mobile = document.getElementById('mobile').value;
var queryString = "?first=" + firstname ;
queryString +=  "&last=" + lastname + "&email=" + email + "&mobile=" + mobile;
ajaxRequest.open("GET", "personal.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}


