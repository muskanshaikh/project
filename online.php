
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
  width:100%;
  padding: 5px;
    text-align: left;
    border: 1px solid black;
    border-collapse: collapse;
}
table{
  width:100%;
}
th, td {
    padding: 5px;
    text-align: left;

}
 
 h4{
  font-style: italic;
  text-shadow: 0px 2px 4px;
  text-align: center;
  font-size: 20px;
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

  <h2 class="table">Reserve your table</h2>
  <form action="online.php" method="post">
  <div class="booknow">

    

     <label for="date" >Date: </label>
                <input type="date" name="date" id="date" class="form-input" required="required"/><br><br>
                </div>
            <div class="control">
                <label for="time" >Time:</label>
                <input type="time" id="time" name="time"
                       min="10:00" max="23:00" required="required" />
                       <br>
                <span class="hours">Restaurant hours: 10AM to 11PM</span><br><br>
            </div>
            <div class="party">
                  <label for="size">Party size: </label>
                  <select name="size" id="size" size="1" class="form-input" required="required">
                      <option value="">--------</option>
                      <option value="1">1 Person</option>
                      <option value="2">2 Person</option>
                      <option value="3">3 Person</option>
                      <option value="4">4 Person</option>
                      <option value="5">5 Person</option>
                      <option value="6">6 Person</option>
                  </select>

                  
                  
                  </div>
                  <div >
                 

<button name="sub_btn" id="book">Book Now</button>


</div>
</form>

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

if($_SESSION['user']==true){
  if(isset($_POST['sub_btn'])){

  

   $db=mysqli_connect("localhost","root","root","rest");
  
  
   
$date=$_POST['date'];
$time=$_POST['time'];
$size=$_POST['size'];
$user=$_SESSION['user'];
if( !empty($date)&& !empty($time) && !empty($size)){
 $db=mysqli_connect("localhost","root","root","rest");
   $sql="INSERT INTO reserve(date,time,party_size,User) VALUES('$date','$time','$size','$user')";

      $result=mysqli_query($db,$sql);

    $query="select * from reserve";
    $result=mysqli_query($db,$query);
    mysqli_close($db);
        if(!$result){
            echo "<br>".mysqli_error($db);
        }
        else{
            ?>
            <h4>****************************************Booking Details****************************************</h4>
            <table >
            <thead>
               <th>Username</th>
                <th >Date</th>
                 <th>Time</th>
                 <th >Party_size</th>

              
            </thead>
                <?php

            while ($row = mysqli_fetch_array($result)) {
                
            
        
     ?>

               
            <tr>
              <td><?php echo $row['User'];?></td>
                <td ><?php echo $row['date'];?></td>
           
               
                <td ><?php echo $row['time'];?></td>
                
                <td ><?php echo $row['party_size'];?></td>
            </tr><?php        
      }
      ?></table>
  <?php      
    }
  
   
 }
}
}
?>

<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>

  
</body>
</html>