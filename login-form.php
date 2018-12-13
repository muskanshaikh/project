
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<title>Restaurant Management System</title>
	<link rel="stylesheet" type="text/css" href="rest.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
	 </head>
    <body>
    
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
	<img src ="img/grill.jpg"  id="slideimage">
	</div>
<?php

session_start();
$db=mysqli_connect("localhost","root","root");
if(!$db){
  die("database connection failed" .mysqli_error($db));
}

$select_db=mysqli_select_db($db,'rest');
 if(!$select_db){
  die("database selection failed" .mysqli_error($db));
}  


if(isset($_POST['sub_btn'])){

  $user=$_POST['user'];
  $pass=$_POST['pass'];
   $db=mysqli_connect("localhost","root","root","rest");
  $sql="SELECT * FROM sign WHERE username='$user' AND password='$pass'";

  $result=mysqli_query($db,$sql);
  $count=mysqli_num_rows($result);
  if($count==1){
   $_SESSION['user']=$user;
   header('location:rest2.php');
  }
  else{
 
  header('location:login-form.php');
  }
}


?>

<div id="rest">
	<form  action="login-form.php" method="post" onsubmit="return validation()">
	<h2>Login</h2>
	<input type="text" name="user" placeholder="username" >

	<input type="password" name="pass" placeholder="password">
	<input type="submit" name="sub_btn" value="login">
	<a href="login.php" id="log">dont have an account?</a><br>
	<a href="#" id="log">Forget Password?</a>

</form>
</div>



  <footer style="
  text-align: center;
  padding: 10px;
  color:black;
  background-color:grey;
margin-top: 650px;
  bottom: 0;
  width: 100%;"
>
    <div>
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
    </div>
  </footer>

 
 
</body>
</html>