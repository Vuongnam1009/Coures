<?php

namespace Controller\Course;

use Service\Course\Course_Service;

include "./services/course.php";


class Course_Controller
{
    public static function getAllCourse()
    {
        $listCourse = Course_Service::findAllCourse();
        return $listCourse;
    }
}
