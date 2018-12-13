
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Management System</title>
	<link rel="stylesheet" type="text/css" href="rest.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  body {
    background-color: lightblue;
}

@media screen and (min-width: 400px) {
    body {
        background-color: lightblue;
    }
}

@media screen and (min-width: 800px) {
    body {
        background-color: lavender;
    }
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
	


 <div id="welcome">
 <header>
 <nav>
 	<h4 id="head">Welcome To Grill and Chill</h4>
 <div>
  	<p id="paragraph">We Specialize in delicious and resonably priced cuisine ,including our house specialities.Our extensive menu features chinese and indian dishes as well as filipine dish,all prepared using our secret family reciped whether you are in the mood to try something new or just want to enjoy some old favourites,we can assure you that our food and service will leave you satisfie.<span id="dots">...</span><span id="more">
  		This purposed application will manage all the needs from both ends from customer and as well as from management end.By using this application any organization can manage its all on going processes and also can generate reports that are very much important and fruitful in the growth of organization. </span> </p>
      </div>
  	<button onclick="myFunction()" id="myBtn">Read more</button>
   </nav>
   </header>
   </div>
   
<div class="special">
<h2 id="todays">Todays special</h2>
<img src="img/25per.jpg" id="kabab">

</div>
  	
<div class="container_12">
    <div class="grid_12">
      <h1 >New in Menu</h1>
    </div>
    <div class="gallery">
    <div class="grid_3">
      <div class="box maxheight">
     
        <img src="img/box_img4.jpg" alt="">
        <div class="title">Vestibulum volu</div>
        Convallis orci vel mi oreet, at kotornare lorem consequat. Sellus era nisl auctor vel veliterolvenenatis nulla. 
        <br>
        <a href="#">More Info</a>
       
      </div>
    </div>
    <div class="grid_3">
      <div class="box maxheight">
      
        <img src="img/box_img2.jpg" alt="">
        <div class="title">Aliquamh ante</div>
        Benteger convallis orci veli elaoreet, at ornare loremo konsequat. Phasellus era nisl auctor vel veliterut. 
        <br>
        <a href="#">More Info</a>
      
      </div>
    </div>
    <div class="grid_3">
      <div class="box maxheight">
     
        <img src="img/box_img3.jpg" alt="">
        <div class="title">Ulum volutpat</div>
        Hrtolieger convallis omi tem aore, at ornare loren coate. Pasellus era nisl auctor vel veliterolsed pharetra. 
        <br>
        <a href="#">More Info</a>
       
      </div>
    </div>
    
      </div>
    </div>
  

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


</script>


    

    
<script src="rest.js"></script>

<footer>  
       <div class="copy" style="margin-bottom: 0;margin-left: 10px">
     &copy; 2018 | <a href="#">Privacy Policy</a><br> Website   designed by MMA
      </div>
  
 
</footer>


</body>
</html>