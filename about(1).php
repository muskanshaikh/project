<html>
    <h1></h1>
    <head>
        
        <link rel="stylesheet"  href="about(1).css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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

@media screen and (min-width: 400px) {
    
}

@media screen and (min-width: 800px) {
    .contact{
      

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
        <body>
        
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


if(isset($_POST['sub_btn'])){

  $name=$_POST['name'];

   $db=mysqli_connect("localhost","root","root","rest");
  $sql="SELECT name FROM sign WHERE name='$name' ";

  $result=mysqli_query($db,$sql);
  $count=mysqli_num_rows($result);
  if($_SESSION['user']==true){
  if($count==1){
   $name=$_POST['name'];
$email=$_POST['user-email'];
$subject=$_POST['subject'];
$feedback=$_POST['feedback'];
if(!empty($name)&& !empty($email)&& !empty($subject)&& !empty($feedback)){
 $db=mysqli_connect("localhost","root","root","rest");
   $sql="INSERT INTO feedback(name,email,subject,feedback) VALUES('$name','$email','$subject','$feedback')";

      $result=mysqli_query($db,$sql);
       if ( false===$result ) {
  printf("error: %s\n", mysqli_error($db));
}
 
  }
  else{
  
  header('location:rest2.php');
  }
}
}
else{
  header('location:login-form.php');
}
}
?>        <div class="slideshow">
    <hr>
    <img src ="img/citizen6.jpg"  id="slideimage">
    </div>

  
    <div class="grid_12">
      <h3 class="head1">The Best of Professionals</h3>
    </div>
    <div class="gallery">
    <div class="grid_3">
      <div class="box maxheight">
      <figure>
        <img src="img/page2_img1.jpg" alt="">
        <div class="title"><a href="#">Emma Smith</a></div>
Deneger convallis orci vel mi delaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel velitero. 
</figure>
      </div>
    </div>
    <div class="grid_1">
      <div class="box maxheight">
      <figure>
        <img src="img/page2_img2.jpg" alt="">
        <div class="title"><a href="#">Thomas Nelson</a></div>
Reenteger convallis orci veli saelaoreet, at ornare lorem konsequat. Khasellus era  jauctor vel veliteru.
</figure>
      </div>
    </div>
    <div class="grid">
      <div class="box maxheight">
      <figure>
        <img src="img/page2_img3.jpg" alt="">
        
        <div class="title"><a href="#">Linda Grey</a></div>
Ortolieger convallis omi tem more, at ornare loren coatr. Lasellus era nisl auctor vel veliterolsed pharetr. 
</div>
</figure>
      </div>
    </div>
  
      </div>

        <main>
                <div class="contact">
                        <h3> Location & Hours</h3>
                    <p> Terry Francois Street
                        <br/>
                         San Francisco, CA 94158
                         <br/>
                         Open Monday to Friday 12pm to 10pm
                         <br/>
                         Saturday to Sunday 12pm to 11pm</p>
                        </div>
                <div class="social-media">
                        <h3>Get Connected</h3>
                        <a href="https://facebook.com"><i class="fab fa-facebook fa-2x"></i> Facebook</a>
                        <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i> Instagram</a>
                        <a href="https://youtube.com"><i class="fab fa-youtube fa-2x"></i>Youtube</a>
                        
                    </div>
                
                <div class="contact-form" >
                    <div >
                   <h3 class="feedback">Feedback<h3/>
                   <br/>
                    <form action="about(1).php" method="post">
                            <label>
                            <div class="form">
                                    <div  class="mu">
                                        Name
                                    </div>
                                    <input id= 'name' type="sname" name="name" value="" placeholder="write your name">
                                </label>
                        <label>
                            <div class="mu">
                                Email
                            </div>
                            <input id= 'user-email' type="email" name="user-email" value="" placeholder="username@example.com">
                        </label>
                        <label>
                            <div class="mu">
                                Subject
                            </div>
                            <input id='subject' type="text" name="subject" value="" placeholder="A short description about the matter">
                        </label>
                        <label>
                            <div class="mu">
                                Feedback
                            </div>
                            <textarea id='feedback' name="feedback"></textarea>

                        </label>
                        <div>
                            <input id='submit-btn'type="submit" name="sub_btn" value="Submit">		
                        </div>
                        </div>
                    </form>	
                    </div>
                </div>
           

           
            </main>



            <script src="rest.js"></script>
            <footer>    
       <div class="copy">
      &copy; 2018 | <a href="#">Privacy Policy</a> <br> Website   designed by MMA
      </div>
  
 
</footer>

            </body>
            </html>


