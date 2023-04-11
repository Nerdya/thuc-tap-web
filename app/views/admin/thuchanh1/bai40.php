<?php
if (isset($_POST['arr_string'])) {
    $arr_string = $_POST['arr_string'] ? $_POST['arr_string'] : '2, 3, 3, 3, 4, 4, 8, 9, 1, 0, 1, 1, 3';
    $arr = explode(', ', $arr_string);
    $instance_arr = [];
    $count_arr = array_count_values($arr);
    $count_arr_string = '';
    $unique_arr = [];
    foreach ($count_arr as $key => $value) {
        $count_arr_string .= $key.':'.$value.' ';
        $unique_arr[] = $key;
    }
    $unique_arr_string = implode(', ', $unique_arr);
} else {
    $arr_string = null;
    $arr = null;
    $count_arr = null;
    $count_arr_string = null;
    $unique_arr = null;
    $unique_arr_string = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Đếm số lần xuất hiện và tạo mảng duy nhất</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Mảng:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$arr_string?>" name="arr_string">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Số lần xuất hiện:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input style="width: 100%" type="text" value="<?=$count_arr_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Mảng duy nhất:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input style="width: 100%" type="text" value="<?=$unique_arr_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
            </div>
            <div class="col-2 pt-1 pb-1">
                <button class="w-100">Thực hiện</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                (Ghi chú: Các phần tử trong mảng cách nhau bằng dấu ",")
            </div>
        </div>
    </div>
</form>
