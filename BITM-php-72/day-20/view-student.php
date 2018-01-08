<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;
    $queryResult = Student::getAllStudentInfo();
//    while ($students = mysqli_fetch_assoc($queryResult)){
//        echo '<pre>';
//        print_r($students);
//    }

if (isset($_POST['btn'])){
 Student::saveStudentInfo($_POST);
}
?>






<hr />
<a href="index.php">Add Student</a>
<a href="view-student.php">View Student</a>
<hr />

<table border="1" width="700">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php while ($students = mysqli_fetch_assoc($queryResult)){ ?>
    <tr>
        <td><?php echo $students['id'];?></td>
        <td><?php echo $students['name'];?></td>
        <td><?php echo $students['email'];?></td>
        <td><?php echo $students['mobile'];?></td>
        <td>
            <a href="edit-student.php? id=<?php echo $students['id'];?>">Edit</a> ||
            <a href="">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>












