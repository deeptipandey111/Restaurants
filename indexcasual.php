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
    width: 100px;
    height: 90px;
    background: blue;
    -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    transition: width 2s;
}

.abc:hover {
    width: 700px;
}
.text{
    background: black;
    text-align: center;
    color: white;
    opacity: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: opacity 0.6s;
    -moz-transition: opacity 0.6s;
    transition: opacity 0.6s;
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

<a href="migoreng.php" class="block1">
  <img src="images/chinese.jpeg" alt="" height="400px" width="800px">
  <span class="price"><span>Mi Goreng </span><span><small></small> </span><strong></strong></span>
</a>
<div class="abc">
<div class="text"><a href="map.php">Click to view Mi Goreng on Map</a></div>
</div>
<a href="caperberry.php" class="block1">
  <img src="images/caperberry.jpg" alt="" height="400px" width="800px">
  <span class="price"><span>Caperberry</span><span><small></small> </span><strong></strong></span>
</a>
<div class="abc">
<div class="text"><a href="maps.php">Click to view Caperberry on Map</a></div>
</div>
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

