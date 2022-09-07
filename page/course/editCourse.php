<!-- copy file creat -->
<?php
session_start();
require './backend/index.php';
$id = $_GET['id'];
$data = getCourseById($id);
if ($data['status']) {
    $course = $data['result']->fetch_assoc();
}


if (isset($_POST['submit'])) {
    $course_name = $_POST['course_name'];
    $course_price = $_POST['course_price'];
    // VALIDATE FORM
    if (empty($course_name)) {
        $_SESSION['error'] = 'Vui Lòng nhập tên khóa học';
        $url = 'location:index.php?page=course/edit&id=' . $id;
        header($url);
        die;
    }
    $data = update($id, [
        'course_name' => $course_name,
        'course_price' => $course_price
    ]);
    if ($data['status']) {
        $_SESSION['success'] = 'Update successful';
        header('location:index.php');
    } else {
        $_SESSION['error'] = 'Update error';
        $url = 'location:index.php?page=course/edit&id=' . $id;
        header($url);
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
            <input type="text" value="<?= $course['course_name'] ?>" name="course_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" value="<?= $course['price'] ?>" name="course_price" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary" name="submit" type="submit"> UPDATE</button>
    </form>
</div>