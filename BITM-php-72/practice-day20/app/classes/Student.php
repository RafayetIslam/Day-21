<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/3/2018
 * Time: 2:19 PM
 */

namespace App\classes;


class Student
{
    public function saveStudentInfo($data){
//        echo '<pre>';
//        print_r($data);
        $link = mysqli_connect('localhost', 'root','','jamal');

        $sql = "INSERT INTO students (name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query($link,$sql)){
            $message =  'Students information save successfully';
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost', 'root','','jamal');
        $sql = "SELECT * FROM students";
        if(mysqli_query($link,$sql)){
            $queryResult =  mysqli_query($link,$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function getStudentInfoById($id){
        $link = mysqli_connect('localhost', 'root','','jamal');
        $sql = "SELECT * FROM students WHERE id = '$id'";
        if(mysqli_query($link,$sql)){
            $queryResult =  mysqli_query($link,$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function updateStudentInfo($data,$id){
        $link = mysqli_connect('localhost', 'root','','jamal');
        $sql = "UPDATE students SET name = '$data[name]', email = '$data[email]', mobile = '$data[mobile]' WHERE id = '$id'";
        if(mysqli_query($link,$sql)){
            header('Location:view-student.php');
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function deleteStudentInfo($id){
        $link = mysqli_connect('localhost', 'root','','jamal');
        $sql = "DELETE FROM students WHERE id = '$id' ";
        if(mysqli_query($link,$sql)){
            $message = "Student info delete success";
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
}