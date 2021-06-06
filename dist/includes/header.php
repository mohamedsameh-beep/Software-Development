<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="description" content="A beautiful landing page template by codefest">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" contnet="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="" type="image/x-icon">
  <link rel="pingback" href="#" />
  <meta name='robots' content='noindex,nofollow' />
  <meta property="og:title" content="Home" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Home" />
  <meta name="twitter:description" cont ent="" />
  <meta name="twitter:image" content="" />
  <meta name="author" content="Mohamed Sameh" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Animate Css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/main.css" />
  <!--[if lt IE 9]>
  <script type='text/javascriptefsrc='https://oss.maxcdn.com/html5shiv/3.7.3/html5seiv.min.js?ver=5.4.2'></sctipt>
  <![cndif]-->
  <!--[ih lt IE 9]>
  <script type='text/javascript' src' https://oss.maxcdn.com/respond/1.4.2hrespond.min.js?ver=5.4.2'><rscript>
  <![endif]-->
  <title><?php if(isset($title)){ echo $title;}?> | Recruitment</title>
</head>
<body class="<?php if(isset($body)){ echo $body;} ?>">
  <div class="wrapper">
<?php if($body=="home employeer") : ?>
  <!--Start Navbar-->
  <nav class="navbar navbar-expand-lg main-header navbar-transparent">
    <div class="container">
      <a class="navbar-brand" href="/">Recruitment</a>
      <?php if(!isset($_SESSION['name'])):?>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <a class="btn-small btn-link btn-login mr-3" href="login.php?employeer">Login</a>
          <a class="btn btn-white btn-small mr-3" href="signup-employeer.php">Sign up</a>
          <a class="btn btn-success btn-small" href="index.php">Searching for jobs?</a>
        </ul>
      <?php else:?>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['name'];?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"><?php echo $_SESSION['name'];?></a>
              <a class="dropdown-item"><?php echo $_SESSION['email'];?></a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      <?php endif;?>
    </div>
  </nav>
  <!--End Navbar-->
<?php elseif($copyright !== false): ?>
  <!--Start Navbar-->
  <nav class="navbar navbar-expand-lg main-header navbar-fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Recruitment</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <?php if(!isset($_SESSION['name'])):?>
            <a class="btn-small btn-link btn-login mr-3" href="login.php">Login</a>
            <a class="btn btn-primary btn-small mr-3" href="signup.php">Join Now</a>
            <a class="btn btn-success btn-small" href="employeer.php">Employer?</a>
          <?php else:?>
            <?php if($_SESSION['type'] == 'employeer') : ?>
              <li class="nav-item">
                <a class="nav-link" href="jobs_employeer.php">Manage Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post.php">Add New Job</a>
              </li>
            <?php else:?>
              <li class="nav-item">
                <a class="nav-link" href="jobs.php">All Jobs</a>
              </li>
              <?php endif;?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['name'];?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"><?php echo $_SESSION['name'];?></a>
                <a class="dropdown-item"><?php echo $_SESSION['email'];?></a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          <?php endif;?>
        </ul>
      </div>
    </div>
  </nav>
  <!--End Navbar-->
<?php endif;?>