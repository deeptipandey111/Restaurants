<html>
<?php
$con=mysqli_connect("localhost","root","","restman");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO contacts (name,email,phone,message)
VALUES ('$_POST[name]', '$_POST[email]','$_POST[phone]','$_POST[message]')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "record added";

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






