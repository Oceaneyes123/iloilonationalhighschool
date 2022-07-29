
<head>
	<title>Search</title>
</head><link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php  $a = $_GET['search']; ?>
<a href="precord.php?id=<?php echo $a;?>"><button class="btn btn-primary" type="button">Print</button></a>
<?php

require "sel.php";


$a = $_GET['search'];

if ($result = $db -> query("SELECT * FROM inqtb WHERE lrn = '$a' OR last_name = '$a' OR first_name = '$a' OR school_year='$a' OR sex='$a' OR track='$a' OR strand='$a' OR track1='$a' OR strand1='$a'")){
	if($result->num_rows){
		
		echo "<table class='table table-hover'>
		<tr>
		<th>School Name</th>
		<th>School ID</th>
		<th>District</th>
		<th>Division</th>
		<th>Region</th>
		<th>LRN</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Extension Name</th>
		<th>Middle Name</th>
		<th>Birthdate</th>
		<th>Age</th>
		<th>Religious Affiliation</th>
		<th>Complete Address</th>
		<th>Sex</th>
		<th>Father's Name</th>
		<th>Mother's Maiden Name</th>
		<th>Guardian's Name</th>
		<th>Contact</th>
		<th>Grade Level</th>
		<th>Section</th>
		<th>School Year</th>
		<th>Track1</th>
		<th>Strand1</th>
		<th>Track2</th>
		<th>Strand2</th>
		<th>Grade</th>
		<th></th>
		<th></th>

		
		</tr>";	

		while ($row = $result ->fetch_assoc()) {
		

//echo $result;


		echo "<tr>";
		echo "<td>". $row['school_name']."</th>";
		echo "<td>". $row['school_id']."</th>";
		echo "<td>". $row['district']."</th>";
		echo "<td>". $row['division']."</th>";
		echo "<td>". $row['region']."</th>";
		echo "<td>". $row['lrn']."</th>";
		echo "<td>". $row['last_name']."</th>";
		echo "<td>". $row['first_name']."</th>";
		echo "<td>". $row['extension_name']."</th>";
		echo "<td>". $row['middle_name']."</th>";
		echo "<td>". $row['birthdate']."</th>";
		echo "<td>". $row['age']."</th>";
		echo "<td>". $row['religion']."</th>";
		echo "<td>". $row['address']."</th>";
		echo "<td>". $row['sex']."</th>";
		echo "<td>". $row['father_name']."</th>";
		echo "<td>". $row['mother_maidenname']."</th>";
		echo "<td>". $row['guardian_name']."</th>";
		echo "<td>". $row['contact']."</th>";
		echo "<td>". $row['grade_level']."</th>";
		echo "<td>". $row['section']."</th>";
		echo "<td>". $row['school_year']."</th>";
		echo "<td>". $row['track']."</th>";
		echo "<td>". $row['strand']."</th>";
		echo "<td>". $row['track1']."</th>";
		echo "<td>". $row['strand1']."</th>";
		echo "<td>". $row['grade']."</th>";
		echo "<td>". "<a href='edit.php?edit=$row[id]'>Edit</a>"."</th>";
		echo "<td>". "<a href='pdf.php?pdf=$row[id]'>Print</a>"."</th>";
	
		echo "<tr>";

		//echo $row['name'],  ' ', $row['credsc'],' ',$row['time'],  '<br>'  ; 
		
		}

	echo "</table>";

	
	}
};

	 
?>



<a href="record.php" type="submit"><input type="submit" value="Back to Records"></a>

<?php

?>