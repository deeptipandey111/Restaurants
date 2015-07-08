<html><body>
<?php $con= new mysqli('localhost','root','','restaurant') or die("Could not connect!");
$username = mysqli_real_escape_string($con, $_POST['username']);
$password=mysqli_real_escape_string($con, $_POST['pwd']);
$date=mysqli_real_escape_string($con, $_POST['dat']);
$review=mysqli_real_escape_string($con, $_POST['review']);
$sql="INSERT INTO usrreview VALUES('$username','$password','$date','$review')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Successfully Registered";
    
?>

<br>
<br>
<a href="index.html">Goto homw</a>
</html>
