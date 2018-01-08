<?php
use App\classes\Student;

require_once 'vendor/autoload.php';
use App\classes\Blog;
$message =' ';
if(isset($_POST['btn'])){
    $message = Blog::saveBlogData($_POST);
}


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
                <td><input type="text" name="title" required="1"> </td>
        </tr>

        <tr>
            <th>Author Name</th>
            <td><input type="text" name="author" required="1"/> </td>
        </tr>

        <tr>
            <th>Blog Description</th>
            <td><input type="text" name="description" required="1"/> </td>
        </tr>

        <tr>
            <th>Blog Status</th>
            <td><input type="radio" name="status" value="1" required="1"/> published
            <input type="radio" name="status" value="1" required="1"/> Unpublished
            </td>
        </tr>

        <tr>
            <th> </th>
            <td><input type="submit" name="btn"  value="submit"/></td>
        </tr>


    </table>
</form>
