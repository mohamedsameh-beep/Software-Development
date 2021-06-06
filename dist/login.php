<?php
	$body = "login";
  $title="Login";
	$copyright = false;
	if (isset($_SESSION['name'])) {
		header('Location: index.php'); // Redirect To Home Page
	}
	include 'init.php';
	
	// Check If User Coming From HTTP Post Request

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_GET['employeer']) == 1) {
			$stmt = $con->prepare("SELECT ID, name, email, password FROM employer WHERE email = ? AND password = ? LIMIT 1");
			$email = $_POST['email'];
			$password = $_POST['password'];
			$stmt->execute(array($email, $password));
			$row = $stmt->fetch();
			$count = $stmt->rowCount();
			if ($count > 0) {
				$_SESSION['email'] = $row['email']; // Register Session ID
				$_SESSION['ID'] = $row['ID']; // Register Session ID
				$_SESSION['name'] = $row['name'];
				$_SESSION['type'] = 'employeer';
				header('Location: jobs_employeer.php'); // Redirect To Dashboard Page
				exit();
			}
		} else {
			$stmt = $con->prepare("SELECT ID, first_name, last_name, email, password FROM job_seeker WHERE email = ? AND password = ? LIMIT 1");
			$email = $_POST['email'];
			$password = $_POST['password'];
			$stmt->execute(array($email, $password));
			$row = $stmt->fetch();
			$count = $stmt->rowCount();
			if ($count > 0) {
				$_SESSION['email'] = $row['email']; // Register Session ID
				$_SESSION['ID'] = $row['ID']; // Register Session ID
				$_SESSION['name'] = $row['first_name'] .' '. $row['last_name'];
				$_SESSION['type'] = 'seeker';
				header('Location: jobs.php'); // Redirect To Dashboard Page
				exit();
			}
		}
	}

?>
<h1 class="logo"><a href="/">Recruitment</a></h1>
<div class="form">
	<h6>Welcome Back</h6>
	<div class='g-sign-in-button'>
		<div class=content-wrapper>
		<div class='logo-wrapper'>  
			<img src='https://developers.google.com/identity/images/g-logo.png'>
			</div>  
			<span class='text-container'> 
				<span>Sign in with Google</span>
			</span>
		</div>  
	</div>
	<div class="or__button">or</div>
	<div class="inputs__form">
		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
			<div class="input">
				<label>Email</label>
				<input placeholder="Email" name="email" class="form-control" type="email">
			</div>
			<div class="input">
				<label>Password</label>
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" class="form-control" autocomplete="new-password">
					<div class="input-group-append show__pass">
						<span class="input-group-text"><i class="fas fa-eye"></i></span>
					</div>
				</div>
			</div>
			<button type="submit">Sign in</button>
		</form>
	</div>
	<div class="form__inf">
		<a class="forget_password" href="#">Forgot password?</a>
		<p class="join__now">New to Recruitment? <a href="signup.php">Join now</a></p>
	</div>
</div>
<?php include 'includes/footer.php';?>