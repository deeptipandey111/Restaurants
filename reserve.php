
<html>
<body>
<?php
   $con= new mysqli('localhost','root','','restaurant') or die("Could not connect!");

$regid = mysqli_real_escape_string($con, $_POST['rid']);
$res_id = mysqli_real_escape_string($con, $_POST['resid']);
$no_ppl=mysqli_real_escape_string($con, $_POST['nppl']);
$t_slot=mysqli_real_escape_string($con, $_POST['tslot']);

$sql="INSERT INTO users VALUES('$regid','$res_id','$nppl',$t_slot)";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Successfully Registered";
    
?>

<br>
<br>
<a href="index.html">goto home</a>
</html>