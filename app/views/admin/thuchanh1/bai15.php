<?php
if (isset($_POST['month']) && isset($_POST['year'])) {
    $month = $_POST['month'] ? $_POST['month'] : 1;
    $year = $_POST['year'] ? $_POST['year'] : 1970;
    $days = 0;
    switch ($month) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $days = 31;
            break;
        case 4: case 6: case 9: case 11:
            $days = 30;
            break;
        case 2:
            if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
                $days = 29;
            } else {
                $days = 28;
            }
            break;
        default:
            $days = 0;
    }
    $result = 'Tháng '.$month.' năm '.$year. ' có '.$days.' ngày ';
} else {
    $month = null;
    $year = null;
    $result = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Tính ngày trong tháng</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex align-items-center justify-content-center gap-1">
                <div class="">Tháng/năm:</div>
                <input style="width: 60px" type="number" value="<?=$month?>" name="month" min="1" max="12">
                <div>/</div>
                <input style="width: 60px" type="number" value="<?=$year?>" name="year" min="1970" max="9999">
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <button>Tính số ngày</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <input style="width: 300px" type="text" value="<?=$result?>" disabled>
            </div>
        </div>
    </div>
</form>
