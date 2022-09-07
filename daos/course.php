<?php

namespace Dao\Course;
include './models/course.php';
use Model\Course\Course_Model;
class Course_Dao
{
    public static function findAllCourse()
    {
        $listCourse=Course_Model::find('html');
        return $listCourse;
    }
    public static function findByName($name){
        $course=Course_Model::find($name);
        return $course;
    }
    public Static function createCourse($name,$price){
        $course=Course_Model::creat($name,$price);
        return $course;
    }
}
