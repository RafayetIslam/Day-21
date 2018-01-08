<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;
    $message='';
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $message = Student::deleteStudentInfo($id);
    }

    $queryResult = Student::getAllStudentInfo();
//    while ($students = mysqli_fetch_assoc($queryResult)){
//        echo '<pre>';
//        print_r($students);
//    }




?>






<hr />
<a href="index.php">Add Student</a>
<a href="view-student.php">View Student</a>
<hr />
<h1><?php echo $message;?></h1>
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
            <a href="edit-student.php?id=<?php echo $students['id'];?>">Edit</a> ||
            <a href="?delete=true&id=<?php echo $students['id'];?>" onclick="return confirm('Are you sure to delete this')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>












