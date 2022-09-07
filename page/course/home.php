<?php
session_start();
require './backend/index.php';
$data = get();
if ($data['status']) {
    $courses = $data['result'];
}
?>
<div class="card-body">
    <?php
    if (isset($_SESSION['success'])) {
        echo '<p style=color:green>' . $_SESSION['success'] . '</p>';
        unset($_SESSION['success']);
    }
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Price</th>
                <th>Create At</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($course = $courses->fetch_assoc()) { ?>
                <tr>
                    <td><?= $course['id'] ?></td>
                    <td><?= $course['course_name'] ?></td>
                    <td><?= $course['price'] ?></td>
                    <td><?= $course['create_at'] ?></td>
                    <td>
                        <a href="index.php?page=course/edit&id=<?= $course['id'] ?>">edit</a>
                    </td>
                    <td>
                        <a onclick="return confirm('bạn có chắc chắn xóa khóa học này ko?')" href="index.php?page=course/delete&id=<?= $course['id'] ?>">delete</a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <a href="index.php?page=course/create" class="btn btn-danger"> ADD COURSE</a>
</div>