<?php
include 'controllers/course.php';

use Controller\Course\Course_Controller;

// <!-- Lấy tất cả khóa học -->
function get()
{
    $courses = Course_Controller::getAllCourse();
    return $courses;
};

// <!-- Lấy khóa học theo id -->
function getCourseById($id)
{
    $course = Course_Controller::getCourseById($id);
    return $course;
}

// // <!-- Thêm một Khóa học -->
function add($name, $price)
{
    $res = Course_Controller::createCourse($name, $price);
    return $res;
}

//  Sửa khóa học
function update($id, $data)
{
    $res = Course_Controller::updateCourse($id, $data);
    return $res;
}

// Xóa khóa học

function delete($id)
{
    $res = Course_Controller::deleteCourse($id);
    return $res;
}
