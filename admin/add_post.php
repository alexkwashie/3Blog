<?php include 'include/header.php';?>

<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Post Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>
   
  <div class="form-group">
    <label for="exampleInputEmail1">Post Body</label>
    <textarea name="body"class="form-control" rows="3" placeholder="Enter Text"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Categories</label>
    <select name="category" class="form-control">
        <option>News</option>
        <option>Events</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="email" name="title" class="form-control" placeholder="Enter Title">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>

<?php include 'include/footer.php';?>