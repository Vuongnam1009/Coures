<?php
include './controllers/course.php';

use Controller\Course\Course_Controller;

// <!-- Lấy tất cả khóa học -->
function get()
{
    $courses = Course_Controller::getAllCourse();
    return $courses;
};

// $courses=get();

// while ($row = $courses['result'] -> fetch_assoc()){
//     echo $row['Name']."<br>";
// };
// // <!-- Thêm một Khóa học -->
function add($name,$price){
    $course=Course_Controller::createCourse($name,$price);
    echo $course['result'];

}
add('du',1000);
