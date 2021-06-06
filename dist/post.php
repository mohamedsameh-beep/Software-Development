<?php 
  $body="new_post";
	$copyright = true;
  $title="Add New Job";
	include 'init.php';
?>
<div class="post__wrapper">
  <h1>Post New Job</h1>
  <div class="container">
    <div class="job__details">
      <h2>Job Details</h2>
      <div class="input first">
        <label for="">Job Title</label>
        <input type="text">
      </div>
      <div class="input">
        <label for="">Job Type</label>
        <input type="text">
      </div>
      <div class="input">
        <label for="">Job Category</label>
        <input type="text" placeholder="Select at least one job category">
      </div>
      <hr>
      <h2>Location</h2>
      <div class="input location">
        <label for="">Country</label>
        <input type="text">
      </div>
      <div class="input location">
        <label for="">City</label>
        <input type="text">
      </div>
      <div class="input location">
        <label for="">Area</label>
        <input type="text" placeholder="Select at least one job category">
      </div>
      <hr>
      <div class="input">
        <label for="">Career Level</label>
        <input type="text">
      </div>
      <div class="input inputs">
        <label for="">Years of Experience</label>
        <div><input type="text" placeholder="Min"> to <input type="text" placeholder="Max"></div>
      </div>
      <div class="input inputs">
        <label for="">Salary Range</label>
        <div><input type="text" placeholder="e.g. 8.000"> to <input type="text" placeholder="e.g. 12.000"></div>
      </div>
    </div>
    <div class="job__details">
      <h2>About The Job</h2>
      <div class="input">
        <label for="">Job Description</label>
        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="input">
        <label for="">Job Requirements</label>
        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
      </div>
    </div>
    <div class="inputs_btn">
      <button class="post__later">Save and post later</button>
      <button class="post__now">Post Now</button>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>