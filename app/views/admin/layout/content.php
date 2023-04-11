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
    case 'thuchanh1/bai13':
        include $view.'/thuchanh1/bai13.php';
        break;
    case 'thuchanh1/bai14':
        include $view.'/thuchanh1/bai14.php';
        break;
    case 'thuchanh1/bai15':
        include $view.'/thuchanh1/bai15.php';
        break;
    case 'thuchanh1/bai20':
        include $view.'/thuchanh1/bai20.php';
        break;
    case 'thuchanh1/bai21':
        include $view.'/thuchanh1/bai21.php';
        break;
    case 'thuchanh1/bai34':
        include $view.'/thuchanh1/bai34.php';
        break;
    case 'thuchanh1/bai35':
        include $view.'/thuchanh1/bai35.php';
        break;
    case 'thuchanh1/bai36':
        include $view.'/thuchanh1/bai36.php';
        break;
    case 'thuchanh1/bai37':
        include $view.'/thuchanh1/bai37.php';
        break;
    case 'thuchanh1/bai40':
        include $view.'/thuchanh1/bai40.php';
        break;
    case 'thuchanh1/bai41':
        include $view.'/thuchanh1/bai41.php';
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
