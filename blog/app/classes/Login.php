<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/8/2018
 * Time: 4:10 PM
 */

namespace App\classes;
use App\classes\Database;


class Login
{
    public function adminLoginCheck($data){
        $email = $data['email'];
        $password = MD5($data['password']);
        $sql="SELECT *FROM users WHERE email='$email' AND password='$password'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            $user = mysqli_fetch_assoc($queryResult);
            //echo '<pre>';
            //print_r($user);
            if($user){
                header('Location: dashboard.php');
            }else{
                $message = "Incorrect Password or email";
                return $message;
            }

        }else{

         die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

}