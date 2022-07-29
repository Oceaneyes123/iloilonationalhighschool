<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Strand</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <a class="nav-link" href="aindex.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="astrand.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strand</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#acad">Academic Track</a>
          <a class="dropdown-item" href="#tvl">Technical Vocational Track</a>
          <a class="dropdown-item" href="#art">Arts and Design Track</a>
          <a class="dropdown-item" href="#sport">Sports Track</a>
        </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="record.php">Record</a>
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
          <div class="col-lg-12 col-md-10 mx-auto">
            <div class="page-heading">
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container" align="center">
      <div class="row">
        <div class="col-sm-12">
          <img src="img/acads.jpg" class="acads" alt="Academic Track" width="200" height="200"><h3 id="acad">Academic Track</h3>
          <h4><img src="img/stem.png" class="sports" alt="Science And Technology Engineering Mathematics" width="412.5" height="125"></h4>
<p class="text">Science, Technology, Engineering, and Mathematics are intertwining disciplines when applied in the real world. The difference of the STEM curriculum with the other strands and tracks is the focus on advanced concepts and topics. Under the track, you can become a pilot, an architect, an astrophysicist, a biologist, a chemist, an engineer, a dentist, a nutritionist, a nurse, a doctor, and a lot more. Those who are also interested in Marine Engineering should take this track</p>

<h4><img src="img/abm.png" class="sports" alt="Accountancy and Business Management" width="412.5" height="125"></h4>
<p class="text">The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for. ABM can also lead you to careers on management and accounting which could be sales manager, human resources, marketing director, project officer, bookkeeper, accounting clerk, internal auditor, and a lot more.</p>

<h4><img src="img/humss.png" class="sports" alt="Humanities and Social Sciences" width="412.5" height="125"></h4>
<p class="text">The HUMSS strand is designed for those who wonder what is on the other side of the wall. In other words, you are ready to take on the world and talk to a lot of people. This is for those who are considering taking up journalism, communication arts, liberal arts, education, and other social science-related courses in college.If you take this strand, you could be looking forward to becoming a teacher, a psychologist, a lawyer, a writer, a social worker, or a reporter someday. This strand focuses on improving your communication skills</p>

<h4><img src="img/acad.png" class="sports" alt=" General Academic" width="412.5" height="125"></h4>
<p class="text">
While the other strands are career-specific, the General Academic Strand is great for students who are still undecided on which track to take. You can choose electives from the different academic strands under this track. These subjects include Humanities, Social Sciences, Applied Economics, Organization and Management, and Disaster Preparedness.
If you are really not sure if you will be able to pursue any degree after Senior High or if you want to earn money immediately after graduation, then this track is for you. Even without college, Technical-Vocational-Livelihood track will equip you with job-ready skills in the future.This track also invests primarily on skills that can gain you requisite COCs (Certificates of Competency) and NCs (National Certifications) which would be essential when looking for better career opportunities in agriculture, electronics, and trade. This is also important when applying abroad where the skills you gain would prepare you as you join the workforce.</p>

<img src="img/tvl.jpg" class="tvl" alt="Technical Vocational Track" width="200" height="200"><h3 id="tvl">Technical Vocational Track</h3>
<h4><img src="img/ict.png" class="sports" alt="Information and Communication Technology" width="412.5" height="125"></h4>
<p class="text">If you are computer-savvy or a technological freak, step right into the ICT strand. Under this strand, you will be encouraged to utilize information and communication technological tools to contextualize, collaborate, and create experiences for learning in this professional strand.</p>
<h4><img src="img/he.png" class="sports" alt="Home Economics" width="412.5" height="125"></h4>
<p class="text">The Home Economics track offers various specializations that can lead to livelihood projects at home. This strand aims to give you job-ready skills that can help you in finding the right employment.</p>

<img src="img/arts.jpg" class="arts" alt="Arts and Design Track" width="200" height="200"><h3 id="art">Arts and Design Track</h3>
<p class="text">
The arts & Design track will prepare you as you wander around the design, performative, and creative industry. What this track aims is to get you a career in the creative field after you graduate. Breaking the stereotype that is there no careers in this industry, you’ll be surprised how fun the Arts and Design world can be.To instill the right employment skills so that you can get a job immediately after graduation, part of the curriculum of this track is to expose you to various form of media such as architecture, interior design, industrial design, graphic design, animation, painting, fashion design, photography, and film.
</p>

<img src="img/arts.jpg" class="sports" alt="Sports Track" width="200" height="200"><h3 id="sport">Sports Track</h3>
<p class="text">The Sports Track aims to give you understanding of the basic principles and techniques in relation to physical education and recreation. It will also offer you discuss various factors that affect social, psychological, and cognitive development in sports leadership and management. Professions that are related in this track are fitness trainers, game officials, tournament manager, recreation attendant, masseur, or gym instructor.</p>
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
