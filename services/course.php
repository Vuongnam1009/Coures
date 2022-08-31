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
}
