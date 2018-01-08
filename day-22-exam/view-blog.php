<?php
use App\classes\Student;

require_once 'vendor/autoload.php';
use App\classes\Blog;
//$message =' ';

    $queryResult = Blog::viewBlogData();



?>

<hr/>
<a href="add-blog.php">Add Blog</a>
<a href="view-blog.php">View Blog</a>
<!--<h1 style="color: green">--><?php // echo $message ?><!--</h1>-->
<hr/>


<form action="" method="post">
    <table border="1" width="1000" style="float: inherit;" >
        <tr>
            <th>ID</th>
            <th>Blog Title</th>
            <th>Blog Author</th>
            <th>Blog Description </th>
            <th>Status</th>
            <th>Action</th>
        </tr>

      <?php while($blog = mysqli_fetch_assoc($queryResult)) { ?>
        <tr>
            <td><?php echo $blog['id']; ?></td>
            <td><?php echo $blog['title']; ?></td>
            <td><?php echo $blog['author']; ?></td>
            <td><?php echo $blog['description']; ?></td>
            <td><?php echo $blog['status']; ?></td>
            <td>
                <a href="edit-blog.php?id=<?php echo $blog ['id']; ?>"> Edit ||</a>
                <a href="?delete=true&id=<?php echo $blog['id'];?>"
                   onclick="return confirm('Are you sure to delete this!!');">Delete</a>
            </td>
        </tr>

<?php } ?>
    </table>
</form>

