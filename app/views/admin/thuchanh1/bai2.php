<?php
$PI = 3.14;
if (isset($_POST['radius'])) {
    $radius = $_POST['radius'] ? $_POST['radius'] : 0;
    $area = $PI * $radius * $radius;
    $border_width = 2 * $PI * $radius;
} else {
    $radius = null;
    $area = null;
    $border_width = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center">
                <h2>Diện tích và chu vi hình tròn</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 pt-1 pb-1">
                Bán kính:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$radius?>" name="radius">
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
            <div class="col-2 pt-1 pb-1">
                Chu vi:
            </div>
            <div class="col-4 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$border_width?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <button>Tính</button>
            </div>
        </div>
    </div>
</form>
