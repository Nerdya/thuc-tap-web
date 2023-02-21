<section class="content">
<?php
switch ($page) {
    case 'bai1':
        include $view.'/bai1/bai1.php';
        break;
    case 'student':
        include $view.'/student/student.php';
        break;
    case 'student/add':
        include $view.'/student/student_add.php';
        break;
    default:
        if ($page == '') {
            include $view.'/home/home.php';
        }
        break;
}
?>
</section>
