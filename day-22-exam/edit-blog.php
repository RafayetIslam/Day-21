<?php
use App\classes\Student;

require_once 'vendor/autoload.php';
use App\classes\Blog;
$message =' ';
$id = $_GET['id'];
$queryResult = Blog::getBlogInfoById($id);
$blog = mysqli_fetch_assoc($queryResult);

?>

<hr/>
<a href="add-blog.php">Add Blog</a>
<a href="view-blog.php">View Blog</a>
<h1 style="color: green"><?php  echo $message ?></h1>
<hr/>


<form action="" method="post">
    <table>
        <tr>
            <th> Blog Title</th>
            <td><input type="text" name="title"  value="<?php echo $blog['title']; ?>"> </td>
            <td><input type="hidden" name="title"  value="<?php echo $blog['id']; ?>"> </td>
        </tr>

        <tr>
            <th>Author Name</th>
            <td><input type="text" name="author" value="<?php echo $blog['author']; ?>"/> </td>
        </tr>

        <tr>
            <th>Blog Description</th>
            <td><input type="text" name="description"  value="<?php echo $blog['description']; ?>"/> </td>
        </tr>

        <tr>
            <th>Blog Status</th>
            <td><input type="radio" name="status"  value="<?php echo $blog['status']; ?>"> published
                <input type="radio" name="status"   value="<?php echo $blog['status']; ?>"> Unpublished
            </td>
        </tr>

        <tr>
            <th> </th>
            <td><input type="submit" name="btn"  value="Update"/></td>
        </tr>


    </table>
</form>

