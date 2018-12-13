<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Management System</title>
	<link rel="stylesheet" type="text/css" href="rest.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style type="text/css">
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

  
</head>
<body>
 <?php
    session_start();
    if($_SESSION['user']==true){
      echo "<div class='session'>";
    echo "Welcome"."  ".$_SESSION['user'];
    echo "</div>";
  }


?>
   <?php
	session_start();
    
    if($_SESSION['user']==true){
    
    if(isset($_POST['sub_btn'])){
    	
  	// if(isset($_POST['starter'])){

// var_dump($starter);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$veg = $_POST['veg'];

	// var_dump($starter);
	$veg_selected= array();
	$total_price = 0;
	$db=mysqli_connect("localhost","root","root","rest");
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	$i = 0;
	foreach ($veg as $veg_dish) {
		# code...
		$sql="select * from veg where dish ='$veg_dish'" ;
		$res=mysqli_query($db,$sql);
		

        while($row=mysqli_fetch_array($res)){
            $veg_selected[$i] = $row;
        	$i++;
        }
	}
	?>

	<table >
            <thead>
               <th>Dish</th>
                <th >Price</th>
                 
              
            </thead>
                
   	<?php

   	
   	
   	// var_dump($starter_selected);	
   	for ($i=0; $i < count($veg_selected); $i++) { 
   		# code...
   		
   			# code...
   		
   		?>

   		<tr>
              <td><?php echo $veg_selected[$i]['dish'];?></td>
                <td ><?php echo $veg_selected[$i]['price'];?></td><br>
           </tr>
          

          

             <?php  		$total_price += $veg_selected[$i]['price'];
   	} ?>  
   	</table>
          <?php      
           echo $total_price;  
      
   		
   		
   	
   	
   }
   
 }
   
 
      



   


   ?>


 
   


 
	<h1 id="grill">Grill And Chill Restaurant</h1>
	<img src="logo.jpg" id="img"></img>

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
	
<form action="veg.php" method="post">
	<h2 id="veget">Veg</h2>
	<ol>
	<div class="vegetable">
	<input type="checkbox" name="veg[]" id="paneer" value="Paneer makhani briyani">
	<label for="paneer">Paneer makhani briyani............................. Rs.100</label><br>
	<input type="checkbox" name="veg[]" id="mushroom" value="Mushroom briyani">
	<label for="mushroom">Mushroom briyani ............................. Rs.80</label><br>
	<input type="checkbox" name="veg[]" id="veg briyani" value="veg briyani">
	<label for="veg briyani">veg briyani............................. Rs.100</label><br>
	<input type="checkbox" name="veg[]" id="noodle" value="Veg Noodle">
	<label for="noodle">Veg Noodle............................. Rs.80</label><br>
	<input type="checkbox" name="veg[]" id="angara" value="Veg Angara">
	<label for="angara">Veg Angara....................................... Rs.185</label><br>
	<input type="checkbox" name="veg[]" id="mutter" value="Paneer Mutter">
	<label for="mutter">Paneer Mutter.................................. Rs.80</label><br>
	<input type="checkbox" name="veg[]" id="alu" value="Alu mutter">
	<label for="alu">Alu mutter................................. Rs.65</label><br>
	<input type="checkbox" name="veg[]" id="dal" value="Dal Tadka">
	<label for="dal">Dal Tadka.................................. Rs.60</label><br>
	<input type="checkbox" name="veg[]" id="handi" value="Veg Handi">
	<label for="handi">Veg Handi.................................. Rs.155</label><br>
	</div>
</ol>
<input type="button" id="add" name="sub_btn" onClick="parent.location='menu4.php'" value='ADD TO CART'>

	
	<input type=button  id="back" onClick="parent.location='menu4.php'" value='Back'>
	</form>

	<script src="rest.js" type="text/javascript"></script>

	<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>

	
	</body>
	</html>