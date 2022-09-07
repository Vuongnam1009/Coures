<?php
require './backend/index.php';
session_start();
if (isset($_POST['submit'])) {
    $course_name = $_POST['course_name'];
    $course_price = $_POST['course_price'];
    // VALIDATE FORM
    if (empty($course_name)) {
        $_SESSION['error'] = 'Vui Lòng nhập tên khóa học';
        header('location:index.php?page=course/create');
        die;
    }
    $data = add($course_name, $course_price);
    if ($data['status']) {
        $_SESSION['success'] = 'Tạo khóa học thành công';
        header('location:index.php');
    } else {
        $_SESSION['error'] = 'Khóa học đã tồn tại';
        header('location:index.php?page=course/create');
        die;
    }
}

?>
<div class="card-body">
    <form method="POST" enctype="multipart/form-data">
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p style=color:red>' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="course_price" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary" name="submit" type="submit"> ADD </button>
    </form>
</div>