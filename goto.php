<?php

// $con = mysqli_connect('localhost','root','');


// if (!$con) {
// 	echo 'not connected';
// }

// if (!mysqli_select_db($con,'inqdb')) {
// 	echo 'not connected to the database';
// }

require "sel.php";

$username = $_POST['username'];  
$password = $_POST['password'];
// $type = $_POST['type'];

$result = $db -> query("select * from users where username = '$username' and password = '$password'");

while( $row=$result -> fetch_assoc()){
  if($row['username']==$username && $row['password']==$password && $row['type']=='Admin')
  {
    header("Location: aindex.php");
  }
 elseif($row['username']==$username && $row['password']==$password && $row['type']=='Guest')
  {
    header("Location: gindex.php");
  }
  elseif($row['username']!=$username && $row['password']!=$password && $row['type']!='Guest')
  {
    header("Location: gindex.php");
  }
}



?>