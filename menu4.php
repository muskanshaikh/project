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
	
	
	<div id="menu">Menu

	</div>

	<div class="gallery">
	<figure>

	<h3 id="starter">Starters</h3>
	
	<img  id="star" src="img/starter.jpg"  >

	</figure>
	<figure>
	<h3 id="veg">Veg</h3>
	<img  id="vegdish" src="img/veg.jpg"  >
	</figure>
	<figure>
	<h3 id="non-veg">Non-Veg</h3>
	<img  id="non-vegdish" src="img/non-veg.jpg"  >
	</figure>
	<figure>
	<h3 id="dessert">Desserts</h3>
	<img  id="des" src="img/dessert.jpeg"  >
	</figure>
	</div>
	
	<h2 id="start">Starters</h2>
	<form action="orderonline.php" method="post">
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
	<input type="checkbox" name="starter[]" id="Bread roll" value="Bread roll">
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
<h2 id="nonveg">Non-veg</h2>
		<ol>
	<div class="nonveg">
	<input type="checkbox" name="non_veg[]" value="Mutton korma" id="Mutton korma">
	<label for="Mutton korma">Mutton korma............................. Rs.120</label><br>
	<input type="checkbox"  name="non_veg[] " value="Mutton Biryani" id="Mutton Biryani">
	<label for="Mutton Biryani">Mutton Biryani ............................. Rs.135</label><br>
	<input type="checkbox"  name="non_veg[] "  value="Chicken Biryani" id="Chicken Biryani">
	<label for="Chicken Biryani">Chicken Biryani............................. Rs.130</label><br>
	<input type="checkbox"  name="non_veg[] " value="Fish Biryani" id="Fish Biryani">
	<label for="Fish Biryani">Fish Biryani................................ Rs.120</label><br>
	<input type="checkbox"  name="non_veg[] " value="Chicken 65" id="Chicken 65">
	<label for="Chicken 65">Chicken 65....................................... Rs.145</label><br>
	<input type="checkbox"  name="non_veg[] " value="Nihari Ghost" id="Nihari Ghost">
	<label for="Nihari Ghost">Nihari Ghost.................................. Rs.140</label><br>
	<input type="checkbox" name="non_veg[] " value="Bhuna kaleji" id="Bhuna kaleji">
	<label for="Bhuna kaleji">Bhuna kaleji.................................. Rs.135</label><br>
	<input type="checkbox" name="non_veg[] " value="Chicken chili" id="Chicken chili">
	<label for="Chicken chili">Chicken chili.................................. Rs.140</label><br>
	<input type="checkbox"  name="non_veg[]" value="paya" id="paya">
	<label for="paya">Paya.................................................. Rs.140</label><br>
	</div>
</ol>

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

<h2 id="dese">Dessert</h2>
	<ol>
	<div class="dese">
	<input type="checkbox" name="dessert[]"  value="Mini cinnamon sugar donuts" id="Mini cinnamon sugar donuts">
	<label for="Mini cinnamon sugar donuts">Mini cinnamon sugar donuts............................. Rs.20</label><br>
	<input type="checkbox" name="dessert[]" value="Classic vanilla cheesecake"id="Classic vanilla cheesecake">
	<label for="Classic vanilla cheesecake">Classic vanilla cheesecake ............................. Rs.25</label><br>
	<input type="checkbox" name="dessert[]" value="Fudge cake"id="Fudge cake">
	<label for="Fudge cake">Fudge cake................................................. Rs.30</label><br>
	<input type="checkbox" name="dessert[]" value="Apple pie" id="Apple pie">
	<label for="Apple pie">Apple pie................................................. Rs.20</label><br>
	<input type="checkbox" name="dessert[]" value="Lemon meringue pie" id="Lemon meringue pie">
	<label for="Lemon meringue pie">Lemon meringue pie....................................... Rs.45</label><br>
	<input type="checkbox" name="dessert[]" value="Coconut pie" id="Coconut pie">
	<label for="Coconut pie">Coconut pie............................................ Rs.40</label><br>
	<input type="checkbox" name="dessert[]" value="pecan pie" id="pecan pie">
	<label for="pecan pie">pecan pie.......................................... Rs.35</label><br>
	<input type="checkbox" name="dessert[]"  value="Ice-cream" id="Ice-cream">
	<label for="Ice-cream">Ice-cream...........................................Rs.40</label><br>
	<input type="checkbox" name="dessert[]" value="Cold-drinks" id="Cold-drinks">
	<label for="Cold-drinks">Cold-drinks...................................... Rs.30</label><br>
	</div>
</ol>


<input type="submit" id="add" name="sub_btn" onClick="parent.location='menu4.php'" value='ADD TO CART'>

</form>

	<script src="rest.js" type="text/javascript"></script>
	<footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>
<script src="rest.js" type="text/javascript"></script>

	</body>
	</html>