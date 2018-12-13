<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Management System</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="rest.css" />
</head>
<style type="text/css">
	.thank{
		font-style: italic;
		font-size: 20px;
		margin-top: 50px;
	}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    margin-top: 20px;


}
thead{
  width:50%;
  padding: 5px;
    text-align: left;
    border: 1px solid black;
    border-collapse: collapse;
}
table{
  width:50%;
}
th, td {
    padding: 5px;
    text-align: left;

}
 


</style>

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


		
<?php
session_start();


?>
<div class="thank">
<?php
echo "Thank you ".$_SESSION['user'];

$user=$_SESSION['user'];
$db=mysqli_connect("localhost","root","root","rest");
  
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
  }
 $query="select address from sign where username='$user'";
 
    $result=mysqli_query($db,$query);

?>
                <?php

            while ($row = mysqli_fetch_array($result)) {
                
            $add=$row['address'];
            
        }
        
     ?>
     <?php
echo " for ordering food your order will delivered in 30 min at  ". $add;
?>
</div>


</body>
	</html>