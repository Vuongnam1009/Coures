<?php

namespace Service\Course;

include "./daos/course.php";

use Dao\Course\Course_Dao;

class Course_Service
{
    public static function findAllCourse()
    {
        $listCourse = Course_Dao::findAllCourse();
        return $listCourse;
    }
    public static function createCourse($name,$price){
        $courseExsit= Course_Dao::findByName($name);
        If ($courseExsit->num_rows>0){return "đã tồn tại";
        }
        else
        { 

        $course=Course_Dao::createCourse($name,$price);
        return $course;
    }
        
    }
}
