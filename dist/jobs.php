<?php 
  $body="jobs";
  $title="Jobs";
	$copyright = true;
	include 'init.php';
?>
<!--Start header-->
<div class="header">
  <div class="container">
    <h1>Jobs in Egypt</h1>
    <div class="search">
      <div class="form">
        <form method="GET" action="">
          <div class="search-bar">
            <span class="search-icon icn-search-thin"><i class="fas fa-search"></i></span> 
            <input type="search" name="q" class="search-bar-input" aria-label="Search jobs input" placeholder="Search Jobs (e.g. Senior PHP developer)" value="">
          </div>
          <button class="btn btn-primary search-btn" type="submit"><span class="large">Search</span></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--End header-->
<!--Start Jobs-->
<div class="container">
  <div class="row jobs-row">
    <div class="sidebar">
      <div class="block first">
        <h6>Filters</h6>
        <span>0 filters selected</span>
      </div>
      <div class="block">
        <h6>Quick Filters</h6>
        <div class="inputs">
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox1" type="checkbox" value="value2" checked>
              <label for="checkbox1">Work from home (392)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox2" type="checkbox" value="value2" checked>
              <label for="checkbox2">Freelance / Project (152)</label>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <h6 class="arrow">Country</h6>
        <div class="inputs">
          <div class="input mb-3">
            <input type="text" class="form-control" placeholder="Country">
          </div>
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="value2" checked>
              <label for="checkbox3">All (8146)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox4" type="checkbox" value="value2" checked>
              <label for="checkbox4">Egypt (8012)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox5" type="checkbox" value="value2" checked>
              <label for="checkbox5">Saudi Arabia (65)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox6" type="checkbox" value="value2" checked>
              <label for="checkbox6">United States (4)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox7" type="checkbox" value="value2" checked>
              <label for="checkbox7">Jordan (3)</label>
            </div>
            <button class="show_more">Show more</button>
          </div>
        </div>
      </div>
      <div class="block">
        <h6 class="arrow">City</h6>
        <div class="inputs">
          <div class="input mb-3">
            <input type="text" class="form-control" placeholder="City">
          </div>
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="value2" checked>
              <label for="checkbox3">All (8146)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox4" type="checkbox" value="value2" checked>
              <label for="checkbox4">Cairo (5371)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox5" type="checkbox" value="value2" checked>
              <label for="checkbox5">Giza (1634)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox6" type="checkbox" value="value2" checked>
              <label for="checkbox6">Alexandria (531)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox7" type="checkbox" value="value2" checked>
              <label for="checkbox7">Sharqia (125)</label>
            </div>
            <button class="show_more">Show more</button>
          </div>
        </div>
      </div>
      <div class="block">
        <h6 class="arrow">Area</h6>
        <div class="inputs">
          <div class="input mb-3">
            <input type="text" class="form-control" placeholder="Area">
          </div>
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="value2" checked>
              <label for="checkbox3">All (8146)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox4" type="checkbox" value="value2" checked>
              <label for="checkbox4">New Cairo (984)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox5" type="checkbox" value="value2" checked>
              <label for="checkbox5">Maadi (843)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox6" type="checkbox" value="value2" checked>
              <label for="checkbox6">Nasr City (779)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox7" type="checkbox" value="value2" checked>
              <label for="checkbox7">Heliopolis (576)</label>
            </div>
            <button class="show_more">Show more</button>
          </div>
        </div>
      </div>
      <div class="block">
        <h6 class="arrow">Career Level</h6>
        <div class="inputs">
          <div class="input mb-3">
            <input type="text" class="form-control" placeholder="Career Level">
          </div>
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="value2" checked>
              <label for="checkbox3">All (8146)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox4" type="checkbox" value="value2" checked>
              <label for="checkbox4">Student (42)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox5" type="checkbox" value="value2" checked>
              <label for="checkbox5">Entry Level (2326)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox6" type="checkbox" value="value2" checked>
              <label for="checkbox6">Experienced (4315)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox7" type="checkbox" value="value2" checked>
              <label for="checkbox7">Manager (1394)</label>
            </div>
            <button class="show_more">Show more</button>
          </div>
        </div>
      </div>
      <div class="block">
        <h6 class="arrow">Job Category</h6>
        <div class="inputs">
          <div class="input mb-3">
            <input type="text" class="form-control" placeholder="Job Category">
          </div>
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="value2" checked>
              <label for="checkbox3">All (8146)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox4" type="checkbox" value="value2" checked>
              <label for="checkbox4">IT/Software Development (1720)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox5" type="checkbox" value="value2" checked>
              <label for="checkbox5">Sales/Retail (1655)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox6" type="checkbox" value="value2" checked>
              <label for="checkbox6">Engineering - Telecom/Technology (1595)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox7" type="checkbox" value="value2" checked>
              <label for="checkbox7">Customer Service/Support (948)</label>
            </div>
            <button class="show_more">Show more</button>
          </div>
        </div>
      </div>
      <div class="block">
        <h6 class="arrow">Job Type</h6>
        <div class="inputs">
          <div class="input mb-3">
            <input type="text" class="form-control" placeholder="Job Type">
          </div>
          <div class="checkbox__inputs">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="value2" checked>
              <label for="checkbox3">All (8146)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox4" type="checkbox" value="value2" checked>
              <label for="checkbox4">Full time (7833)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox5" type="checkbox" value="value2" checked>
              <label for="checkbox5">Work from home (392)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox6" type="checkbox" value="value2" checked>
              <label for="checkbox6">Part time (236)</label>
            </div>
            <div class="checkbox">
              <input id="checkbox7" type="checkbox" value="value2" checked>
              <label for="checkbox7">Freelance / Project (152)</label>
            </div>
            <button class="show_more">Show more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="posts">
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
      <div class="post">
        <div class="img">
          <img src="assets/img/post.jpg" alt="">
        </div>
        <div class="inf1">
          <h2>
            <a href="job.php">Senior UI/UX Designer</a>
          </h2>
          <div class="location">
            evntoo Obour City, Cairo, Egypt
          </div>
          <div class="date">
            3 hours ago
          </div>
        </div>
        <div class="inf2">
          <div class="tag">
            <a href="#">
              <span>Full time</span>
            </a>
          </div>
          <p>Experienced · 2 - 4 Yrs of Exp · UI · Information Technology (IT) · UX · Design · UI/UX · UX Design · Illustrator · Adobe XD · Adobe · Figma</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Jobs-->
<?php include 'includes/footer.php'; ?>
