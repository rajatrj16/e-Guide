<?php
$u='root';
$p= '';
$s = '127.0.0.81';
$db = 'eguide';
//connect to db
$dbconnect = mysqli_connect($s,$u,$p,$db);
if(!$dbconnect) die("Couldn't connect to the database");
//echo"Connected to the database successfully";
$sid=$_POST['cidT'];
$sname=$_POST['cnameT'];
$semail=$_POST['cemailT'];
$sdob=$_POST['cdobT'];
$sgn=$_POST['cgnT'];
$saddr=$_POST['caddrT'];
$spno=$_POST['cnoT'];
$spswd=$_POST['pswdT'];
$query= "insert into studentlogin values('$sid','$sname','$semail','$sdob','$sgn','$saddr',$spno,'$spswd')";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
die("Unable to register you");
else
{
	echo "<center><h1>You're registered now! </h1><br>";
	echo "<h1>Redirecting you to login page in 3 seconds...</h1></center>";
	header('Location:Student.html');
}
//close connection
mysqli_close($dbconnect);
?>