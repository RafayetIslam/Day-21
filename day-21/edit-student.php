<?php
require_once 'vendor/autoload.php';
use App\classes\Student;


$id = $_GET['id'];
$queryResult = Student::getStudentInfoById($id);
$student = mysqli_fetch_assoc($queryResult);




$message = '';
if (isset($_POST['btn'])){
    $message =  Student::updateStudentInfo($_POST);
}


?>





<hr/>
<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>
<h1 style="color: green"><?php  echo $message ?></h1>
<hr/>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td>
                <input type="text" name="name" required="1" value="<?php echo $student['name']; ?>" >
                <input type="hidden" name="id" required="1" value="<?php echo $student['id']; ?>" >
            </td>
        </tr>

        <tr>
            <th>E-mail</th>
            <td> <input type="email" name="email" required="1" value="<?php echo $student['email']; ?>" ></td>
        </tr>

        <tr>
            <th>Mobile</th>
            <td> <input type="text" name="mobile" required="1"  value="<?php echo $student['mobile']; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td> <input type="submit" name="btn" value="Update" ></td>
        </tr>
    </table>
</form>


