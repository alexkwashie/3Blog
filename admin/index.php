
<?php include 'include/header.php';?>

<?php

//Create database
$db = new Database;

//Create query
$query = "SELECT posts.*, categories.name FROM posts
            INNER JOIN categories 
            ON posts.category = categories.id";

//Run Query 
$post= $db->select($query);

?>

<!--Content Here-->
<table class="table table-striped ">
<tr>
    <th>Post ID#</th>
    <th>Post Title</th>
    <th>Categories</th>
    <th>Author</th>
    <th>Date</th>
</tr>



<?php while($row=$post->fetch_assoc()) :?>
<tr>
    <td><?php echo $row['id'];?></td>
    <td><a href="edit_post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['author'];?></td>
    <td><?php echo formatDate($row['date']);?></td>
    </tr>
<?php endwhile;?>


</table>


<table class="table table-striped">
<tr>
    <th>Category ID#</th>
    <th>Name</th>
</tr>

<tr>
    <td></td>
    <td></td> 
</tr>

</table>

<?php include 'include/footer.php';?>