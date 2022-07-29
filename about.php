<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

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
        }, 800, function () {

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
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/shs.png">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="about.php" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Strand</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#acad">Academic Track</a>
              <a class="dropdown-item" href="#tvl">Technical Vocational Track</a>
              <a class="dropdown-item" href="#art">Arts and Design Track</a>
              <a class="dropdown-item" href="#sport">Sports Track</a>
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
  <div class="container" align="center">
    <div class="row">
      <div class="col-sm-12">
        <img src="img/acads.jpg" class="acads" alt="Academic Track" width="200" height="200">
        <h3 id="acad">Academic Track</h3>
        <h4><img src="img/stem.png" class="sports" alt="Science And Technology Engineering Mathematics" width="412.5"
            height="125"></h4>
        <p class="text">The INHS, proposes the inclusion of STEM under the Academic Track in the Senior High School
          program. INHS is one of the 16 schools to offer STEM strand under the Academic Track in the Division of
          Iloilo. The major reason for its inclusion is the number of students who signified to pursue courses in line
          with STEM. Since INHS is within the Iloilo City, many from its residents including those from nearby
          municipalities are inquiring and signified to enroll at INHS given a chance to take STEM. Moreover, INHS is a
          major feeder school to Colleges offering STEM related degree programs. Many of our teachers are ready and
          capable to teach specialized subject under STEM. For laboratory work, it can share with SSC for the meantime
          until DepEd provides the requested laboratories.</p>

        <h4><img src="img/abm.png" class="sports" alt="Accountancy and Business Management" width="412.5" height="125">
        </h4>
        <p class="text">The INHS, proposes the inclusion of ABM under the Academic Track in the Senior High School
          program. INHS is one of the many schools to offer ABM strand under the Academic Track in the Division of
          Iloilo. The major reason for this is the number of students who signified to pursue courses in line with ABM.
          Moreover, INHS is a major feeder school to Colleges offering ABM related degree programs. Many of our teachers
          are ready to teach specialized subject under ABM. </p>

        <h4><img src="img/humss.png" class="sports" alt="Humanities and Social Sciences" width="412.5" height="125">
        </h4>
        <p class="text">The development of man in general and Filipino in particular must be wholistic. As such, the
          Philippine Constitution (1987) is cognizant of the social dimension of a Filipino. In response to this, the
          educational system starting from the K-12 (Basic) to College and Post Graduate (Tertiary/Higher) has included
          among others Social Sciences and related disciplines in its Curriculum. In the basic education side, it is
          envisioned by DepEd to produce a globally competitive, competent, value oriented and a Filipino who possess
          basic life skills for the 21st century. Specifically, Senior High School students under academic track are
          expected to proceed to the tertiary education. One of the offerings is HUMSS.

          The INHS, proposes the inclusion of HUMSS under the Academic Tracks in the Senior High School program. INHS is
          one of the many schools to offer HUMSS strand under the Academic Track in the Division of Iloilo. The major
          reason for this is the number of students who signified to pursue courses in line with HUMSS. Moreover, INHS
          is a major feeder school to Colleges offering HUMSS related degree programs. Many of our teachers are ready to
          teach specialized subject under HUMSS.
        </p>

        <h4><img src="img/acad.png" class="sports" alt=" General Academic" width="412.5" height="125"></h4>
        <p class="text">
          The specialized subjects offered herein is a combination of the different offerings under the STEM, ABM and
          HUMMS. It is envisioned by DepEd to produce a globally competitive, competent, value oriented and a Filipino
          who possess basic life skills for the 21st century. Specifically, Senior High School students under academic
          track are expected to proceed to the tertiary education. One of the offerings is GAS.

          The INHS, proposes the inclusion of GAS under the Academic Track in the Senior High School program. INHS is
          one of the many schools to offer GAS strand under the Academic Track in the Division of Iloilo. The major
          reason for its inclusion is the number of students who have inconsistent answer during the surveys and man-to
          man counseling. Since they don’t want to move to another school, thus GAS is included in the SHS offering.
        </p>

        <img src="img/tvl.jpg" class="tvl" alt="Technical Vocational Track" width="200" height="200">
        <h3 id="tvl">Technical Vocational Track</h3>
        <h4><img src="img/ict.png" class="sports" alt="Information and Communication Technology" width="412.5"
            height="125"></h4>
        <p class="text">The Philippine has been tagged as an “awakened economy”. It is proven by the consistent GDP
          rating of more than 5 for the last 3 years. The rapid urban development and increased business related
          activities in major cities like Iloilo plus increased mobility of local residents and foreign nationals is
          tantamount of domestic blue-collar job opportunities. Although, inclusive growth is not yet maximized within
          our land, we need to streamline our efforts to train knowledgeable and competent citizenry for the said need.
          The DepEd bannered TVL as a major innovation in the educational system. It has converged its efforts to make
          students don life-skills and possible work-entry of graduates in the industry within the community. Iloilo
          National High School for one handles a lot of poor but deserving students. The school has a strong ICT
          personnel (many of them from the industry) capable of honing young minds in ICT, hence SOF was enhance with
          ICT subjects properly aligned with the K-12 Program. With existing facilities and teachers of the SOFTech, it
          will not be hard of INHS to banner ICT as a strand under the TVL Track in the SHS.</p>
        <h4><img src="img/he.png" class="sports" alt="Home Economics" width="412.5" height="125"></h4>
        <p class="text">The Home Economics track offers various specializations that can lead to livelihood projects at
          home. This strand aims to give you job-ready skills that can help you in finding the right employment.</p>

        <img src="img/arts.jpg" class="arts" alt="Arts and Design Track" width="200" height="200">
        <h3 id="art">Arts and Design Track</h3>
        <p class="text">Thanks to the NCCA, NCIP and related agencies by supporting the DepEd as it remembers those who
          are inclined to Arts by offering the Arts and Design Track in the Senior High School under the K-12 Program.
          The inclusion of the Arts and Design Track in the SHS Plan of INHS is a response to the increasing interest of
          many young students in the Arts. The School is not new in the said endeavor as it maintains School for the
          Arts as one of the special program in the Junior High School. From 1 section entering as freshmen in the early
          implementation of SPA program, it now maintain 2, with at least 30 students per section. These students are
          expected to proceed to Grades 11 and 12 under the Arts an Design Track.

          As the only school to offer SHS- Arts and Design Track under the Division, there might be other students from
          nearby Junior High School who are inclined to the Arts. The School is open to cater them. Despite the
          insufficiency of art studios, SHS Arts and Design students can share it with their junior counterpart until
          the government can provide it. If these will not suffice, there are many nearby art and music studios for OJT
          and educational purposes
        </p>

        <img src="img/arts.jpg" class="sports" alt="Sports Track" width="200" height="200">
        <h3 id="sport">Sports Track</h3>
        <p class="text">The inclusion of Sports track in the SHS under the K-12 Curriculum of DepEd concretized the
          belief of INHS in developing students with leaning in sports. Hence, INHS included Sports Track in its SHS
          offerings. INHS is the only school as of the moment to offer the Sports Track under the Division of Iloilo .
          These offerings were based on the internal assessment compiled through the School’s BEIS since 2013. Since it
          is offering sports under the School for Sports in the Junior High School, it is but appropriate to continue
          honing students in the Senior High School. Since INHS already started accumulating sports equipments. Although
          not yet enough, the equipments and facilities can be availed through a MOA with the Management of the Iloilo
          Sports Complex. In fact it has a standing MOA with the Provincial Government, that the School can use the
          Iloilo Sports Complex for educational and training purposes.</p>
      </div>


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