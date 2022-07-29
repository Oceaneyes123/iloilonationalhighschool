<head>
	<title>Record</title>
</head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="img/shs.png">
<?php

require "sel.php"; ?>

<style type="text/css">
	form{
		display: inline-block;
		width: 500px;
	}
	.form-control{
		display: inline-block;
		width:300px;
	}
	.forms{
		width: 200px;
	}
</style>

<div class="button-container">
<form method="get" action="search.php">
		<div class="form-group col-lg-12	" >		
      		<input type="text" class="form-control" name="search">
      		<input class="btn btn-success" type="submit" value="Search">
      	</div>
</form>




<form method="get" action="search.php">
		<div class="form-group col-lg-12	" >		
			<select name="search" class="form-control">
				<optgroup label="Sex">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option disabled=""></option>
				</optgroup>
				<optgroup label="Track">
				<option value="Academic">Academic</option>
				<option value="TVL">TVL</option>
				<option value="Arts and Design">Arts and Design</option>
				<option disabled=""></option>
				</optgroup>
				<optgroup label="Strand">
				<option value="STEM">STEM</option>
				<option value="ABM">ABM</option>
				<option value="HUMSS">HUMSS</option>
				<option value="GAS">GAS</option>
				<option value="ICT">ICT</option>
				<option value="HE">HE</option>
				<option value="Arts and Design">Arts and Design</option>
				</optgroup>
		</select>
		<input class="btn btn-success" type="submit"  value="Filter">
	</div>
	</form>



<form class="forms">
<a class="btn btn-primary" href="aindex.php">Home</a>
</form>
</div>
<?php


if ($result = $db -> query("SELECT * FROM inqtb")){
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
		//echo "<td>". "<a href='pdf.php?pdf=$row[id]'>Print</a>"."</th>";
	
		echo "<tr>";

		//echo $row['name'],  ' ', $row['credsc'],' ',$row['time'],  '<br>'  ; 
		
		}

	echo "</table>";

	
	}
};

	 
?>





<?php

?>
