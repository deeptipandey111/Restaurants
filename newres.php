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
		function checkForm(form) 
{ 
if(form.uname.value == "") 
{ 
alert("Error: Username cannot be blank!"); 
form.uname.focus(); 
return false; 
} 
if(form.fname.value == "") 
{ 
alert("Error: First Name cannot be blank!"); 
form.fname.focus(); 
return false; 
} 
if(form.lname.value == "") 
{ 
alert("Error: Last Name cannot be blank!"); 
form.lname.focus(); 
return false; 
} 
re = /^\w+$/; 
if(!re.test(form.uname.value)) 
{ 
alert("Error: Username must contain only letters, numbers and underscores!"); 
form.uname.focus();
 return false; 
 }
  if(form.password.value != "" && form.password.value == form.rpassword.value) 
  { 
  if(form.password.value.length < 6) 
  {
   alert("Error: Password must contain at least six characters!"); 
   form.password.focus(); return false;
    } 
    if(form.password.value == form.uname.value) 
    { 
    alert("Error: Password must be different from Username!"); 
    form.password.focus(); 
    return false; 
    } 
    re = /[0-9]/; 
    if(!re.test(form.password.value)) 
    { 
    alert("Error: password must contain at least one number (0-9)!");
     form.password.focus(); 
     return false;
      }
       re = /[a-z]/; 
       if(!re.test(form.password.value))
        { 
        alert("Error: password must contain at least one lowercase letter (a-z)!");
         form.password.focus(); 
         return false;
          }
           re = /[A-Z]/; 
           if(!re.test(form.password.value)) 
           { 
           alert("Error: password must contain at least one uppercase letter (A-Z)!"); 
           form.password.focus();
            return false; 
            }
             } 
             else 
             {
              alert("Error: Please check that you've entered and confirmed your password!"); 
              form.password.focus();
               return false;
                }
                 alert("You entered a valid password,  you will be redirected to login");
                  return true;
                   }
		
		 function myFunction(x) {
    x.style.background = "#A2FBD6";
}
 function yourFunction(x) {
    x.style.background = "#FFFFFF";
}
 function mypassFunction(x) {
    x.style.background = "#A2FBD6";
	document.getElementById('status').innerHTML="Password must have atleast 6 characters, with a capital letter and a number" ;
}
 function yourpassFunction(x) {
    x.style.background = "#FFFFFF";
	document.getElementById('status').innerHTML="" ;
}
 function myrpassFunction(x) {
    x.style.background = "#A2FBD6";
	document.getElementById('status').innerHTML="Re-Enter the previously entered password" ;
}
     </script>
     
    
     </head>
     <body  class="">

<!--==============================header=================================-->
 
<div style="width:800px; margin:0 auto;">
 <h3> Sign Up </h3>
	<form ... onsubmit="return checkForm(this);" action="registeration.php" method="post">
  <input type="text" name="fname" placeholder="First name" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="text" name="lname" placeholder="Last name" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="text" name="uname" placeholder="Username" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="email" name="email" placeholder="Email ID" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="password" name="password" id="paassword" placeholder="Password" onfocus="mypassFunction(this)" onblur="yourpassFunction(this)"><br><br>
  <input type="password" name="rpassword" id ="rpassword" placeholder="Re Enter Password" onfocus="myrpassFunction(this)" onblur="yourpassFunction(this)"><br><br>
  <input type="submit" value="Submit">
</form>
<span id ="status"> </span>

</div>
<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.html" class="f_logo"><img src="images/f_logo.png" alt=""></a>
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
</body>
</html>

