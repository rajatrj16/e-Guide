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
$query= "select * from StudentLogin where studentID='$username' AND studentPassword='$password'";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
die("Unable to register you");
else
{
		$num=mysqli_num_rows($executed);
		if($num==1){
		echo "<BR><HR>You're an authenticated user";
		header('location:AfterStuLogin.html');
		}
		else{
		echo "<h1><center>Invalid Credentials</center></h1>";
		header('Location:Student.html');
		// header('Refresh: 2; URL = Student.html');
		}
}
//close connection
mysqli_close($dbconnect);
?>
