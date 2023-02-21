<?php
if (isset($_POST['name']) && isset($_POST['old_value']) && isset($_POST['new_value']) && isset($_POST['price'])) {
    $name = $_POST['name'] ? $_POST['name'] : '';
    $old_value = $_POST['old_value'] ? $_POST['old_value'] : 0;
    $new_value = $_POST['new_value'] ? $_POST['new_value'] : 0;
    $price = $_POST['price'] ? $_POST['price'] : 2000;
    $total = ($new_value - $old_value) * $price;
} else {
    $name = null;
    $old_value = null;
    $new_value = null;
    $price = 2000;
    $total = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center">
                <h2>Thanh toán tiền điện</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Tên chủ hộ:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="text" value="<?=$name?>" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Chỉ số cũ:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$old_value?>" name="old_value">
            </div>
            <div class="col-1 pt-1 pb-1">
                (Kw)
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Chỉ số mới:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$new_value?>" name="new_value">
            </div>
            <div class="col-1 pt-1 pb-1">
                (Kw)
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Đơn giá:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$price?>" name="price">
            </div>
            <div class="col-1 pt-1 pb-1">
                (VNĐ)
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Số tiền thanh toán:
            </div>
            <div class="col-3 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$total?>" disabled>
            </div>
            <div class="col-1 pt-1 pb-1">
                (VNĐ)
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <button>Tính</button>
            </div>
        </div>
    </div>
</form>
