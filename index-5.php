<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/form.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/TMForm.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="https://www.google.co.in/maps/place/Girinagar,+Banashankari,+Bengaluru,+Karnataka+560085/@12.9387967,77.5440143,17z/data=!3m1!4b1!4m2!3m1!1s0x3bae3e3c316278a3:0xfeea6ad2ad1a3920;sensor=false"></script>
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

<div class="content contact">
  <div class="container_12">
      
      <div class="grid_4">
        <h3 class="head3">Address</h3>
               <address>
                              <dl>
                                  <dt>DA group <br>
                                      Girinagar,<br>
                                      Bangalore, 560085.
                                  </dt>
                                  <dd><span>Toll free phone:</span>+1 800 559 6580</dd>
                                  <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                  <dd>E-mail: <a href="#" class="col2">ankithasri22@gmail.com</a></dd></dl>
                           </address>
      </div>
      <div class="grid_8">
        <h3 class="head3">Contact Form</h3>
              <form id="form">
                              
                        <div class="success_wrapper">
                        <div class="success-message">Contact form submitted</div>
                        </div>
                        <label class="name">
                        <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                        </label>
                      
                        <label class="email">
                        <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                        </label>
                         <label class="phone">
                            <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid phone.</span>
                            </label>
                        <label class="message">
                        <textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                        </label>
                        <div>
                        <div class="clear"></div>
                        <div class="btns">
                        <a href="#" data-type="reset" class="btn">Clear</a>
                        <a href="#" data-type="submit" class="btn">Send</a></div>
                        </div>
                        </form>   
      </div>
  </div>
</div>

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""></a>
      <div class="copy">
      &copy; 2015 | <a href="#">Privacy Policy</a> <br> Website   designed by Ankitha and Deepti
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
     <script src="js/map.js"></script>
</body>

</html>
