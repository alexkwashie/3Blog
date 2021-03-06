
<?php 
  //Create DB Object
    $db = new Database();

    //Creat query
    $query = "SELECT * FROM posts";

    //Run query
    $post = $db->select($query);


  //Creat query
  $query = "SELECT * FROM categories";

  //Run query
  $categories = $db->select($query);

?>

</div>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
            
            <?php if($categories) : ?>
            <ol class="list-unstyled">

            <?php while($row = $categories->fetch_assoc()) : ?> 
              <li><a href="#"><?php echo $row['name']; ?></a></li>

            <?php endwhile ?>
              
            </ol>
            <?php else : ?>
                <p>There are no post</p>
            <?php endif; ?>

          </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>PhpBlog <a href="http://getbootstrap.com">Php7</a> by <a href="https://twitter.com/mdo">@alexkwashie</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>