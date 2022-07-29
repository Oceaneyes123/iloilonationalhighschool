<?php

require 'sel.php';
$msg="";

if(isset($_GET['id'])){
$id = $_GET['id'];

}

// if(isset($_POST['upload'])){
// 	//path to store image
// 	$target = "image/".basename($_FILES['image']['name']);

// 	$image = $_FILES['image']['name'];
// 	require 'sel.php';


// 	$sql = "INSERT INTO inqtb (pic) VALUES ('$image') WHERE lrn='$id'";
// 	mysqli_query($db, $sql);


// 	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
// 		$msg = "Image Uploaded Successfully";
// }	else
// 		$msg = "Not Uploaded";


// }


  

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
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="gstrand.php?id=<?php echo $id ; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strand</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="gstrand.php?id=<?php echo $id ; ?>#acad">Academic Track</a>
          <a class="dropdown-item" href="gstrand.php?id=<?php echo $id ; ?>#tvl">Technical Vocational Track</a>
          <a class="dropdown-item" href="gstrand.php?id=<?php echo $id ; ?>#art">Arts and Design Track</a>
          <a class="dropdown-item" href="gstrand.php?id=<?php echo $id ; ?>#sport">Sports Track</a>
        </div>
            <li class="nav-item">
              <a class="nav-link" href="home.php?id=<?php echo $id ; ?>">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log-out</a>
            </li>
          </ul>
        </div>
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


		

		</div>	
	  </div>

<h2 align="center">Personal Information</h2>
	<!--   <div class="photo" align="left">
	  		<?php
	  			require 'sel.php';
	  			$sql = "SELECT * FROM inqtb WHERE lrn = '$id'";
	  			$result = mysqli_query($db, $sql);
	  			$row = mysqli_fetch_array($result);
	  			$img = $row['pic'];
	  				
	  		?>
	  			<div>
	  	
	  			<img src="image/<?php echo $img; ?>" height="250" width="250" >
	  		</div>
	  		<!-- <div>
			<form method="POST" action="home.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000">
				<div>
					<input type="file" name="image">
				</div>
				<div>
					<input type="submit" name="upload" value="Upload">
				</div> --> 
				
				
			</form>
		</div>




	  		<form class="register" method="post" action="add.php?id=<?php echo $id ; ?>">
				

<br>
		 <input type="hidden" name="schoolname" required="required" value="Iloilo National High School">
		 <input type="hidden" name="schoolid" required="required" value="30509">
		 <input type="hidden" name="district" required="required" value="Leganes">
		 <input type="hidden" name="division" required="required" value="Iloilo">
     	 <input type="hidden" name="region" required="required" value="6-Western Visayas">
     
	
    <div class="form-row"> 	
    <div class="form-group col-md-6">			
		<label class="control-label"  for="lrn">LRN<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="lrn" required="required" value="<?php echo $id; ?> " >
     
		
     
     	</div>
 


 </div>

<div class="form-row"> 	
	<div class="form-group col-md-3" >			
		<label class="control-label"  for="lastname">Last Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="lastname" required="required" >
    </div>
		<br>

	<div class="form-group col-md-3">			
		<label class="control-label"  for="firstname">First Name<span style = "color:red">*</span></label>
		 <input type="text" class="form-control" name="firstname" required="required" >
</div>

		
	
	<div class="form-group col-md-3" >			
		<label class="control-label"  for="extensionname">Extension Name</label>
		 <input type="text" class="form-control" name="extensionname" >
		</div> 
    
	
	<div class="form-group col-md-3" >		
		<label class="control-label"  for="middlename">Middle Name<span style = "color:red">*</span></label>
			 <input type="text" class="form-control" name="middlename" required="required" >
     </div>
</div>
		<br>



<div class="form-row"> 	
	<div class="form-group col-md-3" >		
		 <label class="control-label"  for="sex">Sex<span style = "color:red">*</span></label>
		 <select name="sex" class="form-control">
		 	<option value="Male">Male</option>
		 	<option value="Female">Female</option>
		 </select>
     </div>
		<br>

		<script>
			function Age(){
				//$("#bd").datepicker();
				var a = document.getElementById("bd").value;
				var b = new Date(a);
				var c = new Date();
				var d = c.getFullYear() - b.getFullYear();
				if(c.getMonth()<b.getMonth()){
					d--;
				} else if(c.getMonth()==b.getMonth() && c.getDate()<b.getDate()){
					d--;
				}
				
				//alert(c.getMonth());
				document.getElementById("age").value =d;
			}
		</script>

	<div class="form-group col-md-3" >		
		<label  class="control-label"  for="birthdate">Birth Date<span style = "color:red">*</span></label>
		 <input id="bd" type="date" name="birthdate" required="required" class="form-control" onchange="Age()">
     </div>
		<br>

	<div class="form-group col-md-3" >		
		<label class="control-label"  for="age">Age<span style = "color:red">*</span></label>
		 <input id="age" type="text" name="age" class="form-control" required="required">
     </div>
		<br>


	<div class="form-group col-md-3" >			
		<label class="control-label"  for="religion">Religious Affiliation<span style = "color:red">*</span></label>	
		 <select name="religion"  class="form-control">
		 	<option value="Roman Catholic">Roman Catholic</option>
		 	<option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
		 	<option value="Baptist">Baptist</option>
		 	<option value="Protestant">Protstant</option>
		 	<option value="Seventh-Day Adventist">Seventh-Day Adventist</option>
		 	<option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
		 	<option value="Others">Others</option></select>
     </div>
</div>     
		<br>

<div class="form-row"> 	
	<div class="form-group col-md-10" >
		<label class="control-label"  for="address">Complete Address<span style = "color:red">*</span></label>
		 <input type="text" name="address" required="required" class="form-control">
     </div>
</div>  
			
			<div class="form-row"> 	
	<div class="form-group col-md-5" >		
		<label class="control-label"  for="fathername">Father's Name<span style = "color:red">*</span></label>
		 <input type="text" name="fathername" required="required" class="form-control">
     </div>
		<br>
		
	<div class="form-group col-md-5" >		
		<label class="control-label"  for="mothername">Mother's Maiden Name<span style = "color:red">*</span></label>
		 <input type="text" name="mothername" required="required" class="form-control">
     </div>
    </div> 
		<br>
<div class="form-row">			
	<div class="form-group col-md-5" >	
		<label class="control-label"  for="guardianname">Guardian's Name<span style = "color:red">*</span></label>
		 <input type="text" name="guardianname" required="required" class="form-control">
     </div>
		<br>


	<div class="form-group col-md-5">			
		<label class="control-label"  for="contact">Contact No. of Guardian<span style = "color:red">*</span></label>
		 <input type="text" maxlength="11" minlength="11" name="contact" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" ondrop="return false;" class="form-control">
     </div>
 </div>





		<br>
<div class="form-row"> 	
	<div class="form-group col-md-3	" >			
		<label class="control-label"  for="grade">Grade<span style = "color:red">*</span></label>
		 <input type="text" name="grade" class="form-control" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57">
     </div>
		

	<div class="form-group col-md-3">			
		<label class="control-label"  for="section">Section</label>
		
		 <select name="section" class="form-control">
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
    
		

	<div class="form-group col-md-3">			
		<label class="control-label"  for="schoolyear">School Year<span style = "color:red">*</span></label>
		<select class="form-control" name="schoolyear">
			<script>
				for (var a=2017,b=2018;a<2030;a++,b++){
					document.write('<option  value="'+a+'-'+b+'">'+a+'-'+b+'</option>')
				}
			</script>
			
		</select>
		<!-- <input type="text" name="schoolyear" required="required" class="form-control" > -->
     </div>
</div>     
		<br>


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
	<div class="form-group col-md-3	" >				
		<label class="control-label"  for="track">First Choice Track<span style = "color:red">*</span></label>
		 <select id="track" name="track" class="form-control" onchange="populate('track','strand')">
		 	<option value="Academic">Academic</option>
		 	<option value="TVL">TVL</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
		<br>

	<div class="form-group col-md-3	" >	
		<label class="control-label"  for="strand">First Choice Strand<span style = "color:red">*</span></label>
		 <select id="strand" name="strand" class="form-control">
		 	<option value="STEM">STEM</option>
		 	<option value="ABM">ABM</option>
		 	<option value="HUMSS">HUMSS</option>
		 	<option value="GAS">GAS</option>
		 	<!--<option value="ICT">ICT</option>
		 	<option value="HE">HE</option>
		 	<option value="Arts and Design">Arts and Design</option>-->
		 </select>
     </div>
    
		<br>


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
	<div class="form-group col-md-3	" >				
		<label class="control-label"  for="track1">Second Choice Track<span style = "color:red">*</span></label>
		 <select id="track1" name="track1" class="form-control" onchange="pop('track1','strand1')">
		 	<option value="Academic">Academic</option>
		 	<option value="TVL">TVL</option>
		 	<option value="Arts and Design">Arts and Design</option>
		 </select>
     </div>
		<br>

	<div class="form-group col-md-3	" >	
		<label class="control-label"  for="strand1"> Second Choice Strand<span style = "color:red">*</span></label>
		 <select id="strand1" name="strand1" class="form-control">
		 	<option value="STEM">STEM</option>
		 	<option value="ABM">ABM</option>
		 	<option value="HUMSS">HUMSS</option>
		 	<!--<option value="GAS">GAS</option>
		 	<option value="ICT">ICT</option>
		 	<option value="HE">HE</option>
		 	<option value="Arts and Design">Arts and Design</option>-->
		 </select>
     </div>
</div>


		<br>

	    
		<br>

		<div align="center"><button class="btn btn-primary" type="submit" name="">Submit</button><div>



	</fieldset>
		</form>

		<br>
		<br>

		
	</div>

	

</body>