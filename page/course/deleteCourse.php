<?php
require './backend/index.php';
$id = $_GET['id'];

$data = delete($id);
if ($data['status']) {
    $_SESSION['success'] = 'Xóa khóa học thành công';
    header('location:index.php');
}
