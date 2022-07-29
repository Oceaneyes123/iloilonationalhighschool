<?php

include 'sel.php';

if(isset($_GET['id'])){
$id = $_GET['id'];

  

	$sql = "SELECT * FROM inqtb WHERE lrn=".$_GET['id'];
	$result = mysqli_query($db, $sql);
	$check = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

	if($check == 1){
		header("Location: findex.php?id=$id"); //with view of records
	}

	elseif($check < 1){
		header("Location: gindex.php?id=$id"); //with registration form
	}





}

?>