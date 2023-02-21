<section class="content">
<?php
switch ($page) {
    case 'thuchanh1/bai1':
        include $view.'/thuchanh1/bai1.php';
        break;
    case 'thuchanh1/bai2':
        include $view.'/thuchanh1/bai2.php';
        break;
    case 'thuchanh1/bai3':
        include $view.'/thuchanh1/bai3.php';
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
