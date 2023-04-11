<?php
if (isset($_POST['arr_string']) && isset($_POST['to_find'])) {
    $arr_string = $_POST['arr_string'] ? $_POST['arr_string'] : '1, 3, 5, 7, 9, 10, 11, 12, 14, 5, 6';
    $to_find = $_POST['to_find'] ? $_POST['to_find'] : 9;
    $arr_res = explode(', ', $arr_string);
    $key = array_search($to_find, $arr_res);
    if ($key) {
        $search_res = 'Tìm thấy '.$to_find.' tại vị trí thứ '.($key + 1).' của mảng';
    } else {
        $search_res = 'Không tìm thấy '.$to_find.' trong mảng';
    }
    $arr_res_string = implode(' ', $arr_res);
} else {
    $arr_string = null;
    $to_find = null;
    $arr_res = null;
    $key = null;
    $search_res = null;
    $arr_res_string = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Tìm kiếm</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Nhập mảng:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$arr_string?>" name="arr_string">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Nhập số cần tìm:
            </div>
            <div class="col-2 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$to_find?>" name="to_find">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
            </div>
            <div class="col-2 pt-1 pb-1">
                <button class="w-100">Tìm kiếm</button>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Mảng:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$arr_res_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Kết quả tìm kiếm:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$search_res?>" disabled>
            </div>
        </div>
    </div>
</form>
