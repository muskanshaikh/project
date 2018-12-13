<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Management System</title>
	<link rel="stylesheet" type="text/css" href="rest.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
	

	<h2 id="dese">Dessert</h2>
	
	<ol>
	<div class="dese">
	<input type="checkbox" name="Mini cinnamon sugar donuts" id="Mini cinnamon sugar donuts">
	<label for="Mini cinnamon sugar donuts">Mini cinnamon sugar donuts............................. Rs.20</label><br>
	<input type="checkbox" name="Classic vanilla cheesecake " id="Classic vanilla cheesecake">
	<label for="Classic vanilla cheesecake">Classic vanilla cheesecake ............................. Rs.25</label><br>
	<input type="checkbox" name="Fudge cake" id="Fudge cake">
	<label for="Fudge cake">Fudge cake................................................. Rs.30</label><br>
	<input type="checkbox" name="Apple pie" id="Apple pie">
	<label for="Apple pie">Apple pie................................................. Rs.20</label><br>
	<input type="checkbox" name="Lemon meringue pie" id="Lemon meringue pie">
	<label for="Lemon meringue pie">Lemon meringue pie....................................... Rs.45</label><br>
	<input type="checkbox" name="Coconut pie" id="Coconut pie">
	<label for="Coconut pie">Coconut pie............................................ Rs.40</label><br>
	<input type="checkbox" name="pecan pie " id="pecan pie">
	<label for="pecan pie">pecan pie.......................................... Rs.35</label><br>
	<input type="checkbox" name="Ice-cream" id="Ice-cream">
	<label for="Ice-cream">Ice-cream...........................................Rs.40</label><br>
	<input type="checkbox" name="Cold-drinks" id="Cold-drinks">
	<label for="Cold-drinks">Cold-drinks...................................... Rs.30</label><br>
	</div>
</ol>
<input type=button id="add"  value='ADD TO CART' onClick="parent.location='online_order.php'">
<input type=button id="back" onClick="parent.location='menu4.php'" value='Back'>
	<script src="rest.js" type="text/javascript"></script>
	<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>
<script>
function back(){
	document.getElementById()
}

	</body>
	</html>