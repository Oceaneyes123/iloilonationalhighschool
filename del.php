<?php

$con = mysqli_connect('localhost','root','');


if (!$con) {
	echo 'not connected';
}

if (!mysqli_select_db($con,'inqdb')) {
	echo 'not connected to the database';
}

date_default_timezone_set('Asia/Manila');
$Timeo = date ('h:i:s a');
$Namel = $_POST['delete'];


$sql = "DELETE FROM inqtb WHERE lrn = '$Namel'";

//$sql = "UPDATE person set (timeo=$Timeo) WHERE id=12332";
//$sql = "INSERT INTO person (timeo) VALUES ('$Timeo') SELECT * FROM person WHERE name =  '$Namel'  " ;


if (!mysqli_query($con,$sql)) {
	echo 'notttt';
}
	else{
		echo "<p> Processing, Just Wait a Momemt !!! </p>";
	}

header ("Location: record.php");
?>