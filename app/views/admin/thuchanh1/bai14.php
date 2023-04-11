<?php
if (isset($_POST['year'])) {
    $year = $_POST['year'] ? $_POST['year'] : 1970;
    $so_du_can = ($year - 3) % 10;
    switch ($so_du_can) {
        case 0: $can = 'Quý'; break;
        case 1: $can = 'Giáp'; break;
        case 2: $can = 'Ất'; break;
        case 3: $can = 'Bính'; break;
        case 4: $can = 'Đinh'; break;
        case 5: $can = 'Mậu'; break;
        case 6: $can = 'Kỷ'; break;
        case 7: $can = 'Canh'; break;
        case 8: $can = 'Tân'; break;
        case 9: $can = 'Nhâm'; break;
        default: $can = '';
    }
    $so_du_chi = ($year - 3) % 12;
    switch ($so_du_chi) {
        case 0: $chi = 'Hợi'; break;
        case 1: $chi = 'Tý'; break;
        case 2: $chi = 'Sửu'; break;
        case 3: $chi = 'Dần'; break;
        case 4: $chi = 'Mão'; break;
        case 5: $chi = 'Thìn'; break;
        case 6: $chi = 'Tỵ'; break;
        case 7: $chi = 'Ngọ'; break;
        case 8: $chi = 'Mùi'; break;
        case 9: $chi = 'Thân'; break;
        case 10: $chi = 'Dậu'; break;
        case 11: $chi = 'Tuất'; break;
        default: $chi = '';
    }
    $result = $can.' '.$chi;
} else {
    $year = null;
    $result = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Tính năm âm lịch</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1 d-flex flex-column justify-content-center text-center">
                <div class="w-100">Năm dương lịch</div>
                <input class="w-100" type="number" value="<?=$year?>" name="year" min="1970" max="9999">
            </div>
            <div class="col-2 pt-1 pb-1 d-flex align-items-end justify-content-center">
                <button>=></button>
            </div>
            <div class="col-2 pt-1 pb-1 d-flex flex-column justify-content-center text-center">
                <div class="w-100">Năm âm lịch</div>
                <input class="w-100" type="text" value="<?=$result?>" disabled>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</form>
