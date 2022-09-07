<?php

namespace Controller\Course;

use Service\Course\Course_Service;

include "./services/course.php";


class Course_Controller
{
    public static function getAllCourse()
    {
        $listCourse = Course_Service::findAllCourse();
        return ['status'=>1,'result'=>$listCourse];
    }
    public static function createCourse($name,$price)
    {
        $course = Course_Service::createCourse($name,$price);
        return ['status'=>1,'result'=>$course];
    }
}
