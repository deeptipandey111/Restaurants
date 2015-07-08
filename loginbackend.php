
<html>
<body>
<?php
session_start();	//LOGIN DETAILS FOR WEB DOMAIN



$uname = $_POST['uname'];
$password = $_POST['password'];
if ($uname&&$password)
{
	$connect = mysql_connect("localhost","root","","restman") or die("Couldn't connect!");
	mysql_select_db("restman") or die("DataBase not found!");
	
	$query = mysql_query("SELECT * FROM users WHERE uname = '$uname'");
	$numrows = mysql_num_rows($query);

	if ($numrows != 0)
	{
		while($rows = mysql_fetch_assoc($query))
		{
			$dbusername = $rows['uname'];
			$dbpassword = $rows['password'];
			$dbfname = $rows['fname']; 
		}
		
		if ($uname==$dbusername && $password==$dbpassword)
		{
			// What to do if username and password matches
			//ECHO 'Logged in successfully.<br/><a href="front.php">Click here</a>';
			$_SESSION['uname'] = $dbusername;
			$_SESSION['fname'] = $dbfname;
			$_SESSION["valid"]=1;
			//ECHO '<script>setCookie("'.$dbusername.'");</script>';
			
			echo "successful login\n";
			echo $_SESSION['fname'];
			header("location: index.php");
		}
		else
			header("location: dummylogin2.php");
	}
	else
		header("location: dummylogin2.php");
}
else
	die("Please re-enter form with valid data.");	
?>
</body>
</html>