<?php
include './controllers/course.php';

use Controller\Course\Course_Controller;

// <!-- Lấy tất cả khóa học -->
function get()
{
    $courses = Course_Controller::getAllCourse();
    echo $courses;
};

get();



// <!-- Thêm một Khóa học -->