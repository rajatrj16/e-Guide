<?php
$u='root';
$p= '';
$s = '127.0.0.81';
$db = 'eguide';
//connect to db
$dbconnect = mysqli_connect($s,$u,$p,$db);
if(!$dbconnect) die("Couln't connect to the database");
//echo"Connected to the database successfully<br>";
$query= "select * from StudentLogin";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
die("Unable to register you");
else
{
$all_property = array();  //declare an array for saving property

//showing property
echo '<center><table class="data-table" border="2">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($executed)) {
    echo '<th>' . $property->name . '</th>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($executed)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
}
//close connection
mysqli_close($dbconnect);
?>
<html>
<body>

<form name="delform" method="post" action="del_form.php">
<bR><bR><bR>
Enter the Student ID :
<input type="text" name="orderid">
<input type="submit" value="Delete record"></center>
</form>
<br><br><center>
<a href="mainpage.html" class="button"><img src="home-512.png" style="width:20; height:20; margin-top:6px;"></a></center>
</body>
</html>