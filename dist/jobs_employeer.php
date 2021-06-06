<?php 
  $body="post";
  $title="Posts";
	$copyright = true;
	include 'init.php';
?>
<div class="post__wrapper">
  <div class="container">
    <div class="block_mange_posts">
      <h2>Manage Posts</h2>
      <div class="block_btn">
        <a href="post.php">
          <span>Add New Post</span>
          <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
        </a>
      </div>
    </div>
    <div class="block">
      <img src="https://static.wuzzuf.net/eb0129b39883ddc6323481b51d4a2b8c.svg">
      <p> You haven't posted any posts yet </p>
      <a href="post.php">
        <span>Add New Post</span>
        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
      </a>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>