<?php include 'config/config.php';?>
<?php include 'include/header.php';?>
<?php include 'libraries/database.php';?>
<?php 
  //Create DB Object
    $db = new Database();

    //Creat query
    $query = "SELECT * FROM posts";

    //Run query 
    $post = $db->select($query);

?>
<?php if($post) : ?>
  <?php while($row = $post->fetch_assoc()) : ?>

<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
           
            <p>
            Fundamentals are very important, they are the building blocks of anything. No matter what you want to learn, you cannot just simply jump half way in between, but instead you must start at the very beginning to help understand how it came into being.The same ideology works with computer programming and web development as well. Understanding the basics of programming and development will help build a better understanding of the subject and will allow you to mold it to your particular needs and wants.
            </p>
            
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          
            
          </div><!-- /.blog-post -->
          <?php endwhile; ?>

<?php else : ?>
    <p>There are no Posts</p>

<?php endif; ?>

<?php include 'include/footer.php';?>