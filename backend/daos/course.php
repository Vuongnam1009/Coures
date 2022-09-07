<?php

namespace Dao\Course;

include './backend/models/course.php';

use Model\Course\Course_Model;

class Course_Dao
{
    public static function findAllCourse()
    {
        $listCourse = Course_Model::get();
        return $listCourse;
    }
    public static function findByName($name)
    {
        $course = Course_Model::find($name);
        return $course;
    }
    public static function findById($id)
    {
        $course = Course_Model::findById($id);
        return $course;
    }
    public static function createCourse($name, $price)
    {
        $course = Course_Model::creat($name, $price);
        return $course;
    }
    public static function updateCourse($id, $data)
    {
        $course = Course_Model::update($id, $data);
        return $course;
    }
    public static function deleteCourse($id)
    {
        $course = Course_Model::delete($id);
        return $course;
    }
}
