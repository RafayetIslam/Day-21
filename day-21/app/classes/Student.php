<?php
namespace App\classes;

class Student
{

    private function dbConnection(){
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'bitm-sofiq-71';
        $link = mysqli_connect("localhost", "$userName", "$password", "$dbName");
        return $link;
    }

    public function saveStudentInfo($data){

        $sql= "INSERT INTO students (name, email, mobile) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
       if(mysqli_query(Student::dbConnection(), $sql)){
            $message = "Student info save successfully";
            return $message;
       }else{
           die('Query problem'.mysqli_error(Student::dbConnection()));
       }
    }



    public function getAllStudentInfo(){

        $sql= "SELECT * FROM students";
        if(mysqli_query(Student::dbConnection(), $sql)){
            $queryResult = (mysqli_query(Student::dbConnection(), $sql));
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }
    }


    public function getStudentInfoById($id){
        $sql= "SELECT * FROM students WHERE id= '$id' ";
        if(mysqli_query(Student::dbConnection(), $sql)){
            $queryResult = (mysqli_query(Student::dbConnection(), $sql));
            return $queryResult;
//            print_r($queryResult);
        }else{
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }

    }

    public function updateStudentInfo($data){
        $sql= "Update students SET name='$data[name]', email='$data[email]', mobile='$data[mobile]' WHERE id= '$data[id]'";
        if(mysqli_query(Student::dbConnection(), $sql)){
            //header('Location: view-student.php');
            $message = "Student info update successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }
    }


    public function deleteStudentInfo($id){
        $sql= "DELETE from students  WHERE id= '$id'";
        if(mysqli_query(Student::dbConnection(), $sql)){
            $message = "Student info delete successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }
    }

}