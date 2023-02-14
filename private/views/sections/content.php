<section class="content">
<?php
switch ($page) {
    case 'student':
        include $components.'/student/student.php';
        break;
    case 'student/add':
        include $components.'/student/student_add.php';
        break;
    default:
        if ($page == '') {
            include $components.'/home/home.php';
        }
        break;
}
?>
</section>
