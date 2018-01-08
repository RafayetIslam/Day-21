<?php
require_once 'vendor/autoload.php';
use App\classes\BlogUser;

?>



<a href="indexview.php.php">Add Blog</a>
<a href="showblog.php">View Blog</a>
<hr />

<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Blog Title</th>
        <th>Author Name</th>
        <th>Blog Description</th>
    </tr>
    <?php while ($blogs = mysqli_fetch_assoc($queryResult)){ ?>
        <tr>
            <td><?php echo $blogs['id'];?></td>
            <td><?php echo $blogs['cate'];?></td>
            <td><?php echo $blogs['email'];?></td>
            <td><?php echo $blogs['mobile'];?></td>
            <td>
                <a href=".php?id=<?php echo $students['id'];?>">Edit</a> ||
                <a href="?delete=true&id=<?php echo $students['id'];?>" onclick="return confirm('Are you sure to delete this')">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>













