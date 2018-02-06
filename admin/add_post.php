<?php include 'include/header.php';?>

<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>
   
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" rows="3" placeholder="Enter Text" noresize></textarea>
  </div>

  <div class="form-group">
    <label>Categories</label>
    <select name="category" class="form-control">
        <option>News</option>
        <option>Events</option>
    </select>
  </div>

  <div class="form-group">
    <label>Author</label>
    <input type="text" name="Author" class="form-control" placeholder="Enter Author Name">
  </div>

  <div class="form-group">
    <label>Tags</label>
    <input type="text" name="tags " class="form-control" placeholder="Enter Tags">
  </div>

<div>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>

  <a href="index.php" class="btn btn-primary">Cancel</a> 
  </div>
  <br>
</form>

<?php include 'include/footer.php';?>