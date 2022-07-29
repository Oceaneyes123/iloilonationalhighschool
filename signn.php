<?php

$error = array();

$db = mysqli_connect('localhost','root','','inqdb');



if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


	if($password!=$cpassword){
			array_push($error, "Password do not match");
	}

	if (count($error)==0){
		$sql = "INSERT INTO users (username, password) VALUES ('$username','$password') " ;
		mysqli_query($db, $sql);	
	}
}


?>