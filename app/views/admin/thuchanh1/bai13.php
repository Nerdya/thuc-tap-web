<?php
if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
    $day = $_POST['day'] ? $_POST['day'] : 1;
    $month = $_POST['month'] ? $_POST['month'] : 1;
    $year = $_POST['year'] ? $_POST['year'] : 1970;
    $jd = cal_to_jd(CAL_GREGORIAN, $month, $day, $year);
    $weekday = '';
    switch(jddayofweek($jd, 0)) {
        case 0: $weekday = 'Chủ Nhật'; break;
        case 1: $weekday = 'Thứ Hai'; break;
        case 2: $weekday = 'Thứ Ba'; break;
        case 3: $weekday = 'Thứ Tư'; break;
        case 4: $weekday = 'Thứ Năm'; break;
        case 5: $weekday = 'Thứ Sáu'; break;
        case 6: $weekday = 'Thứ Bảy'; break;
        default: $weekday = 'Không xác định';
    }
    $result = 'Ngày '.$day.' tháng '.$month.' năm '.$year. ' là ngày '.$weekday;
} else {
    $day = null;
    $month = null;
    $year = null;
    $weekday = null;
    $result = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Tìm thứ trong tuần</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex align-items-center justify-content-center gap-1">
                <div class="">Ngày/tháng/năm:</div>
                <input style="width: 60px" type="number" value="<?=$day?>" name="day" min="1" max="31">
                <div>/</div>
                <input style="width: 60px" type="number" value="<?=$month?>" name="month" min="1" max="12">
                <div>/</div>
                <input style="width: 60px" type="number" value="<?=$year?>" name="year" min="1970" max="9999">
                <button>Tìm thứ trong tuần</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <input style="width: 360px" type="text" value="<?=$result?>" disabled>
            </div>
        </div>
    </div>
</form>
