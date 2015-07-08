<html>
<?php
$con=mysqli_connect("localhost","root","","restman");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="INSERT INTO users (fname, lname,uname,email,password)
VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[uname]', '$_POST[email]','$_POST[password]')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "record added";
header("location: dummylogin.php");
mysqli_close($con);
?>
<body>
<style>
div
{
border:2px solid #a1a1a1;
padding:10px 10px; 
background:#dddddd;
width:300px;
border-radius:25px;
}
</style>

<br><br>
</body>
</html>





