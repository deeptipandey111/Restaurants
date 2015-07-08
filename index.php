<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
	  <style> 
.abc {
    width: 50px;
    height: 50px;
    background: red;
    -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    transition: width 2s;
}

.abc:hover {
    width: 100px;
}
.text{
    background: black;
    text-align: center;
    color: white;
    opacity: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: opacity 0.3s;
    -moz-transition: opacity 0.3s;
    transition: opacity 0.3s;
}

.text:hover{
    opacity: 0.8;
}

</style>
     <script>
        $(document).ready(function(){
          $( ".block1" ).mouseover(function() {
            $(this).addClass( "blur" );
          });
          $( ".block1" ).mouseout(function() {
            $(this).removeClass( "blur" );
          });
          $().UItoTop({ easingType: 'easeOutQuart' });
        }) 
     </script>
    
     </head>
     <body class="page1">
<?php
session_start();
?>

<!--==============================header=================================-->
 <header> 
  <div class="container_12">
   <div class="grid_12"> 
    
   <!-- <h1><a href="index.php"><img src="images/logo.png"</a> </h1>-->
    <div class="menu_block">


    <nav id="bt-menu" class="bt-menu">
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
	  <br>
	  <br>
  
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
	  <!--<div class="abc">
<div class="text"><a href="#">Login</a></div>
</div>
<br>
<div class="abc">
<div class="text"><a href="newres.php">Sign Up</a></div>
</div>-->
</header>

<!--==============================Content=================================-->

<a href="indexcasual2.php" class="block1">
  <img src="images/blur_img1.jpg" alt="">
  <span class="price"><span>Casual</span><span><small></small> </span><strong></strong></span>
</a>
<a href="indexfinedining.php" class="block1">
  <img src="images/blur_img2.jpg" alt="">
  <span class="price"><span>Fine Dining</span><span><small></small> </span><strong></strong></span>
</a>
  <div class="container_12">
    <div class="grid_12">
      <h3>Please visit :)</h3>
    </div>
    <div class="grid_3">
     
   
    </div>
    <div class="grid_3">
     
    </div>
  </div>
</div>

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""></a>
      <div class="copy">
       Ankitha and Deepti designed this.</a>
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
