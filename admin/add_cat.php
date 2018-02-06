
<?php include 'include/header.php';?>
<form method="post" action="add_cat.php">
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" placeholder="Enter Category">
  </div>
<div>
  <button name="submit" type="submit" class="btn btn-default">Submit</button>

  <a href="index.php" class="btn btn-primary">Cancel</a>
</form>
</div>
<br>

<?php include 'include/footer.php';?>