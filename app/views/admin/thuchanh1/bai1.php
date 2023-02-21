<?php
if (isset($_POST['length']) && isset($_POST['width'])) {
    $length = $_POST['length'] ? $_POST['length'] : 0;
    $width = $_POST['width'] ? $_POST['width'] : 0;
    $area = $length * $width;
} else {
    $length = null;
    $width = null;
    $area = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center">
                <h2>Diện tích hình chữ nhật</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Chiều dài:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$length?>" name="length">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Chiều rộng:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$width?>" name="width">
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Diện tích:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$area?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <button>Tính</button>
            </div>
        </div>
    </div>
</form>
