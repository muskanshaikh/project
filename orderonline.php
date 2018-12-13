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
  margin-top: 100px;
}
th, td {
    padding: 5px;
    text-align: left;

}

#order{
	margin-top: 150px;
	margin-left: 120px;
	margin-bottom: 50px;
	border-radius: 20px;
	font-size: 15px;
	padding: 10px;
	cursor: pointer;
}


/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    margin-left: 800px;

   
    
  
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;

}
.price{
	margin-left: 500px;
	margin-bottom: 160px;
	margin-top: 20px;
}
#displaytable{
	margin-left:20px;
	margin-top: 100px;
	padding: 10px;
}
div h4{
	margin-left: 800px;
	margin-top: -400px;
	padding: 20px;


}
#sub{
	margin-left: 1000px;
	cursor: pointer;
	padding:10px;
	border-radius: 20px;
}

#sub:hover{
	background-color: yellow;
}

</style>
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
	<img src ="img/citizen6.jpg"  id="slideimage">
	</div>
	
	
	<script src="rest.js" type="text/javascript"></script>

 <?php
	session_start();
    if($_SESSION['user']==true){
    
    if(isset($_POST['sub_btn'])){
    	
  	// if(isset($_POST['starter'])){

// var_dump($starter);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	

	// var_dump($starter);
	$starter_selected= array();
	$total_price = 0;
	$db=mysqli_connect("localhost","root","root","rest");
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	$ve = 0;
	$starter = $_POST['starter'];
	foreach ($starter as $starter_dish) {
		# code...
		$sql="select * from starter where dish ='$starter_dish'" ;
		$res=mysqli_query($db,$sql);
		

        while($row=mysqli_fetch_array($res)){
            $starter_selected[$ve] = $row;
        	$ve++;
        }
	}
	
	

	// var_dump($starter);
	$non_veg_selected = array();
	$total_non = 0;
	   $j = 0;
	   $non_veg = $_POST['non_veg'];
	 foreach ($non_veg as $non_veg_dish) {
		 # code...
		 $sql="select * from non_veg where dish ='$non_veg_dish'" ;
		 $res=mysqli_query($db,$sql);
		 
   
		 while($row=mysqli_fetch_array($res)){
			 $non_veg_selected[$j] = $row;
			 $j++;
		 }
	 }
	 $dessert_selected = array();
	 $total_des = 0;
	 $total=0;
	 $dessert = $_POST['dessert'];
	 $d = 0;
	 foreach ($dessert as $dessert_dish) {
		 # code...
		 $sql="select * from dessert where dish ='$dessert_dish'" ;
		 $res=mysqli_query($db,$sql);

		 $user=$_SESSION['user'];
 $query="select address,name,mobile from sign where username='$user'";
 
    $result=mysqli_query($db,$query);

		 
 
		 while($row=mysqli_fetch_array($res)){
			 $dessert_selected[$d] = $row;
			 $d++;
		 }
	 }

	 $veg = $_POST['veg'];
	$veg_selected= array();
	$total_veg = 0;
	$v = 0;
	foreach ($veg as $veg_dish) {
		# code...
		$sql="select * from veg where dish ='$veg_dish'" ;
		$res=mysqli_query($db,$sql);
		

        while($row=mysqli_fetch_array($res)){
            $veg_selected[$v] = $row;
        	$v++;
        }
	}


	
?>
                <?php

            while ($row = mysqli_fetch_array($result)) {
                
           
        }
        
     ?>

               
           
		<table id ='displaytable' >
            <thead>
           
                 
               <th style="text-align: center;">Dish</th>
                <th style="text-align: center;">Price</th>
                
              
            </thead>

                
   	<?php
   	// var_dump($starter_selected);	
   	for ($ve=0; $ve < count($starter_selected); $ve++) { 
   		?>

   		<tr>
              <td ><?php echo $starter_selected[$ve]['dish'];?></td><br>
                <td style="text-align:right;"><?php echo $starter_selected[$ve]['price'];?></td><br>
                

                

             
                          </tr>
             <?php  $total_price += $starter_selected[$ve]['price'];
   	} 
   	

	 // var_dump($non_veg_selected);	
	 for ($k=0; $k < count($non_veg_selected); $k++) { 	 
		 ?>

		 <tr>
		

			<td><?php echo $non_veg_selected[$k]['dish'];?></td><br>
			  <td style="text-align: right;" ><?php echo $non_veg_selected[$k]['price'];?></td><br>
			  
	 </tr>
		   <?php 	$total_non += $non_veg_selected[$k]['price'];
	 } ?>  
	
		<?php      
		 	 
	 
   	// var_dump($dessert_selected);	
   	for ($de=0; $de < count($dessert_selected); $de++) { 
   		?>

   		<tr>
   		

              <td><?php echo $dessert_selected[$de]['dish'];?></td>
                <td style="text-align:right;"><?php echo $dessert_selected[$de]['price'];?></td><br>
                
                          </tr>
             <?php  $total_price += $dessert_selected[$de]['price'];
   	} ?>  
		  <?php   
   	// var_dump($veg_selected);	
   	for ($ve=0; $ve < count($veg_selected); $ve++) { 
   		?>
   		<tr>
   		

              <td><?php echo $veg_selected[$ve]['dish'];?></td>
                <td style="text-align: right;"><?php echo $veg_selected[$ve]['price'];?></td><br>
               
               
           </tr>
             <?php  		$total_price += $veg_selected[$ve]['price'];
   	} ?>  
   	</table>
		  <?php      
		   $total =$total_des + $total_non + $total_price + $total_veg; 
		  ?><div class="price"><?php echo "Total price=".$total; ?></div><?php
   } 
 }




   ?>
 <div><h4 id="modes">Modes of payment</h4> </div>  
<label class="container">Cash on delivery
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Debit card
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Net banking
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">paytm
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>

<input type="submit" id="sub" name="sub_btn"  value='Submit' onClick="parent.location='order.php'">
<p><span id='display'></span></p>

<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>

	</body>
	</html>


