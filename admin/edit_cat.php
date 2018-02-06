<?php include 'include/header.php';?>
<form method="post" action="edit_cat.php">
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" placeholder="Enter Category">
  </div>
<div>
  <input name="submit" type="submit" class="btn btn-default" value="submit">

  <a href="index.php" class="btn btn-primary">Cancel</a> 

  <input name="Delete" type="submit" class="btn btn-danger" value="Delete">
</form>
</div>
<br>

<?php include 'include/footer.php';?>