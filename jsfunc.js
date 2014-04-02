

//Browser Support Code
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
alert(queryString);
ajaxRequest.open("GET", "pass_update_query.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}



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
/*var password = document.getElementById('oldpass').value;
var newpassword = document.getElementById('newpass').value;
var repassword = document.getElementById('repass').value;*/
var queryString = "?id=" + id ;
/*queryString +=  "&newpass=" + newpassword + "&repass=" + repassword;
alert(queryString);
*/
ajaxRequest.open("GET", "add_del.php" + queryString, true);
 ajaxRequest.send(null); 
}




