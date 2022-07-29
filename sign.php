<script type="text/javascript">
  function check() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value)
     {
    document.getElementById('password').style.borderColor = 'green';
    document.getElementById('cpassword').style.borderColor = 'green';
    document.getElementById('check').innerHTML = 'Password Match &#10004';
    document.getElementById('check').style.fontSize = 'small';
    document.getElementById('check').style.alignContent = 'center';
    document.getElementById('check').style.color = 'green';
    } 
else {
    document.getElementById('password').style.borderColor = 'red';
    document.getElementById('cpassword').style.borderColor = 'red';
    document.getElementById('check').innerHTML = 'Password Did Not Match &#10008';
    document.getElementById('check').style.fontSize = 'small';
    document.getElementById('check').style.alignContent = 'center';
    document.getElementById('check').style.color = 'red';
  }
}
</script>
<?php

$con = mysqli_connect('localhost','root','');
$error = array();









if (!$con) {
	echo 'not connected';
}

if (!mysqli_select_db($con,'inqdb')) {
	echo 'not connected to the database';
}

$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


if($password != $cpassword){
	//array_push($error, "Passaword Error");

?>
	
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iloilo National High School - Senior High School</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strand</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="about.php#acad">Academic Track</a>
          <a class="dropdown-item" href="about.php#tvl">Technical Vocational Track</a>
          <a class="dropdown-item" href="about.php#art">Arts and Design Track</a>
          <a class="dropdown-item" href="about.php#sport">Sports Track</a>
        </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Sign-in</a>
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
          <div class="col-lg-12 col-md-10 mx-auto">
            <div class="site-heading">
              
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form class="form-signin" method="post" action="sign.php">

            <h2 align="center">Sign-Up</h2>
            	<p class="error">Password did not match<p>
            <fieldset>
              <div class="form-group">     
                <label class="control-label"  for="username">Username (*Use your LRN)</label>
              <div class="controls">
                <input type="text" maxlength="12"  minlength="12" class="form-control" name="username" required="required"  onkeypress="return event.charCode>=48 && event.charCode<=57" ondrop="return false;"" >
                 </div>
              </div>
              <div class="form-group">     
                <label class="control-label"  for="password">Password</label>
              <div class="controls">
                <input type="password" class="form-control" id="password" name="password" onkeyup="check()" required="required" >
                 </div>
              </div>
              <div class="form-group">     
                <label class="control-label"  for="password">Confirm Password</label>
              <div class="controls">
                <input type="password" id="cpassword" class="form-control" name="cpassword" onkeyup="check()" required="required" >
                 </div>
                 <span id="check"></span>
              </div>
           <button class="btn btn-primary" type="submit" name="submit">Sign-up</button>
          </form>
        </div>
      </div>
    </div>
    

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.facebook.com/INHSSeniorHighSchool" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Iloilo National High School -
Senior High School 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>



<?php 

die();
mysql_close();
}


$sql = "INSERT INTO users (username, password) VALUES ('$username','$password') " ;

if (!mysqli_query($con,$sql)) { ?>
	
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iloilo National High School - Senior High School</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strand</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="about.php#acad">Academic Track</a>
          <a class="dropdown-item" href="about.php#tvl">Technical Vocational Track</a>
          <a class="dropdown-item" href="about.php#art">Arts and Design Track</a>
          <a class="dropdown-item" href="about.php#sport">Sports Track</a>
        </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Sign-in</a>
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
          <div class="col-lg-12 col-md-10 mx-auto">
            <div class="site-heading">
              
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form class="form-signin" method="post" action="sign.php">
            <h2 align="center">Sign-Up</h2>
            <p class="error">Error. Username already exist</p>
            <fieldset>
              <div class="form-group">     
                <label class="control-label"  for="username">Username(*Use your LRN)</label>
              <div class="controls">
                <input type="text" maxlength="12"  minlength="12" class="form-control" name="username" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" ondrop="return false;">
                 </div>
              </div>
              <div class="form-group">     
                <label class="control-label"  for="password">Password</label>
              <div class="controls">
                <input type="password" class="form-control" id="password" name="password" onkeyup="check()" required="required" >
                 </div>
              </div>
              <div class="form-group">     
                <label class="control-label"  for="password">Confirm Password</label>
              <div class="controls">
                <input type="password" id="cpassword" class="form-control" name="cpassword" onkeyup="check()" required="required" >
                 </div>
                 <span id="check"></span>
              </div>
           <button class="btn btn-primary" type="submit" name="submit">Sign-up</button>
          </form>
        </div>
      </div>
    </div>
    

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.facebook.com/INHSSeniorHighSchool" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
           <p class="copyright text-muted">Copyright &copy; Iloilo National High School -
Senior High School 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>





<?php }
	else{
?>
	
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iloilo National High School - Senior High School</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strand</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="about.php#acad">Academic Track</a>
          <a class="dropdown-item" href="about.php#tvl">Technical Vocational Track</a>
          <a class="dropdown-item" href="about.php#art">Arts and Design Track</a>
          <a class="dropdown-item" href="about.php#sport">Sports Track</a>
        </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Sign-in</a>
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
          <div class="col-lg-12 col-md-10 mx-auto">
            <div class="site-heading">
              
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form class="form-signin" method="post" action="signin.php" >
              <h2 align="center">Sign-In</h2>
              <p class="added">Register Successfully<p>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required="required" placeholder="Enter LRN">
                 </div>
              <div class="form-group">     
                <label for="password">Password</label>
                <input type="password" class= "form-control" name="password" required="required" placeholder="Password">
                 </div> 
                 <!-- <select name="type" class="form-control">
                  <option value="Admin">Guest</option>
                   <option value="Admin">Admin</option>
                 </select>
                 <br> -->


              <!-- <div class="control-group">     
                <label class="control-label"  for="type">Type</label>
              <div class="controls">
                <select name=type>
                  <option value="Admin">Admin</option>
                  <option value="Guest">Guest</option>
                </select>
                 </div> -->
                 <p class="reg" align="left"> Not yet registered?<a href="fill.php"><span style="color:blue">Click here</span></a></p>
                <div align="right"><button class="btn btn-primary" type="submit" name="submit">Log in</button></div>

            <!-- <input type="submit" name="submit" value="Log-in"> -->
          
          </form>
        </div>
      </div>
    </div>
    

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.facebook.com/INHSSeniorHighSchool" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul><p class="copyright text-muted">Copyright &copy; Iloilo National High School -
Senior High School 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>




<?php
	
	}


?>


