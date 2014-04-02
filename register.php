<?php
//if($referer == 'index.php'){
if(isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['email_id'])&&isset($_POST['re-email'])&&isset($_POST['password'])&&isset($_POST['gender'])&&isset($_POST['day'])&&isset($_POST['month'])&&isset($_POST['year'])){
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email_id'];
$confirmEmail = $_POST['re_email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$day = $_POST['day'];
$monthname = $_POST['month'];
$year = $_POST['year'];
$month= 01;
switch($monthname){
case "January": 
	$month = 01;
	break;
case "February": 
	$month = 02;
	break;
case "March": 
	$month = 03;
	break;
case "April": 
	$month = 04;
	break;
case "May": 
	$month = 05;
	break;
case "June": 
	$month = 06;
	break;
case "July": 
	$month = 07;
	break;
case "August": 
	$month = 08;
	break;
case "September": 
	$month = 09;
	break;
case "October": 
	$month = 10;
	break;
case "November": 
	$month = 11;
	break;
case "December": 
	$month = 12;
	break;
}
$birthday = $year."-".$month."-".$day;

$query = "INSERT INTO `users`(`first_name`, `last_name`, `email_id`, `password`, `gender`, `birthday`) VALUES ('".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($gender)."','".mysql_real_escape_string($birthday)."')";

mysql_query($query);
}
//}
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>

<h2>Register Now!</h2>
  <form class="form-horizontal" id ="registerForm"role="form" action="<?php echo $current_file; ?>" method="post">
  
           	<label>Name</label> 
      <div class="row">
                      
	         <div class="col-md-6  "><input id ="firstName" name ="first_name" type="text" placeholder="Enter your First Name" class="form-control" required></div>
             <div class="col-md-5"> <input id ="lastname" name="last_name" type="text" placeholder="Enter your Last Name" class="form-control" required><br></div></div>
            
            <label >Email</label>
            <div class="row">
           <div class="col-md-6"> <input id ="email" name ="email_id" type="email" placeholder="Enter your email-id" class="form-control" required></div>
           <div class="col-md-5 "> <input id ="confirmEmail" name="re_email" type="email" placeholder="Re-enter your email-id" class="form-control" required><br></div></div>
            
            <label>Password</label>
            <div class="row">
           <div class="col-md-6"> <input id="password" name ="password" type="password" placeholder="Enter a new password" class="form-control" required><br></div></div>
            
            <label>Gender</label>
            <div class="row">
           <div class="col-md-6 ">  
			<select id ="gender" name="gender" class="form-control">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select> 
            </div></div>
            <br>
            <label>Birthday</label>
           <div class="row">
           <div class="col-md-3 ">
			<select id="day" name="day" class="form-control">
			  <option>Day</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select> </div>
            <div class="col-md-4">
			<select id="month" name="month" class="form-control">
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select> </div>
            <div class="col-md-4">
			<select id="year" name="year" class="form-control">
              <option>Year</option>
              <option>1900</option><option>1901</option><option>1902</option><option>1903</option><option>1904</option><option>1905</option><option>1906</option><option>1907</option><option>1908</option><option>1909</option><option>1910</option><option>1911</option><option>1912</option><option>1913</option><option>1914</option><option>1915</option><option>1916</option><option>1917</option><option>1918</option><option>1919</option><option>1920</option><option>1921</option><option>1922</option><option>1923</option><option>1924</option><option>1925</option><option>1926</option><option>1927</option><option>1928</option><option>1929</option><option>1930</option><option>1931</option><option>1932</option><option>1933</option><option>1934</option><option>1935</option><option>1936</option><option>1937</option><option>1938</option><option>1939</option><option>1940</option><option>1941</option><option>1942</option><option>1943</option><option>1944</option><option>1945</option><option>1946</option><option>1947</option><option>1948</option><option>1949</option><option>1950</option><option>1951</option><option>1952</option><option>1953</option><option>1954</option><option>1955</option><option>1956</option><option>1957</option><option>1958</option><option>1959</option><option>1960</option><option>1961</option><option>1962</option><option>1963</option><option>1964</option><option>1965</option><option>1966</option><option>1967</option><option>1968</option><option>1969</option><option>1970</option><option>1971</option><option>1972</option><option>1973</option><option>1974</option><option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option>            </select> 
            </div><div></div></div>
			<br>
			<div class="row">
			<div class="col-md-5">
            <button type="submit" class="btn btn-primary">Register</button></div></div>
          </form> 
  <!--    <form class="form-signin" role="form" action="<?php echo $current_file; ?>" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="login_user" type="text" class="form-control" placeholder="username" required autofocus>
        <input name ="login_pass" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>-->
      
</body>

</html>
