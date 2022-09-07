<?php

namespace Service\Course;

include "./backend/daos/course.php";

use Dao\Course\Course_Dao;

class Course_Service
{
    public static function findCourseById($id)
    {
        $course = Course_Dao::findById($id);
        return $course;
    }
    public static function findAllCourse()
    {
        $listCourse = Course_Dao::findAllCourse();
        return $listCourse;
    }
    public static function createCourse($name, $price)
    {
        $courseExsit = Course_Dao::findByName($name);
        if ($courseExsit->num_rows > 0) {
            return 0;
        } else {
            $course = Course_Dao::createCourse($name, $price);
            return $course;
        }
    }
    public static function updateCourse($id, $data)
    {
        $courseExsit = Course_Dao::findById($id);
        if ($courseExsit->num_rows > 0) {
            $course = Course_Dao::updateCourse($id, $data);
            return $course;
        } else {
            return 0;
        }
    }
    public static function deleteCourse($id)
    {
        $course = Course_Dao::deleteCourse($id);
        return $course;
    }
}
