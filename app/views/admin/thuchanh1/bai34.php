<?php
if (isset($_POST['n'])) {
    $n = $_POST['n'] ? $_POST['n'] : 10;
    $arr_rnd = [];
    for ($i = 0; $i < $n; $i++) {
        $arr_rnd[] = rand(0, 20);
    }
    $arr_rnd_string = implode(' ', $arr_rnd);
    $max = max($arr_rnd);
    $min = min($arr_rnd);
    $sum = array_sum($arr_rnd);
} else {
    $n = null;
    $arr_rnd = null;
    $arr_rnd_string = null;
    $max = null;
    $min = null;
    $sum = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 text-center bg-primary">
                <h2>Phát sinh mảng và tính toán</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1">
                Nhập số phần tử:
            </div>
            <div class="col-6 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$n?>" name="n">
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1">
            </div>
            <div class="col-3 pt-1 pb-1">
                <button class="w-100">Phát sinh và tính toán</button>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1">
                Mảng:
            </div>
            <div class="col-6 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$arr_rnd_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1">
                GTLN (MAX) trong mảng:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$max?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1">
                TTNN (MIN) trong mảng:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$min?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1">
                Tổng mảng:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$sum?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-9 pt-1 pb-1 d-flex justify-content-center">
                (<b>Ghi chú:</b>&nbsp;Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
            </div>
        </div>
    </div>
</form>
