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

#order{
	margin-top: 150px;
	margin-left: 120px;
	margin-bottom: 50px;
	border-radius: 20px;
	font-size: 15px;
	padding: 10px;
	cursor: pointer;
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
	<h1 id="grill">Grill And Chill Restaurant</h1>
	<img src="logo.jpg" id="img"></img>

	<header>
		<nav>
			<ul>
			<img src="img.png" id="chill">
    
				<li><a href="rest2.php">Home</a></li>
				<li><a href="login-form.php">Login</a></li>
				 <li><a href="logout.php">Logout</a></li>
				 <li><a href="orderonline.php">Order</a></li>

				<li><a href="menu4.php">Menu</a></li>
				
				<li><a href="online.php">Reservation</a></li>

				<li><a href="about(1).php">About</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="slideshow">
	<hr>
	<img src ="citizen6.jpg"  id="slideimage">
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
	
		<table id ='displaytable' >
            <thead>
               <th>Dish</th>
                <th >Price</th>
                 
              
            </thead>
                
   	<?php
   	// var_dump($starter_selected);	
   	for ($ve=0; $ve < count($starter_selected); $ve++) { 
   		?>

   		<tr>
              <td><?php echo $starter_selected[$ve]['dish'];?></td>
                <td ><?php echo $starter_selected[$ve]['price'];?></td><br>
           </tr>
             <?php  $total_price += $starter_selected[$ve]['price'];
   	} 
   	 

	 // var_dump($non_veg_selected);	
	 for ($k=0; $k < count($non_veg_selected); $k++) { 	 
		 ?>

		 <tr>
			<td><?php echo $non_veg_selected[$k]['dish'];?></td>
			  <td ><?php echo $non_veg_selected[$k]['price'];?></td><br>
		 </tr>
		   <?php 	$total_non += $non_veg_selected[$k]['price'];
	 } ?>  
	
		<?php      
		 	 
	 
   	// var_dump($dessert_selected);	
   	for ($de=0; $de < count($dessert_selected); $de++) { 
   		?>

   		<tr>
              <td><?php echo $dessert_selected[$de]['dish'];?></td>
                <td ><?php echo $dessert_selected[$de]['price'];?></td><br>
           </tr>
             <?php  $total_price += $dessert_selected[$de]['price'];
   	} ?>  
		  <?php   
   	// var_dump($veg_selected);	
   	for ($ve=0; $ve < count($veg_selected); $ve++) { 
   		?>
   		<tr>
              <td><?php echo $veg_selected[$ve]['dish'];?></td>
                <td ><?php echo $veg_selected[$ve]['price'];?></td><br>
           </tr>
             <?php  		$total_price += $veg_selected[$ve]['price'];
   	} ?>  
   	</table>
		  <?php      
		   $total =$total_des + $total_non + $total_price + $total_veg; 
		   echo $total; 
   } 
 }
   ?>


<form action="">
	<input type="radio" value="cash " >Cash On Delivery<br>
	<input type="radio" name="debit"  value="debit" >Debit Card<br>
	<input type="radio" name="net"value="net" id="net">Net Banking<br>
	<input type="radio" name="paytm"value="paytm" id="paytm">Paytm<br>
 </form>


	</body>
	</html>


