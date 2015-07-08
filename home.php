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
    width: 150px;
    height: 150px;
    background: red;
    -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    transition: width 2s;
}

.abc:hover {
    width: 900px;
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
          })
        }) 
	
     </script>
    
     </head>
     <body class="page1">

<!--==============================header=================================-->


<!--==============================Content=================================-->
<a href="#" class="block1">
  <img src="images/blur_img4.jpg" alt="" height="600" width="1400">
  <span class="price"><span>Welcome to our Website! <br> Login or SignUp!<br></span><span><small></small> </span><strong></strong></span>
</a>
<br><br><br><br>
<a href="dummylogin.php" class="block1">
  <img src="images/blur_img3.jpg" alt="">
  <span class="price"><span>Login</span><span><small></small> </span><strong></strong></span>
</a>
<a href="newres.php" class="block1">
  <img src="images/blur_img2.jpg" alt="">
  <span class="price"><span>Sign Up</span><span><small></small> </span><strong></strong></span>
</a>

  <div class="container_12">
    <div class="grid_12">
      <h3>
	  </h3>
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
