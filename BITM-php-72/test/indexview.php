<?php
require_once 'vendor/autoload.php';
use App\classes\BlogUser;
$message='';
if(isset($_POST['btn'])) {
    $message = BlogUser::saveBlogInfo($_POST);
}
?>
<h1><?php echo $message;?></h1>
<hr />
<a href="index.php">Add Student</a>
<a href="view-student.php">View Student</a>
<hr />
<form action="" method="post">
    <table>
        <tr>
            <th>Category Name</th>
            <td><input type="text" name="category_name" /></td>
        </tr>
        <tr>
            <th>Blog Title</th>
            <td><input type="text" name="blog_title" /></td>
        </tr>
        <tr>
            <th>Author Name</th>
            <td><input type="text" name="author_name" /></td>
        </tr>
        <tr>
            <th>Blog Description</th>
            <td><textarea name="blog_description" cols="22"></textarea></td>
        </tr>
        <tr>
            <th>Publication Status</th>
            <td>
                <input type="radio" name="status" value="1"/>Published
                <input type="radio" name="status" value="0"/>Unpublished
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Save"/></td>
        </tr>
    </table>
</form>
