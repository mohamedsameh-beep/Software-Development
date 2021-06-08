<?php 
  $body='signup';
  $title="Sign Up";
  $copyright=false;
	include 'init.php';
  // Check If User Coming From HTTP Post Request
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formErrors = array();
    $first_name 	= $_POST['first_name'];
    $last_name 	= $_POST['last_name'];
    $password 		= $_POST['password'];
    $email 		= $_POST['email'];
    if (isset($email)) {
      $filterdEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
      if (filter_var($filterdEmail, FILTER_VALIDATE_EMAIL) != true) {
        $formErrors[] = 'This Email Is Not Valid';
      }
    }
    // Check If There's No Error Proceed The User Add
    if (empty($formErrors)) {
      $statement = $con->prepare("SELECT * FROM job_seeker WHERE email = ?");
      $statement->execute(array($email));
      $count = $statement->rowCount();
      if ($count == 1) {
        $formErrors[] = 'Sorry This User Is Exists';
      } else {
        // Insert Userinfo In Database
        $stmt = $con->prepare("INSERT INTO 
                    job_seeker(first_name, last_name, password, email)
                  VALUES(:zfname, :zlname, :zpass, :zmail)");
        $stmt->execute(array(
          'zfname' => $first_name,
          'zlname' => $last_name,
          'zpass' => $password,
          'zmail' => $email
        ));
        // Echo Success Message
        $succesMsg = 'Congrats You Are Now Registerd User';
        $_SESSION['email'] = $email; // Register Session email
				$_SESSION['name'] = $first_name .' '. $last_name;
				$_SESSION['type'] = 'seeker';
				header('Location: jobs.php'); // Redirect To Dashboard Page
				exit();
      }
    }
	}
  ?>
<h1 class="logo">Find the Best Jobs in Egypt</h1>
<div class="form">
  <h6>Sign Up and Start Applying For Jobs</h6>
  <div class='g-sign-in-button'>
    <div class=content-wrapper>
    <div class='logo-wrapper'>  
      <img src='https://developers.google.com/identity/images/g-logo.png'>
      </div>  
      <span class='text-container'> 
        <span>Sign up with Google</span>
      </span>
    </div>  
  </div>
  <div class="or__button">or</div>
  <div class="inputs__form">
		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
      <div class="inputs row no-gutters">
        <div class="input pr-sm-2 col-12 col-sm-6">
          <label>First Name</label>
          <input placeholder="First Name" name="first_name" class="form-control" type="text" >
        </div>
        <div class="input pl-sm-2 col-12 col-sm-6">
          <label>Last Name</label>
          <input placeholder="Last Name" name="last_name" class="form-control" type="text" >
        </div>
      </div>
      <div class="input">
        <label>Email</label>
        <input placeholder="Email" name="email" class="form-control" type="email" >
      </div>
      <div class="input">
        <label>Password</label>
        <div class="input-group">
          <input type="password" placeholder="Password" name="password" class="form-control">
          <div class="input-group-append show__pass">
            <span class="input-group-text"><i class="fas fa-eye"></i></span>
          </div>
        </div>
      </div>
      <button type="submit" name="signup">Sign up</button>
    </form>
  </div>
  <div class="form__inf">
    <p class="terms">By signing up, you agree to our <a href="#">Terms and Conditions</a></p>
    <p class="join__now">Already on Recruitment? <a href="login.php">Sign in</a></p>
  </div>
</div>
<?php if (isset($succesMsg) || !empty($formErrors)): ?>
  <div class="the-errors text-center">
    <?php 
      if (!empty($formErrors)) {
        foreach ($formErrors as $error) {
          echo '<div class="msg error">' . $error . '</div>';
        }
      }
      if (isset($succesMsg)) {
        echo '<div class="msg success">' . $succesMsg . '</div>';
      }
    ?>
  </div>
<?php endif;?>
<?php include 'includes/footer.php'; ?>
