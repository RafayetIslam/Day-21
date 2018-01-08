<?php

namespace App\classes;
class BlogUser
{
    public function saveBlogInfo($data){
        $link = mysqli_connect('localhost', 'root','','blog72');

        $sql = "INSERT INTO blogs (category_name,blog_title,author_name,blog_description,publication_status) VALUES ('$data[category_name]','$data[blog_title]','$data[author_name]','$data[blog_description]','$data[status]')";
        if(mysqli_query($link,$sql)){
            $message =  'Blogs information save successfully';
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
}