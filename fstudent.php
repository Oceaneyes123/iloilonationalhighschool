<?php


include 'sel.php';

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$sql = "SELECT * FROM inqtb WHERE lrn=".$_GET['id'];
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result);
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Form- Senior High School</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/shs.png">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
       
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="gindex.php?id=<?php echo $id ; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gstrand.php?id=<?php echo $id ; ?>">Strand</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php?id=<?php echo $id ; ?>">Register</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="student.php?id=<?php echo $id ; ?>">Record</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log-out</a>
            </li>
          </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/abc.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-10 mx-auto">
            <div class="site-heading">
              
          </div>
        </div>
      </div>
    </header>


		

		</div>
		
						
				<form class="register" method="post" action="pdf2.php">
					<fieldset>
						<h2 align="center">Student Record</h2>
	
	  </div>
<br>
	 <div class="form-row">			
	 	<div class="form-group col-lg-6">
		<label class="control-label"  for="schoolname">School Name:</label>
		 <input type="text" class="form-control" name="schoolname" value = "<?php echo $row['school_name']; ?> " required="required" >
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="schoolid">School ID:</label>
		 <input type="text" class="form-control" name="schoolid" value = "<?php echo $row['school_id']; ?> " required="required" >
     </div>
 </div>

	<div class="form-row">
		<div class="form-group col-lg-4">			
			<label class="control-label"  for="district">District</label>
		 <input type="text" class="form-control" name="district" value = "<?php echo $row['district']; ?>" required="required">
     </div>
	<div class="form-group col-lg-4">			
		<label class="control-label"  for="division">Division</label>
		 <input type="text" class="form-control" name="division" value = "<?php echo $row['division']; ?>" required="required">
     </div>
	<div class="form-group col-lg-4">			
		<label class="control-label"  for="region">Region</label>
		 <input type="text" class="form-control" name="region" required="required" value = "<?php echo $row['region']; ?> ">
     </div>
 </div>

	<div class="form-row">
		<div class="form-group col-lg-6">
			<label class="control-label"  for="lrn">LRN</label>
		 	<input type="text" class="form-control" name="lrn" required="required" value = "<?php echo $row['lrn']; ?> ">
    	</div>
 </div>

 	<div class="form-row">
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="lastname">Last Name</label>
		 <input type="text" class="form-control" name="lastname" required="required" value = "<?php echo $row['last_name']; ?> ">
    </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="firstname">First Name</label>
		 <input type="text" class="form-control" name="firstname" required="required" value = "<?php echo $row['first_name']; ?> ">
    </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="extensionname">Extension Name</label>
		 <input type="text" class="form-control" name="extensionname"  value = "<?php echo $row['extension_name']; ?> ">
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="middlename">Middle Name</label>
		 <input type="text" class="form-control" name="middlename" required="required" value = "<?php echo $row['middle_name']; ?> ">
     </div>
</div>

<div class="form-row"> 	
	<div class="form-group col-lg-3" >		
		 <label class="control-label"  for="sex">Sex</label>
		 <select name="sex" class="form-control">
		 	<option value = "<?php echo $row['sex']; ?> "><?php echo $row['sex']; ?></option>
		 	<option value="Male">Male</option>
		 	<option value="Female">Female</option>
		 </select>
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="birthdate">Birth Date</label>
		 <input type="text" class="form-control" name="birthdate" required="required" value = "<?php echo $row['birthdate']; ?> ">
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="age">Age</label>
		 <input type="text" class="form-control" name="age" required="required" value = "<?php echo $row['age']; ?> " >
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="religion">Religious Affiliation</label>
		<select name="religion"  class="form-control">
			<option value = "<?php echo $row['religion']; ?> "><?php echo $row['religion']; ?></option>
		 	<option value="Roman Catholic">Roman Catholic</option>
		 	<option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
		 	<option value="Baptist">Baptist</option>
		 	<option value="Protestant">Protstant</option>
		 	<option value="Seventh-Day Adventist">Seventh-Day Adventist</option>
		 	<option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
		 	<option value="Others">Others</option></select>
		 <input type="text" class="form-control" name="religion" required="required" >
     </div>
 </div>

	<div class="form-row">
	<div class="form-group col-lg-12">			
		<label class="control-label"  for="address">Complete Address</label>
		 <input type="text" class="form-control" name="address" required="required" value = "<?php echo $row['address']; ?> ">
     </div>
</div>
	<div class="form-row">
		<div class="form-group col-lg-3	">		
		<label class="control-label"  for="gradelevel">Grade Level</label>
		  <select name="gradelevel" class="form-control">
		 	<option value="<?php echo $row['grade_level']; ?>"><?php echo $row['grade_level']; ?></option>
		 	<option value="Grade 11">Grade 11</option>
		 	<option value="Grade 12">Grade 12</option>
		 </select>
     </div>
	<div class="form-group col-lg-3	">
		<label class="control-label"  for="section">Section</label>
			<select name="section" class="form-control">
			<option value="<?php echo $row['section']; ?>"><?php echo $row['section']; ?></option>
		 	<option value="STEM A">STEM A</option>
		 	<option value="STEM B">STEM B</option>
		 	<option value="STEM C">STEM C</option>
		 	<option value="STEM D">STEM D</option>
		 	<option value="ABM A">ABM A</option>
		 	<option value="ABM B">ABM B</option>
		 	<option value="ABM C">ABM C</option>
		 	<option value="ABM D">ABM D</option>
		 	<option value="HUMSS A">HUMSS A</option>
		 	<option value="HUMSS B">HUMSS B</option>
		 	<option value="HUMSS C">HUMSS C</option>
		 	<option value="HUMSS D">HUMSS D</option>
		 	<option value="GAS A">GAS A</option>
		 	<option value="GAS B">GAS B</option>
		 	<option value="ICT A">ICT A</option>
		 	<option value="ICT B">ICT B</option>
		 	<option value="HE A">HE A</option>
		 	<option value="HE B">HE B</option>
		 	<option value="ARTS">ARTS</option>
		 </select>
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="schoolyear">School Year</label>
		 <input type="text" class="form-control" name="schoolyear" required="required" value = "<?php echo $row['school_year']; ?> ">
     </div>
 </div>

	<div class="form-row">
		<div class="form-group col-lg-3">
		<label class="control-label"  for="track">Track</label>
			<select name="track" class="form-control">
			<option value="<?php echo $row['track']; ?>"><?php echo $row['track']; ?></option>
		 	<option value="Academic">Academic</option>
		 	<option value="TVL">TVL</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
		<div class="form-group col-lg-3">		
		<label class="control-label"  for="strand">Strand</label>
		  <select name="strand" class="form-control">
		  	<option value="<?php echo $row['strand']; ?> "><?php echo $row['strand']; ?> </option>
		 	<option value="STEM">STEM</option>
		 	<option value="ABM">ABM</option>
		 	<option value="HUMSS">HUMSS</option>
		 	<option value="GAS">GAS</option>
		 	<option value="ICT">ICT</option>
		 	<option value="HE">HE</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
		<div class="form-group col-lg-3">			
		<label class="control-label"  for="semester">Semester</label>
			 <select name="semester" class="form-control">
			 <option value="<?php echo $row['semester']; ?>"><?php echo $row['semester']; ?></option>
		 	<option value="1st">1st</option>
		 	<option value="2nd">2nd</option>
		 </select>
     </div>
</div>

	<div class="form-row">
		<div class="form-group col-lg-5">			
		<label class="control-label"  for="fathername">Father's Name</label>
		 <input type="text" class="form-control" name="fathername" required="required" value = "<?php echo $row['father_name']; ?> ">
     </div>
	<div class="form-group col-lg-5">
		<label class="control-label"  for="mothername">Mother's Maiden Name</label>
		 <input type="text" class="form-control" name="mothername" required="required" value = "<?php echo $row['mother_maidenname']; ?> ">
     </div>
 </div>

	<div class="form-row">
	<div class="form-group col-lg-5">			
		<label class="control-label"  for="guardianname">Guardian's Name</label>
		 <input type="text" class="form-control" name="guardianname" required="required" value = "<?php echo $row['guardian_name']; ?> ">
     </div>
	<div class="form-group col-lg-5">			
		<label class="control-label"  for="contact">Contact No. of Guardian</label>
		 <input type="text" class="form-control" name="contact" required="required" value = "<?php echo $row['contact']; ?> ">
     </div>
		</div>

	<div class="control-group">			
		<div class="controls">
		 <input type="hidden" name="id"  value = "<?php echo $row['id']; ?> ">
     </div>
		<div align="center"><button class="btn btn-primary" type="submit" value="Update">Print</button></div>
	</fieldset>
		</form>
		
	</div>

	</body>