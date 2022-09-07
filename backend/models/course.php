<?php

namespace Model\Course;

class Course_Model
{
    public static function get()
    {
        require './backend/db/conect.php';
        $sql = "SELECT * FROM courses ";
        $query = $conn->query($sql);
        return $query;
    }
    public static function find($name)
    {
        require './backend/db/conect.php';
        $sql = "SELECT * FROM courses WHERE course_name = '$name'";
        $query = $conn->query($sql);
        return $query;
    }
    public static function findById($id)
    {
        require './backend/db/conect.php';
        $sql = "SELECT * FROM courses WHERE id = '$id'";
        $query = $conn->query($sql);
        return $query;
    }
    public static function creat($name, $price)
    {
        require './backend/db/conect.php';
        $sql = "INSERT INTO courses (course_name,price) VALUES ('$name','$price')";
        $query = $conn->query($sql);
        return 1;
    }
    public static function update($id, $data)
    {
        $course_name = $data['course_name'];
        $course_price = $data['course_price'];
        require './backend/db/conect.php';
        $sql = "UPDATE courses SET course_name = '$course_name', price = '$course_price' WHERE id = '$id'";
        $query = $conn->query($sql);
        return 1;
    }
    public static function delete($id)
    {
        require './backend/db/conect.php';
        $sql = "DELETE FROM courses WHERE id = '$id'";
        $query = $conn->query($sql);
        return 1;
    }
};
