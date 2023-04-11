<?php
if (isset($_POST['arr_string'])) {
    $arr_string = $_POST['arr_string'] ? $_POST['arr_string'] : '3, 1, 7, 4, 8, 5, 9, 1, 2, 6';
    $arr = explode(', ', $arr_string);
    $arr_asc = array_slice($arr, 0);
    sort($arr_asc);
    $arr_desc = array_slice($arr, 0);
    rsort($arr_desc);
    $arr_asc_string = implode(' ', $arr_asc);
    $arr_desc_string = implode(' ', $arr_desc);
} else {
    $arr_string = null;
    $arr = null;
    $arr_asc = null;
    $arr_desc = null;
    $arr_asc_string = null;
    $arr_desc_string = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Sắp xếp mảng</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Nhập mảng:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$arr_string?>" name="arr_string">
            </div>
            <div class="col-1 pt-1 pb-1 fw-bold">
                (*)
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
            </div>
            <div class="col-2 pt-1 pb-1">
                <button class="w-100">Sắp xếp tăng/giảm</button>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1 fw-bold">
                Sau khi sắp xếp:
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Tăng dần:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input style="width: 100%" type="text" value="<?=$arr_asc_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Giảm dần:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input style="width: 100%" type="text" value="<?=$arr_desc_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <b>(*)</b>&nbsp;Các số được nhập cách nhau bằng dấu ","
            </div>
        </div>
    </div>
</form>
