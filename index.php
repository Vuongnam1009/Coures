<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- file boostrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>

    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'course/home':
                require_once 'page/course/home.php';
                break;

            case 'course/edit':
                require_once 'page/course/editCourse.php';
                break;

            case 'course/create':
                require_once 'page/course/createCourse.php';
                break;

            case 'course/delete':
                require_once 'page/course/deleteCourse.php';
                break;
            default:
                require_once 'page/course/home.php';
                break;
        }
    } else {
        require_once 'page/course/home.php';
    }

    ?>
</body>

</html>