<?php
function kt_so($so, $a, $b) {
    return ($so % $a == 0) && ($so % $b == 0);
}
if (isset($_POST['n']) && isset($_POST['a']) && isset($_POST['b'])) {
    $n = $_POST['n'] ? $_POST['n'] : 20;
    $a = $_POST['a'] ? $_POST['a'] : 2;
    $b = $_POST['b'] ? $_POST['b'] : 4;
    $result = '';
    for ($i = 1; $i <= $n; $i++) {
        if (kt_so($i, $a, $b)) {
            $result .= $i.' ';
        }
    }
} else {
    $n = null;
    $a = null;
    $b = null;
    $result = null;
}
?>
<form class="bai1" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center bg-primary">
                <h2>Số chia hết cho A và B</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1 text-center">
                Nhập N:
            </div>
            <div class="col-2 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$n?>" name="n">
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1 text-center">
                Nhập A:
            </div>
            <div class="col-2 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$a?>" name="a">
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1 pb-1 text-center">
                Nhập B:
            </div>
            <div class="col-2 pt-1 pb-1">
                <input class="w-100" type="number" value="<?=$b?>" name="b">
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <button class="w-100">Các số <= N chia hết cho A và cho B</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-1 pb-1 d-flex justify-content-center">
                <input style="width: 400px" type="text" value="<?=$result?>" disabled>
            </div>
        </div>
    </div>
</form>
