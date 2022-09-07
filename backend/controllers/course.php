<?php

namespace Controller\Course;

use Service\Course\Course_Service;

include "./backend/services/course.php";


class Course_Controller
{
    public static function getAllCourse()
    {
        $listCourse = Course_Service::findAllCourse();
        return [
            'status' => 1,
            'result' => $listCourse
        ];
    }
    public static function getCourseById($id)
    {
        $course = Course_Service::findCourseById($id);
        return [
            'status' => 1,
            'result' => $course
        ];
    }
    public static function createCourse($name, $price)
    {
        $status = Course_Service::createCourse($name, $price);
        return [
            'status' => $status,
        ];
    }
    public static function updateCourse($id, $data)
    {
        $status = Course_Service::updateCourse($id, $data);
        return [
            'status' => $status,
        ];
    }
    public static function deleteCourse($id)
    {
        $status = Course_Service::deleteCourse($id);
        return [
            'status' => $status,
        ];
    }
}
