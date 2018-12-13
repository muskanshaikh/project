

<!DOCTYPE html>

<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Register/Login</title>
	<link rel="stylesheet" type="text/css" href="rest.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body {
    background-color: lightblue;
}

@media screen and (min-width: 400px) {
    body {
        background-color: lightblue;
    }
}

@media screen and (min-width: 800px) {
    body {
        background-color: lavender;
    }
}
</style>

  

</head>
<body>


<?php
session_start();
$db=mysqli_connect("localhost","root","root","rest");
	 
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

if(isset($_POST['sub_btn']))
{
	$_SESSION['user']=$_POST['Name'];
	$name=$_POST['Name'];
	$gender=$_POST['Gender'];
	$address=$_POST['Address'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$c_pass=$_POST['cpass'];
	$mobile=$_POST['Mobile'];
	if($pass == $c_pass)
	{

		    $db=mysqli_connect("localhost","root","root","rest");
	 $sql="INSERT INTO sign(name,gender,address,username,password,c_pass,mobile) VALUES('$name','$gender','$address','$user','$pass','$c_pass','$mobile')";

			$result=mysqli_query($db,$sql);
			 if ( false==$result ) {
  printf("error: %s\n", mysqli_error($db));
			}
	}
	else {
  		echo 'done.';
	}
			header('location:login-form.php');
		}

     
?>


	<h1 id="grill">Grill And Chill Restaurant</h1>
	<img src="img/logo.jpg" id="img"></img>
	 



	<nav id="menu">
  <label for="tm" id="toggle-menu">Restaurant <span class="drop-icon">▾</span></label>
  <input type="checkbox" id="tm">
  <ul class="main-menu clearfix">
    <li><a href="rest2.php" style="text-decoration: none;">Home</a></li>
    <li><a href="login-form.php" style="text-decoration: none;">Login 
        <span class="drop-icon">▾</span>
        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
      </a>
      <input type="checkbox" id="sm1">
      <ul class="sub-menu">
        <li><a href="logout.php" style="text-decoration: none;">Logout</a></li>
       

      </ul>
    </li>
            <li><a href="menu4.php" style="text-decoration: none;">Menu</a></li>
            <li><a href="online.php" style="text-decoration: none;">Reservation</a></li>
    <li><a href="about(1).php" style="text-decoration: none;">About</a></li>

  </ul>
</nav>

	<div class="slideshow">
	<hr>
	<img src ="citizen6.jpg"  id="slideimage">
	</div>
	<div class="register">
	<form  action="login.php" method="post" onSubmit="return validation()" >
		<div >
		<h3 id="form">Registration Form</h3>
		
		<label >Name:</label>
		<input type="text" name="Name" class="form-input" id="name"/><br>
		<label>Gender:</label>
		<input type="radio" name="Gender" id="male" value="Male" class="form-input" required="required"/>
		<label for="male">Male</label>
		<input type="radio" name="Gender" id="female" value="Female" class="form-input" required="required"/>
		<label for="female">Female</label><br>
		<br>

		<label id="resident">Address: </label>
		<textarea cols="15" type="text" rows="4" name="Address" id="address" class="form-input" required="required"></textarea><br>
		
		<span class="req" class="text-danger">*</span>
		<label >Username:</label>
		<input type="text" name="user" placeholder="Username" id="user" class="form-input" /><br>
		<span class="req" class="text-danger">*</span>
		
		<label >Password:</label>
		<input type="password" name="pass" placeholder="Password"  id="pass" class="form-input" required="required"><br>
		
		<label >C password:</label>
		<input type="password" name="cpass" placeholder="Password"  id="cpass" class="form-input" required="required"><br>
	
		<label id="con">Contact:</label>
		<input type="text" name="Mobile" id="mobile"><br>
		
		<input type="submit" name="sub_btn" value="submit" id="submit">
		<input type="submit" name="Reset" value="Reset" id="Reset">

		</div>
		</form>
		</div>
	
	

<script src="rest.js"  type="text/javascript"></script>
	
<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>


	</body>
	</html>