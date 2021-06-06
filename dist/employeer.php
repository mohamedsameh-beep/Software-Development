<?php 
  $body="home employeer";
	$copyright = true;
  $title="Home";
	include 'init.php';
?>
<!--Start Home Intro-->
<div class="home-intro section1">
  <div class="container">
    <h1>Hire Smarter. Grow Faster.</h1> 
    <p>With Egypt’s #1 Online Recruitment Platform</p>
    <a href="signup-employeer.php" class="btn btn-light">Start Hiring now</a>
  </div>
</div>
<svg class="intro-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
  <path class="main-path" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
</svg>
<!--End Home Intro-->
<!--Start Logos-->
<div class="section2">
  <div class="container">
    <h4>Join Egypt's Top Companies</h4>
    <div class="clients row no-gutter text-center">
      <div class="client-item col-12 col-md-3">
        <a href=""><img src="assets/img/google.svg" alt="Google"></a>
      </div>
      <div class="client-item col-12 col-md-3">
        <a href=""><img src="assets/img/airbnb.svg" alt="Airbnb"></a>
      </div>
      <div class="client-item col-12 col-md-3">
        <a href=""><img src="assets/img/apple.svg" alt="Apple"></a>
      </div>
      <div class="client-item col-12 col-md-3">
        <a href=""><img src="assets/img/microsoft.svg" alt="Microsoft"></a>
      </div>
    </div>
  </div>
</div>
<!--End Logos-->
<!--Start Section3-->
<div class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-6 info">
        <span class="icon"><i class="fas fa-filter"></i></span>
        <h2>Optimize Your Entire Hiring Process With One Tool</h2>
        <p>Gain control over the whole process by using WUZZUF all the way from screening to short-listing till interviewing and hiring to better manage the process with your team.</p> 
        <a href="signup-employeer.php" class="btn btn-primary btn-large">Get Started Now</a>
      </div>
      <div class="col-md-6 img">
        <img src="assets/img/screening.svg">
      </div>
    </div>
  </div>
</div>
<!--End Section3-->
<!--Start Section4-->
<div class="benefits">
  <div class="container">
    <div class="row">
      <div class="col-md-6 img">
        <img src="assets/img/control.jpg">
      </div>
      <div class="col-md-6 info">
        <span class="icon"><i class="far fa-building"></i></span>
        <h2>Control your hiring process from start to finish</h2>
        <p>Inbox 2.0 is here! Enjoy a smooth and smart inbox where you can easily filter through your applicants and customize the recruitment stages based on your own hiring process.</p>
        <a href="signup-employeer.php" class="btn btn-primary btn-large"> Get Started Now</a>
      </div>
    </div>
  </div>
</div>
<!--End Section4-->
<!--Start Section5-->
<div class="features features-last">
  <div class="container">
    <div class="row">
      <div class="col-md-6 info">
        <span class="icon"><i class="fas fa-user-tie"></i></span>
        <h2>Go beyond CVs and profiles</h2>
        <p>Need to know more about applicants? Use our customizable Screening Questions and get to know them better, ask for work samples, and more.</p>	
        <a href="signup-employeer.php" class="btn btn-primary btn-large">Get Started Now</a>
      </div>
      <div class="col-md-6 img">
        <picture>
          <source media="(min-width: 992px)" srcset="assets/img/screening-questions.png">
          <source media="(max-width: 991px)" srcset="assets/img/screening-questions-mobile.png">
          <img src="assets/img/screening-questions-mobile.png">
        </picture>
      </div>
    </div>
  </div>
</div>
<!--End Section5-->
<?php include 'includes/footer.php'; ?>
