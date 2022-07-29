<?php





if(isset($_GET['id'])){

$id = $_GET['id'];

}


$con = mysqli_connect('localhost','root','');


if (!$con) {
	echo 'not connected';
}

if (!mysqli_select_db($con,'inqdb')) {
	echo 'not connected to the database';
}

date_default_timezone_set('Asia/Manila');
$a = $_POST['schoolname'];
$b = $_POST['schoolid'];
$c = $_POST['district'];
$d = $_POST['division'];
$e = $_POST['region'];
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
$y = $_POST['sex'];
$z = $_POST['track1'];
$aa = $_POST['strand1'];



$sql = "INSERT INTO inqtb (school_name, school_id, district, division, region, grade_level, section, school_year, track, strand, grade, lrn, last_name, first_name, extension_name, middle_name, birthdate, age, religion, address, father_name, mother_maidenname, guardian_name, contact, sex, track1, strand1) VALUES ('$a','$b','$c', '$d', '$e','$f','$g', '$h', '$i','$j','$k', '$l','$m','$n','$o', '$p', '$q','$r','$s', '$t', '$u','$v','$w', '$x','$y','$z','$aa') " ;

if (!mysqli_query($con,$sql)) {
	echo 'notttt';
}
	else{

		
		
	}

header("refresh:1 ; url=findex.php?id=$id" );


?>


