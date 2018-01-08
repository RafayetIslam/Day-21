<?php
namespace App\classes;

class Blog
{
 private function dbConnection(){
     $hostName = 'localhost';
     $userName = 'root';
     $password = '';
     $bdName = 'day-22-exam';

     $link= mysqli_connect("$hostName", "$userName", "$password", "$bdName");

     return $link;
 }

    public function saveBlogData($data){
       $sql = "INSERT INTO blogs(title, author, description, status)
              VALUES('$data[title]', '$data[author]','$data[description]', '$data[status]') ";
        if(mysqli_query(Blog::dbConnection(), $sql)){
            $message = "Blog data save successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error(Blog::dbConnection()));
        }
    }

    public function viewBlogData(){
        $sql = "SELECT * from blogs ";
        if(mysqli_query(Blog::dbConnection(), $sql)){
            $queryResult = (mysqli_query(Blog::dbConnection(), $sql));
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Blog::dbConnection()));
        }
    }

    public function getBlogInfoById($id){
        $sql = "SELECT * from blogs WHERE id= '$id' ";
        if(mysqli_query(Blog::dbConnection(), $sql)){
            $queryResult = mysqli_query(Blog::dbConnection(), $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Blog::dbConnection()));
        }
    }
}