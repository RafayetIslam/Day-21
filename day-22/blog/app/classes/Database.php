<?php

namespace App\classes;


class Database
{
  public function dbConnection(){
      $hostName = 'localhost';
      $userName = 'root';
      $password = '';
      $bdName = 'blog';
      $link = mysqli_connect($hostName, $userName,$password, $bdName);
      return $link;

  }
}