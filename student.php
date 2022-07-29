<?php
include 'sel.php';
if(isset($_GET['id'])){

	$id = $_GET['id'];
	$sql = "SELECT * FROM inqtb WHERE lrn=".$_GET['id'];
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result);
}

if(isset($_POST['upload'])){
	//path to store image
	$target = "image/".basename($_FILES['image']['name']);

	$image = $_FILES['image']['name'];
	require 'sel.php';

	$a = $_FILES['image']['name'];

	$sql = "UPDATE inqtb SET pic = '$a' WHERE lrn='$id'";
	mysqli_query($db, $sql);


	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg = "Image Uploaded Successfully";
}	else
		$msg = "Not Uploaded";


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
              <a class="nav-link" href="findex.php?id=<?php echo $id ; ?>">Home</a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="fstrand.php?id=<?php echo $id ; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strand</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="fstrand.php?id=<?php echo $id ; ?>#acad">Academic Track</a>
          <a class="dropdown-item" href="fstrand.php?id=<?php echo $id ; ?>#tvl">Technical Vocational Track</a>
          <a class="dropdown-item" href="fstrand.php?id=<?php echo $id ; ?>#art">Arts and Design Track</a>
          <a class="dropdown-item" href="fstrand.php?id=<?php echo $id ; ?>#sport">Sports Track</a>
        </div></li>
     
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
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              
          </div>
        </div>
      </div>
    </header>

<style type="text/css">
	img{
		float: left;
		padding-right: 5px;
		padding-left: 5px;
		margin-right: 5px;
	}
</style>


		<h2 align="center">Student Record</h2>


<div>
		<div class="img">
	  		<?php
	  			require 'sel.php';
	  			$sql = "SELECT * FROM inqtb WHERE lrn = '$id'";
	  			$result = mysqli_query($db, $sql);
	  			$row = mysqli_fetch_array($result);
	  			$img = $row['pic'];
	  				
	  		?>
	  			<img src="image/<?php echo $img; ?>" height="192" width="192" >
	  		</div>
	  		<div class="forms">
				<form method="POST" action="student.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000">
					<input type="file" name="image" class="form-control-file"><br>
					<input type="submit" name="upload" value="Change">	
				</form>
			</div>
</div>

<div class="main-form">		
						
				<form class="register" method="post" action="update2.php">
				
						
	
	  
<br>

	<div class="form-row">
		<div class="form-group col-lg-6">
			<label class="control-label"  for="lrn">LRN</label>
		 	<input type="hiiden" class="form-control" name="lrn" required="required" value = "<?php echo $row['lrn']; ?> ">
    	</div>
 </div>

 	<div class="form-row">
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="lastname">Last Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="lastname" required="required" value = "<?php echo $row['last_name']; ?> ">
    </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="firstname">First Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="firstname" required="required" value = "<?php echo $row['first_name']; ?> ">
    </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="extensionname">Extension Name</label>
		 <input type="text" class="form-control" name="extensionname"  value = "<?php echo $row['extension_name']; ?> ">
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="middlename">Middle Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="middlename" required="required" value = "<?php echo $row['middle_name']; ?> ">
     </div>
</div>

<div class="form-row"> 	
	<div class="form-group col-lg-3" >		
		 <label class="control-label"  for="sex">Sex<span style = "color:red">*</span></label>
		 <select name="sex" class="form-control">
		 	<option value = "<?php echo $row['sex']; ?> "><?php echo $row['sex']; ?></option>
		 	<option value="Male">Male</option>
		 	<option value="Female">Female</option>
		 </select>
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="birthdate">Birth Date<span style = "color:red">*</span></label>
		 <input type="text" class="form-control"  name="birthdate" required="required" value = "<?php echo $row['birthdate']; ?> ">
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="age">Age<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="age" required="required" value = "<?php echo $row['age']; ?> " >
     </div>
	<div class="form-group col-lg-3">			
		<label class="control-label"  for="religion">Religious Affiliation<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="religion" required="required" value = "<?php echo $row['religion']; ?> ">
     </div>
 </div>

	<div class="form-row">
	<div class="form-group col-lg-12">			
		<label class="control-label"  for="address">Complete Address<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="address" required="required" value = "<?php echo $row['address']; ?> ">
     </div>
</div>
			<div class="form-row">
		<div class="form-group col-lg-5">			
		<label class="control-label"  for="fathername">Father's Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="fathername" required="required" value = "<?php echo $row['father_name']; ?> ">
     </div>
	<div class="form-group col-lg-5">
		<label class="control-label"  for="mothername">Mother's Maiden Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="mothername" required="required" value = "<?php echo $row['mother_maidenname']; ?> ">
     </div>
 </div>

	<div class="form-row">
	<div class="form-group col-lg-5">			
		<label class="control-label"  for="guardianname">Guardian's Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="guardianname" required="required" value = "<?php echo $row['guardian_name']; ?> ">
     </div>
	<div class="form-group col-lg-5">			
		<label class="control-label"  for="contact">Contact No. of Guardian<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" minlength="11" maxlength="11" name="contact" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" ondrop="return false;" value = "<?php echo $row['contact']; ?> ">
     </div>
		</div>
	<div class="form-row">
		<div class="form-group col-lg-3">			
		<label class="control-label"  for="grade">Grade<span style = "color:red">*</span></label>
		 	<input type="text" maxlength="2" minlength="2"  name="grade" class="form-control" required="required" value="<?php echo $row['grade']; ?>" onkeypress="return event.charCode>=48 && event.charCode<=57">
     </div>
	<div class="form-group col-lg-3	">
		<label class="control-label"  for="section">Section<span style = "color:red">*</span></label>
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
		<label class="control-label"  for="schoolyear">School Year<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="schoolyear" required="required" value = "<?php echo $row['school_year']; ?> ">
     </div>
 </div>
 <script>
	function populate(t,s){
		var t = document.getElementById(t);
		var s = document.getElementById(s);
		s.innerHTML="";
		if(t.value == "Academic"){
			var optionArray = ["STEM|STEM","ABM|ABM","HUMSS|HUMSS","GAS|GAS"];
		}else if(t.value == "TVL"){
			var optionArray = ["ICT|ICT","HE|HE"];
		}else if(t.value == "Arts and Design"){
			var optionArray = ["Arts and Design|Arts and Design"];
		}

		for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option")
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s.options.add(newOption);

		}
	}
	

</script>


	<div class="form-row">
		<div class="form-group col-lg-3">
		<label class="control-label"  for="track">First Choice Track<span style = "color:red">*</span></label>
			<select id="track" name="track" class="form-control" onchange="populate('track','strand')">
			<option value="<?php echo $row['track']; ?>"><?php echo $row['track']; ?></option>
		 	<option value="Academic">Academic</option>
		 	<option value="TVL">TVL</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
		<div class="form-group col-lg-3">		
		<label class="control-label"  for="strand">First Choice Strand<span style = "color:red">*</span></label>
		  <select id="strand" name="strand" class="form-control">
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
		
     <script>
	function pop(t,s){
		var t = document.getElementById(t);
		var s = document.getElementById(s);
		s.innerHTML="";
		if(t.value == "Academic"){
			var optionArray = ["STEM|STEM","ABM|ABM","HUMSS|HUMSS","GAS|GAS"];
		}else if(t.value == "TVL"){
			var optionArray = ["ICT|ICT","HE|HE"];
		}else if(t.value == "Arts and Design"){
			var optionArray = ["Arts and Design|Arts and Design"];
		}

		for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option")
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s.options.add(newOption);

		}
	}
	

</script>



</div>
	<div class="form-row">
		<div class="form-group col-lg-3">
		<label class="control-label"  for="track1">Second Choice Track<span style = "color:red">*</span></label>
			<select id="track1" name="track1" class="form-control" onchange="pop('track1','strand1')">
			<option value="<?php echo $row['track1']; ?>"><?php echo $row['track1']; ?></option>
		 	<option value="Academic">Academic</option>
		 	<option value="TVL">TVL</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
		<div class="form-group col-lg-3">		
		<label class="control-label"  for="strand1">Second Choice Strand<span style = "color:red">*</span></label>
		  <select id="strand1" name="strand1" class="form-control">
		  	<option value="<?php echo $row['strand1']; ?> "><?php echo $row['strand1']; ?> </option>
		 	<option value="STEM">STEM</option>
		 	<option value="ABM">ABM</option>
		 	<option value="HUMSS">HUMSS</option>
		 	<option value="GAS">GAS</option>
		 	<option value="ICT">ICT</option>
		 	<option value="HE">HE</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
 </div>


	
		 <input type="hidden" name="id"  value = "<?php echo $row['id']; ?> ">
 
		
				<div align="center">
				<button class="btn btn-primary" type="submit" value="Update">Update</button>
			</div>
			
		
	</fieldset>
		</form>
	</div>
			<div class="print">
			<div align="center">
			<a href="pdf2.php?id=<?php echo $id; ?>">
				<button class="btn btn-primary" type="button">Print</button>
			</a>
		</div>
		</div>
	</div>

	</body>