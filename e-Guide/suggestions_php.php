<?php
$u='root';
$p= '';
$s = '127.0.0.81';
$db = 'eguide';
//connect to db
$dbconnect = mysqli_connect($s,$u,$p,$db);
if(!$dbconnect) die("Couldn't connect to the database");
//echo"Connected to the database successfully";

$sname=$_POST['nameT'];
$semail=$_POST['emailT'];
$ch=$_POST['choice'];

$com=$_POST['commentT'];
if(isset($_POST['part'])){
    $select1 = $_POST['part'];
    switch ($select1) {
        case '1':
            $selch='C++';
            break;
        case '2':
              $selch='Java';
            break;
		case '3':
            $selch='R';
            break;
        case '4':
              $selch='JavaScript';
            break;
		default:
            # code...
            break;
    }
}
$query= "insert into suggestions values('$sname','$semail','$selch','$ch','$com')";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
die("Unable to register you");
else
{
	echo "<center><h1>Details saved successfully!! </h1><br>";
	echo "<h1>Redirecting you to Homepage in 3 seconds...</h1></center>";
	header('Location:mainpage.html');
	//header('Refresh:3,URL=mainpage.html');
}
//close connection
mysqli_close($dbconnect);
?>