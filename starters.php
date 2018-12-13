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
	$starter = $_POST['starter'];

	// var_dump($starter);
	$starter_selected= array();
	$total_price = 0;
	$db=mysqli_connect("localhost","root","root","rest");
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	$i = 0;
	foreach ($starter as $starter_dish) {
		# code...
		$sql="select * from starter where dish ='$starter_dish'" ;
		$res=mysqli_query($db,$sql);
		

        while($row=mysqli_fetch_array($res)){
            $starter_selected[$i] = $row;
        	$i++;
        }
	}
	?>

	<table id="displaytable">
            <thead>
               <th>Dish</th>
                <th >Price</th>
                 
              
            </thead>
                
   	<?php

   	
   	
   	// var_dump($starter_selected);	
   	for ($i=0; $i < count($starter_selected); $i++) { 
   		# code...
   		
   			# code...
   		
   		?>

   		<tr>
              <td><?php echo $starter_selected[$i]['dish'];?></td>
                <td ><?php echo $starter_selected[$i]['price'];?></td><br>
           </tr>
          

          

             <?php  		$total_price += $starter_selected[$i]['price'];
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
	

	<h2 id="start">Starters</h2>
	<form action="starters.php" method="post">
	<ol>
	<div class="starter">
	<input type="checkbox" name="starter[]" id="spring" value="Chicken spring roll ">
	<label for="spring" value="Chicken spring roll" >Chicken spring roll.............................Rs20</label><br>

	<input type="checkbox" name="starter[] " id="Manchurian" value="Chicken Manchurian" >
	<label for="Manchurian">Chicken Manchurian ...........................Rs35</label>
	<br>
	<input type="checkbox" name="starter[]" id="Seekh kabab" value="Seekh kabab">
	<label for="Seekh kabab">Seekh kabab............................. .Rs40</label>
	<br>
	<input type="checkbox" name="starter[]"" id="Bread roll" value="Bread roll">
	<label for="Bread roll">Bread roll............................. Rs30</label>
	<br>
	<input type="checkbox" name="starter[]" id="momos" value="Momos">
	<label for="momos">Momos.......................................Rs20 </label>
	<br>
	<input type="checkbox" name="starter[]" id="veg cutlet" value="Veg Cutlet">
	<label for="veg cutlet">Veg Cutlet.................................Rs25 </label><br>
	<input type="checkbox" name="starter[]" id="samosa" value="Baked samosa">
	<label for="samosa">Baked samosa..................................Rs10 </label>
	<br>
	<input type="checkbox" name="starter[]" id="vada pav" value="vada pav">
	<label for="vada pav">vada pav.................................. .Rs15</label>
	<br>
	<input type="checkbox" name="starter[]" id="soup" value="Manchow soup">
	<label for="soup">Manchow soup...................................Rs20</label>
<br>
	</div>
</ol>
<input type="button" id="add" name="sub_btn" onClick="parent.location='menu4.php'" value='ADD TO CART'>

<input type=button id="back" onClick="parent.location='menu4.php'" value='Back'>
</form>

	<script src="rest.js" type="text/javascript"></script>
	<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>

	</body>
	</html>