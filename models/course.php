<?php

namespace Model\Course;
class Course_Model
{ 
    public static function get()
    {   
      require './db/conect.php';

        $sql = "SELECT * FROM course ";
        // $sql = "INSERT INTO course (Name,price) VALUES ('html',1000)";
        $query = $conn -> query($sql);

        // lấy cái trả về;
       
        return $query;
    }
    public static function find($name){
      require './db/conect.php';
      $sql = "SELECT * FROM course WHERE Name = '$name'";
      $query = $conn -> query($sql);
     return $query;
    }
    public static function creat($name,$price){
      require './db/conect.php';

        $sql = "INSERT INTO course (Name,price) VALUES ('$name','$price')";
      $query = $conn -> query($sql);
        return "ok";
        
    }

};
