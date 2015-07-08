<html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","restman");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (!preg_match("/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/",$_POST['contact'])) {  die("\n wrong phone format go back and try again\n");    }
$dbname = $_POST['uname'];
	if  (isset($_SESSION["valid"]) and ($_SESSION['valid']==1)){
if($_SESSION['uname'] != $dbname){
	ECHO "Entered uname is not the logged in name " . $_SESSION['uname'] ;
}


else{
$sql="INSERT INTO cafecontact (uname,email,contact,message)
VALUES ('$_POST[uname]', '$_POST[email]','$_POST[contact]','$_POST[message]')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
header("location: anhome.php");

mysqli_close($con);
}
}
?>
<body>

<br><br>
</body>
</html>






