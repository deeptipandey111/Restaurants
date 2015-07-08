<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Review</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script>
        $(document).ready(function(){

          $().UItoTop({ easingType: 'easeOutQuart' });
        }) 
     </script>
     </head>
     <body  class="">
<?php
session_start();
?>

<!--==============================header=================================-->
 <header> 
  <div class="container_12">
   <div class="grid_12"> 
    
  
    <div class="menu_block"><nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
        <ul>
          <li class="current bt-icon "><a href="index.php">Home</a></li>
         <li class="bt-icon"><a href="index-1.php">About</a></li>
         <li class="bt-icon"><a href="#">	</a></li>
         <li class="bt-icon"><a href="#">	</a></li>
         <li class="bt-icon"><a href="indexcareers.php">   Careers</a></li>
         <?php
		
		 if  (isset($_SESSION["valid"]) and ($_SESSION['valid']==1)){
		 ECHO '<li class="bt-icon"><a href="logout.php">Logout</a></li>';}
		 else {
		 ECHO '<li class="bt-icon"><a href="dummylogin.php">      Login to access all features</a></li>';
		 }
		 ?>
        </ul>
      </nav>
    
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
</header>

<!--==============================Content=================================-->

<div class="content"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_8">  
      <h3 class="">Review</h3>
      <div class="post">
        <img src="images/page4_img1.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="title col3"><a href="#">my first time here</a></div>
          <p class="col1">
            <time datetime="2013-01-01">22.10.2013</time><span></span>posted by 
            <a href="#">admin</a><span></span><a href="#">comments:5</a>
          </p>
          <br>
          <a href="#" class="link1">More Info</a>
        </div>
      </div>
      <div class="post">
        <img src="images/page4_img2.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="title col3"><a href="#">delicious </a></div>
          <p class="col1">
            <time datetime="2015-03-31">2015-03-31</time><span></span>posted by 
            <a href="#">admin</a><span></span><a href="#">comments:3</a>
          </p>
          <br>
          <a href="#" class="link1">More Info</a>
        </div>
      </div>
      <div class="post">
        <img src="images/page4_img3.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="title col3"><a href="#"></a></div>
          <p class="col1">
            <time datetime="2015-03-31">2015-03-31</time><span></span>posted by 
            <a href="#">admin</a><span></span><a href="#">comments:2</a>
          </p>
          <br>
          <a href="#" class="link1">More Info</a>
        </div>
      </div>
    </div>  
    <div class="grid_3 prefix_1">
      
    <h3 class="head3">Archives</h3>
    <ul class="list">
      <li><a href="#">March - 2015</a></li>
      <li><a href="#">February - 2015</a></li>
      <li><a href="#">January - 2015</a></li>
	<br>
	<br>
	<br>
	<br>
	<p>
<form action="writereview.php">
<br>
Username:<br>
<input type="text" name="username" value="">
<br>
Password:<br>
<input type="password" name="pwd" value=""><br>
Date:<br>
<input type="date" name="dat">
<br><br>

Write a review:<br>
<textarea  rows="4" cols="50" name="review">

</textarea>
<br>
<br>
Rate us
<br>
<div id="14277813829351" class="wE"><script src="http://widget-engine.com/w:0:003:14277813829351:4:000:40" type="text/javascript"></script></a></div>
<br>
<input type="submit" value="Submit">
</form>
</p>
     </ul>
    </div>
  </div>
</div>

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""></a>
      <div class="copy">
       <br> Website   designed by Ankitha and Deepti</a>
      </div>
    </div>
  </div>
</footer>
       <script>
      $(document).ready(function(){ 
         $(".bt-menu-trigger").toggle( 
          function(){
            $('.bt-menu').addClass('bt-menu-open'); 
          }, 
          function(){
            $('.bt-menu').removeClass('bt-menu-open'); 
          } 
        ); 
      }) 
    </script>
</body>

</html>
