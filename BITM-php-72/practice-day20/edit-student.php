<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

$id = $_GET['id'];
$queryResult = Student::getStudentInfoById($id);
$student = mysqli_fetch_assoc($queryResult);
//echo '<pre>';
//print_r($student);
$message='';
if(isset($_POST['btn'])){
//        $student = new App\classes\Student();
    $message = Student::updateStudentInfo($_POST,$id);
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
            <th>Name</th>
            <td><input type="text" name="name" value="<?php echo $student['name'];?>" /></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $student['email'];?>" /></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile" value="<?php echo $student['mobile'];?>" /></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update" /></td>
        </tr>
    </table>
</form>









