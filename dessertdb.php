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
            <li><a href="menudb.php" style="text-decoration: none;">Menu</a></li>
            <li><a href="online.php" style="text-decoration: none;">Reservation</a></li>
    <li><a href="about(1).php" style="text-decoration: none;">About</a></li>

  </ul>
</nav>
	
	<div class="slideshow">
	<hr>
	<img src ="citizen6.jpg"  id="slideimage">
	</div>
	

	<h2 id="dese">Dessert</h2>
	
	<ul>
	<div class="dese">
	
	<li for="Mini cinnamon sugar donuts">Mini cinnamon sugar donuts............................. Rs.20</li><br>
	<li for="Classic vanilla cheesecake">Classic vanilla cheesecake ............................. Rs.25</li><br>
	<li for="Fudge cake">Fudge cake................................................. Rs.30</li><br>
	<li for="Apple pie">Apple pie................................................. Rs.20</li><br>
	<li for="Lemon meringue pie">Lemon meringue pie....................................... Rs.45</li><br>
	<li for="Coconut pie">Coconut pie............................................ Rs.40</li><br>
	<li for="pecan pie">pecan pie.......................................... Rs.35</li><br>
	<li for="Ice-cream">Ice-cream...........................................Rs.40</li><br>
	<li for="Cold-drinks">Cold-drinks...................................... Rs.30</li><br>
	</div>
</ul>
<input type=button id="back" onClick="parent.location='menudb.php'" value='Back'>
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