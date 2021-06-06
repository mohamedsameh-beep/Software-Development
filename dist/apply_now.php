<?php 
  $body="apply";
	$copyright = true;
  $title="Complete your info";
	include 'init.php';
?>
<div class="form__wrapper">
  <h1 class="logo">Complete your Profile</h1>
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
          <label>Mobile Number</label>
          <input type="text" name="mobile" class="form-control">
        </div>
        <hr>
        <h5 class="mb-4">Your Location</h5>
        <div class="input">
          <label>Country</label>
          <input type="text" name="country" class="form-control">
        </div>
        <div class="input">
          <label>City</label>
          <input type="text" name="city" class="form-control">
        </div>
        <div class="input">
          <label>Your Postal Code</label>
          <input type="text" name="city" class="form-control">
        </div>
        <hr>
        <h5 class="mb-4">Experience Aand Education</h5>
        <div class="input">
          <label>How many years of experience do you have?</label>
          <input type="text" name="years" class="form-control">
        </div>
        <div class="input">
          <label>What is your current career level?</label>
          <input type="text" name="career" class="form-control">
        </div>
        <div class="input">
          <label>What's your current educational level? -If you are currently studying, select your expected degree.</label>
          <input type="text" name="education" class="form-control">
        </div>
        <div class="input">
          <label for="">What skills, tools, technologies and fields of expertise do you have?— Add up to 30</label>
          <input type="text"> 
        </div>
        <hr>
        <div class="input">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="uploadCv">
              <label class="custom-file-label" for="uploadCv">Upload CV</label>
            </div>
          </div>
        </div>
        <button type="submit">Save Changes</button>
      </form>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
