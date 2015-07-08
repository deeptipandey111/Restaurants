<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Menu</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.tabs.min.js"></script>
     <script src="js/touchTouch.jquery.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script>
        $(document).ready(function(){

          $().UItoTop({ easingType: 'easeOutQuart' });
         $('.gallery a.gal').touchTouch();
         
       }) 
     </script>
     <!--[if lt IE 8]>
    
    
     </head>
     <body  class="">
<?php
session_start();
?>

<!--==============================header=================================-->
 <header> 
  <div class="container_12">
   <div class="grid_12"> 
    
    
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
    
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
</header>

<!--==============================Content=================================-->

<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 02, 2013!</div>
  <div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Our Menu</h3>
    </div>  
    
    <div class="tabs tb gallery">
             <div class="div-nav  ">
             <div class="grid_12">
                 <ul class="nav">
                    <li class="selected"><a href="#tab-1" class="">Salads</a></li>
                    <li><a href="#tab-2">Soups</a></li>
                    <li><a href="#tab-3">Appetizers</a></li>
                    <li><a href="#tab-4">Beverages</a></li>
                    <li><a href="#tab-5">Desserts</a></li>
                    <li><a href="#tab-6">Lunch Specials</a></li>
                 </ul>
             </div>    
             </div>
             <div class="div-tabs">
              <div  id="tab-1" class="tab-content gallery1">
                  <div class="grid_3">
                    <a href="images/chickensalad.jpg" class="gal"><img src="images/chickensalad.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Chicken salad</a></span>Rs 730 </div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big2.jpg" class="gal"><img src="images/persiansalad.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Persian salad </a></span> Rs 710</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big3.jpg" class="gal"><img src="images/olivgar.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Olive Garden salad </a></span> Rs 810</div>
                  </div>
                  
              </div>
              <div  id="tab-2" class="tab-content gallery2">
                 
                  <div class="clear"></div>
                  <div class="grid_3">
                    <a href="images/big5.jpg" class="gal"><img src="images/chicsoup.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Chicken soup</a></span> Rs 870</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big6.jpg" class="gal"><img src="images/cornsoup.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Corn soup </a></span> Rs 890</div>
                  </div>
              </div>
              <div  id="tab-3" class="tab-content gallery3">
                  <div class="grid_3">
                    <a href="images/big1.jpg" class="gal"><img src="images/shsoup.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Schezwan soup</a></span>Rs 780</div>
                  </div>
                  
                  <div class="grid_3">
                    <a href="images/big4.jpg" class="gal"><img src="images/page3_img4.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Dert facilis</a></span> $ 25.30</div>
                  </div>
                 
              </div>
              <div  id="tab-4" class="tab-content gallery4">

                  <div class="grid_3">
                    <a href="images/big2.jpg" class="gal"><img src="images/page3_img2.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Phasellus erat </a></span> $ 21.99</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big3.jpg" class="gal"><img src="images/page3_img3.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Kneras facilisis </a></span> $ 23.90</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big4.jpg" class="gal"><img src="images/page3_img4.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Dert facilis</a></span> $ 25.30</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big5.jpg" class="gal"><img src="images/page3_img5.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Destro fetolis </a></span> $ 10.99</div>
                  </div>

              </div>
              <div  id="tab-5" class="tab-content gallery5">
                  <div class="grid_3">
                    <a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Cras facilisis</a></span> $ 19.99</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big2.jpg" class="gal"><img src="images/page3_img2.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Phasellus erat </a></span> $ 21.99</div>
                  </div>
                 
                  <div class="grid_3">
                    <a href="images/big5.jpg" class="gal"><img src="images/page3_img5.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Destro fetolis </a></span> $ 10.99</div>
                  </div>
                  <div class="grid_3">
                    <a href="images/big6.jpg" class="gal"><img src="images/page3_img6.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Holi erat </a></span> $ 20.99</div>
                  </div>
              </div>
              <div  id="tab-6" class="tab-content gallery6">
                  <div class="grid_3">
                    <a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#">Cras facilisis</a></span> $ 19.99</div>
                  </div>
                  
              </div>

             </div>
        </div>
  </div>
</div>

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""><span></span></a>
      <div class="copy">
      <br> Website   designed by Deepti and Ankitha</a>
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
<div id="14277813829351" class="wE"><script src="http://widget-engine.com/w:0:003:14277813829351:4:000:40" type="text/javascript"></script</div>

</body>

</html>
