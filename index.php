<?php include 'config/config.php';?>
<?php include 'libraries/database.php';?>
<?php include 'include/header.php';?>
<?php include 'helper/fomat_helper.php';?>
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

<?php if($post) : ?>
  <?php while($row = $post->fetch_assoc()) : ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author'];?></a></p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>

            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
           
            <?php echo shortenText($row['body']); ?>
          
            <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']);?>">Read More</a>


            
          </div><!-- /.blog-post -->
<?php endwhile; ?>

<?php else : ?>
    <p>There are no Posts</p>

<?php endif; ?>

          <?php include 'include/footer.php';?>
        