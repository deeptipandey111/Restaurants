<!DOCTYPE html>
<html>
     <head>
     <meta charset="utf-8">
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
if(form.password.value == "") 
{ 
alert("Error: Password cannot be blank!"); 
form.fname.focus(); 
return false; 
} 

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

 
<div style="width:800px; margin:0 auto;">
 <h3> Login </h3>
	<form ... onsubmit="return checkForm(this);" action="loginbackend.php" method="post">
  <input type="text" name="uname" placeholder="Username" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="password" name="password" id="paassword" placeholder="Password" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="submit" value="Submit">
</form>
<span id ="status"> </span>

</div>

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

