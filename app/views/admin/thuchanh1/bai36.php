<?php
if (isset($_POST['arr_string']) && isset($_POST['to_be_replaced']) && isset($_POST['to_replace'])) {
    $arr_string = $_POST['arr_string'] ? $_POST['arr_string'] : '2, 4, 6, 8, 10, 2, 3, 4, 12, 17, 5';
    $to_be_replaced = $_POST['to_be_replaced'] ? $_POST['to_be_replaced'] : 2;
    $to_replace = $_POST['to_replace'] ? $_POST['to_replace'] : 5;
    $old_arr = explode(', ', $arr_string);
    $new_arr = $old_arr;
    for ($i = 0; $i < count($new_arr); $i++) {
        if ($new_arr[$i] == $to_be_replaced) {
            $new_arr[$i] = $to_replace;
        }
    }
    $old_arr_string = implode(' ', $old_arr);
    $new_arr_string = implode(' ', $new_arr);
} else {
    $arr_string = null;
    $to_be_replaced = null;
    $to_replace = null;
    $old_arr = null;
    $new_arr = null;
    $old_arr_string = null;
    $new_arr_string = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Thay thế</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Nhập các phần tử:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$arr_string?>" name="arr_string">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Giá trị cần thay thế:
            </div>
            <div class="col-2 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$to_be_replaced?>" name="to_be_replaced">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Giá trị thay thế:
            </div>
            <div class="col-2 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$to_replace?>" name="to_replace">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
            </div>
            <div class="col-2 pt-1 pb-1">
                <button class="w-100">Thay thế</button>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Mảng cũ:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input style="width: 100%" type="text" value="<?=$old_arr_string?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Mảng sau khi thay thế:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input style="width: 100%" type="text" value="<?=$new_arr_string?>" disabled>
            </div>
        </div>
    </div>
</form>
