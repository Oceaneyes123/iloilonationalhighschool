<?php

if(isset($_POST['lrn'])){

	$id = $_POST['lrn'];
}

$con = mysqli_connect('localhost','root','');


if (!$con) {
	echo 'not connected';
}

if (!mysqli_select_db($con,'inqdb')) {
	echo 'not connected to the database';
}

date_default_timezone_set('Asia/Manila');
// $a = $_POST['schoolname'];
// $b = $_POST['schoolid'];
// $c = $_POST['district'];
// $d = $_POST['division'];
// $e = $_POST['region'];
$f = "Grade 10";
$g = $_POST['section'];
$h = $_POST['schoolyear'];
$i = $_POST['track'];
$j = $_POST['strand'];
$k = $_POST['grade'];
$l = $_POST['lrn'];
$m = $_POST['lastname'];
$n = $_POST['firstname'];
$o = $_POST['extensionname'];
$p = $_POST['middlename'];
$q = $_POST['birthdate'];
$r = $_POST['age'];
$s = $_POST['religion'];
$t = $_POST['address'];
$u = $_POST['fathername'];
$v = $_POST['mothername'];
$w = $_POST['guardianname'];
$x = $_POST['contact'];
$y = $_POST['id'];
$z = $_POST['sex'];
$aa = $_POST['track1'];
$ab = $_POST['strand1'];



$sql = "UPDATE inqtb SET  grade_level='$f', section='$g', school_year='$h', track='$i', strand='$j', grade='$k', lrn='$l', last_name='$m', first_name='$n', extension_name='$o', middle_name='$p', birthdate='$q', age='$r', religion='$s', address='$t', father_name='$u', mother_maidenname='$v', guardian_name='$w', contact ='$x', sex ='$z', track1 ='$aa', strand1 ='$ab' WHERE lrn='$id' ";

if (!mysqli_query($con,$sql)) {
	echo 'notttt';
}
	else{
		echo "Updated!!";
	}

header ("refresh: 1; url=student.php?id=$id");
?>


