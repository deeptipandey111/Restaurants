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
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function checkCookie() {

	
    var count = localStorage.getItem("count");
    //get a numeric value from str_count, put it in count
    
	if (count == null || count == "null"){
      count = 0;
    } else {
      count = parseInt(count);
    } 
    
    count++;
    
   // alert("You have been here " + count + " times");
    
    //store count
    localStorage.setItem("count", count);



    var uname=getCookie("uname");
var password=getCookie("password");
    if (uname != "") {
	alert("Unsuccessful login. try again.\nHi, this page was previously visited by  "+uname+"\nThis page has been visited "+count+" times by various users!");

    } 
	else
		alert("no cookie");
}
function final(){
	
  
     var uname =document.getElementById("uname").value;
	var password =document.getElementById("password").value;
	
       if (uname != "" && uname != null) {
           setCookie("uname", uname, 30);
		setCookie("password", password, 30);
       }
    }

     </script>
     
    
     </head>
     <body  class="" onload="checkCookie()">

<!--==============================header=================================-->
 
<div style="width:800px; margin:0 auto;">
 <h3> Login </h3>
	<form ... onsubmit="return checkForm(this);" action="loginbackend.php" method="post">
  <input type="text" name="uname" id="uname" placeholder="Username" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="password" name="password" id="password" placeholder="Password" onfocus="myFunction(this)" onblur="yourFunction(this)"><br><br>
  <input type="submit" value="Submit" onclick="final()">
</form>
<span id ="status"> </span>

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
</body>
</html>


