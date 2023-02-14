<section class="content">
<?php
switch ($page) {
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
