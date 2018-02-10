<?php
$u='root';
$p= '';
$s = '127.0.0.81';
$db = 'eguide';
//connect to db
$dbconnect = mysqli_connect($s,$u,$p,$db);
if(!$dbconnect) die("Couldn't connect to the database");
//echo"Connected to the database successfully";
$username = $_POST['usernameT'];
$password = $_POST['passwordT'];
$query= "select * from adlogin where username='$username' AND password='$password'";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
die("Unable to register you");
else
{
		$num=mysqli_num_rows($executed);
		if($num==1){
		echo "<BR><HR>You're an authenticated user";
		header('Location:genreport.html');
		//header('location:genreport.html');
		}
		else{
		echo "<h1><center>Invalid Credentials</center></h1>";
		header('Location:Admin.html');
		// header('Refresh: 2; URL = Admin.html');
		}
}
//close connection
mysqli_close($dbconnect);
?>
