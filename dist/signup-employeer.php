<?php 
$body="signup-employeer signup";
$title="Sign Up";
$copyright=false;
include 'init.php';
?>
<h1 class="logo">Create a Company Account to Start Hiring Now</h1>
<div class="form">
  <h5 class="mb-4">Contact Information</h5>
  <div class="inputs__form">
    <form action="">
      <div class="inputs row no-gutters">
        <div class="input pr-sm-2 col-12 col-sm-6">
          <label>First Name</label>
          <input type="text" placeholder="First Name" name="text" class="form-control">
        </div>
        <div class="input pl-sm-2 col-12 col-sm-6">
          <label>Last Name</label>
          <input type="text" placeholder="Last Name" name="text" class="form-control">
        </div>
      </div>
      <div class="input">
        <label>Your title</label>
        <input type="text" placeholder="eg. HR Manger, CEO, Recruitment Specialist" name="job_title" class="form-control">
      </div>
      <div class="input">
        <label>Mobile Number</label>
        <input type="text" name="mobile" class="form-control">
      </div>
      <div class="input">
        <label>Job category</label>
        <input type="text" placeholder="Select at least one job category" name="job_cat" class="form-control">
      </div>
      <hr>
      <h5 class="mb-4">Login Information</h5>
      <div class="input">
        <label>Buisness Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="input">
        <label>New Password</label>
        <div class="input-group">
          <input type="password" name="password" class="form-control">
          <div class="input-group-append show__pass">
            <span class="input-group-text"><i class="fas fa-eye"></i></span>
          </div>
        </div>
      </div>
      <div class="input">
        <label>Confirm Password</label>
        <input type="password" class="form-control">
      </div>
      <hr>
      <h5 class="mb-4">Company Basic Information</h5>
      <div class="input">
        <label>Company name</label>
        <input type="text" name="company_name" class="form-control">
      </div>
      <div class="input">
        <label>Company industry</label>
        <input type="text" name="company_industry" class="form-control">
      </div>
      <div class="input">
        <label>Company Phone</label>
        <input type="text" name="company_phone" class="form-control">
      </div>
      <div class="input">
        <label>Company website</label>
        <input type="text" name="company_website" class="form-control">
      </div>
      <div class="input">
        <label>Country</label>
        <input type="text" name="country" class="form-control" placeholder="Select Country">
      </div>
      <button type="submit">Start Hiring now</button>
    </form>
  </div>
  <div class="form__inf">
    <p class="terms">By signing up, you agree to our <a href="#">Terms and Conditions</a></p>
  </div>
</div>
<?php include 'includes/footer.php'; ?>