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
	   function fm(){
	   document.getElementById('status').innerHTML="Zomato is an online restaurant search service providing information about restaurants" ;
	   
	   }
	   function ffm(){
	   document.getElementById('status').innerHTML="" ;
	   
	   }
	   function checkForm(form) 
{ 
if(form.uname.value == "") 
{ 
alert("Error: Username cannot be blank!"); 
form.uname.focus(); 
return false; 
} 
if(form.uname.value == "") 
{ 
alert("Error: Username cannot be blank!"); 
form.uname.focus(); 
return false; 
}
if(form.email.value == "") 
{ 
alert("Error: Email cannot be blank!"); 
form.email.focus(); 
return false; 
}
if(form.message.value == "") 
{ 
alert("Error: Message cannot be blank!"); 
form.message.focus(); 
return false; 
}

				   }
		
		 function myFunction(x) {
    x.style.background = "#A2FBD6";
}
 function yourFunction(x) {
    x.style.background = "#FFFFFF";
}

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

<div class="content"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Cafe Masala</h3>
    </div>  
    
    <div class="tabs tb gallery">
             <div class="div-nav  ">
             <div class="grid_12">
                 <ul class="nav">
                    <li class="selected"><a href="#tab-1" class="">Our Menu</a></li>
                    <li><a href="#tab-2">Our Address</a></li>
                    <li><a href="#tab-3">Timings</a></li>
                    <li><a href="#tab-4">Photo Gallery</a></li>
					<li><a href="#tab-6">Leave us a message!</a></li>
					<li><a href="#tab-5">rate Us on Zomato!</a></li>
                    
                 </ul>
             </div>    
             </div>
          
              <div  id="tab-1" class="tab-content gallery1">
                  <div class="grid_3">
                    <a href="images/m1.jpg" class="gal"><img src="images/cafemenu1.jpg" alt=""><span></span></a>
                   
                  </div>
                  <div class="grid_3">
                    <a href="images/m2.jpg" class="gal"><img src="images/cafemenu2.jpg" alt=""><span></span></a>
                    
                  </div>
                  <div class="grid_3">
                    <a href="images/m3.jpg" class="gal"><img src="images/cafemenu3.jpg" alt=""><span></span></a>
                    
                  </div>
                  
              </div>
              <div  id="tab-2" class="tab-content gallery2">
                 <div class="grid_3">
                    <a href="#" class="gal"><img src="" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#"></a></span></div>
                  </div>
				  
				   <div class="grid_4">
      <div class="hours">
        <div class="title">Address</div>
        <div>
        221B,<br>
        5th Main,<br>
        Lavelle Road,<br>
        Bangalore.<br>
        <br>
		<br>
        </div>
      </div>
      </div>
                  
              </div>
              <div  id="tab-3" class="tab-content gallery3">
                  <div class="grid_3">
                    <a href="#" class="gal"><img src="" alt=""><span></span></a>
                    <div class="col2"><span class="col3"><a href="#"></a></span></div>
                  </div>
				  
				   <div class="grid_4">
      <div class="hours">
        <div class="title">Our Hours</div>
        <div>
        Mon - 11:00 am to 10:00 pm<br>
        Tue - 11:00 am to 10:00 pm<br>
        Wed- 11:00 am to 10:00 pm<br>
        Thur- 11:00 am to 10:00 pm<br>
        Fri- 11:00 am to 10:00 pm<br>
        Sat- 11:00 am to 11:30 pm<br>
        Sun- 11:00 am to 11:30 pm<br>
        Make a reservation, call 4444444<br>
		<a href="mailto:ankithasri22@gmail.com?cc=deeptipandey111@gmail.com&bcc=ankithasri22@gmail.com&subject=Cafe%20Masala" target="_top">Send us an email!</a>
        </div>
      </div>
      </div>
    </div>
             <div  id="tab-5" class="tab-content gallery1">
                <div class="abc" id="abc">
					<a href="https://www.zomato.com"> <img src="images/zomato.png" width="200px" height="200px"  onmouseover="fm()" onmouseout="ffm()"> </a>
		
					<span id="status" ></span>
				</div>
                  
              </div>    
                 
           
              <div  id="tab-4" class="tab-content gallery5">
                  <div class="grid_3">
                    <a href="images/photo1.jpg" class="gal"><img src="images/photo1.jpg" alt=""><span></span></a>
                
                  </div>
                  <div class="grid_3">
                    <a href="images/photocafe2.jpg" class="gal"><img src="images/photocafe2.jpg" alt=""><span></span></a>
                    
                  </div>
                 
                  <div class="grid_3">
                    <a href="images/photocafe4.jpg" class="gal"><img src="images/photocafe4.jpg" alt=""><span></span></a>
                    
                  </div>
                  <div class="grid_3">
                    <a href="images/photocafe5.jpg" class="gal"><img src="images/photocafe5.jpg" alt=""><span></span></a>
                    
                  </div>
              </div>
              <div  id="tab-6" class="tab-content gallery6">
                  <div class="grid_3">
                   <p>Have something to say? Leave us a message! <p>
	<form ... onsubmit="return checkForm(this);" action="caferegisteration.php" method="post">
  <input type="text" name="uname" placeholder="Username" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="email" name="email" placeholder="Email ID" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>

  <input type="text" name="contact" id="contact" placeholder="contact" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  Your message:<br>
  <textarea name="message" id="message" placeholder="message" rows="5" cols="70" onfocus="myFunction(this)" onblur="yourFunction(this)"> </textarea><br><br>

  <input type="submit" value="Submit">
</form>
<span id ="status"> </span>

</div>
                   
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


