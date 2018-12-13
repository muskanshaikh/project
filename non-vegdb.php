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
	

	<h2 id="nonveg">Non-veg</h2>
	
	<ul>
	<div class="nonveg">

	<li for="Mutton korma">Mutton korma............................. Rs.120</li><br>

	<li for="Mutton Briyani">Mutton Briyani ............................. Rs.135</li><br>
	
	<li for="Chicken Briyani">Chicken Briyani............................. Rs.130</li><br>
	
	<li for="Fish Briyani">Fish Briyani................................ Rs.120</li><br>
	
	<li for="Chicken 65">Chicken 65....................................... Rs.145</li><br>
	
	<li for="Nihari Ghost">Nihari Ghost.................................. Rs.140</li><br>

	<li for="Bhuna kaleji">Bhuna kaleji.................................. Rs.135</li><br>
	
	<li for="Chicken chili">Chicken chili.................................. Rs.140</li><br>
	<li for="paya">Paya.................................................. Rs.140</li><br>
	</div>
</ul>
<input type=button id="back" onClick="parent.location='menudb.php'" value='Back'>
	<script src="rest.js" type="text/javascript"></script>
	<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>

	</body>
	</html>