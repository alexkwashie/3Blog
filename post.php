<?php include 'config/config.php';?>
<?php include 'include/header.php';?>
<?php include 'libraries/database.php';?>
<?php include 'helper/fomat_helper.php';?>
<?php 

    $id= $_GET['id'];
  //Create DB Object
    $db = new Database();

    //Creat query
    $query = "SELECT * FROM posts WHERE id= ".$id;

    //Run query 
    $post = $db->select($query)->fetch_assoc();

    /* this is when you want to add oher things from database
    //Creat query
    $query = "SELECT * FROM catergories";

    //Run query 
    $categories = $db->select($query);
    */
?>


<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post['title'];?></h2>
            <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author'];?></a></p>

            <?php echo $post['body']; ?>
          
            
          </div><!-- /.blog-post --> 

<?php include 'include/footer.php';?>