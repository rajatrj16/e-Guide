<?php
$u='root';
$p= '';
$s = '127.0.0.81';
$db = 'eguide';
//connect to db
$dbconnect = mysqli_connect($s,$u,$p,$db);
if(!$dbconnect) die("Couln't connect to the database");
//echo"Connected to the database successfully<br>";
$cid=$_POST['orderid'];
$query= "delete from StudentLogin where studentID='$cid'";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
die("Unable to delete your requested student details");
else
{
	echo "<br><br><H1><center>Query executed successfully. Deleted the record if it existed! </H1>";
	echo "<h1>Redirecting you to Homepage in 3 seconds...</h1></center>";
	header('Location:report.php');
	//header('Refresh:3,URL=mainpage.html');
	
}
mysqli_close($dbconnect);
?>