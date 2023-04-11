<?php
$landmark_array = array();
$landmark_array = array(
    array(
        'code' => 'nha_trang',
        'name' => 'Biển Nha Trang',
        'img' => 'nha_trang.jpg'
    ),
    array(
        'code' => 'da_lat',
        'name' => 'Thành phố Đà Lạt',
        'img' => 'da_lat.jpg'
    ),
    array(
        'code' => 'vung_tau',
        'name' => 'Biển Vũng Tàu',
        'img' => 'vung_tau.jpg'
    ),
    array(
        'code' => 'ha_long',
        'name' => 'Vịnh Hạ Long',
        'img' => 'ha_long.jpg'
    ),
    array(
        'code' => 'phan_thiet',
        'name' => 'Biển Phan Thiết',
        'img' => 'phan_thiet.jpg'
    ),
    array(
        'code' => 'ha_tien',
        'name' => 'Biển Hà Tiên',
        'img' => 'ha_tien.jpg'
    ),
    array(
        'code' => 'phu_quoc',
        'name' => 'Đảo Phú Quốc',
        'img' => 'phu_quoc.jpg'
    )
);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center bg-primary">
            <h2>Danh lam thắng cảnh</h2>
        </div>
    </div>
    <div class="row bg-secondary">
        <div class="col-6 ps-0 pe-0">
            <div class="m-2 p-2 bg-white">
                <p><b>Danh sách địa danh</b></p>
                <?php
                foreach ($landmark_array as $landmark) {
                    $name = $landmark['name'];
                    $code = $landmark['code'];
                ?>
                <p>
                    <a href="#<?=$code?>"><?=$name?></a>
                </p>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-6 ps-0 pe-0">
            <div class="m-2 p-2 bg-white text-center">
                <?php
                foreach ($landmark_array as $landmark) {
                    $name = $landmark['name'];
                    $code = $landmark['code'];
                    $src_img = 'app/assets/img/bai41/'.$landmark['img'];
                ?>
                <p>
                    <a name="<?=$code?>"><b><?=$name?></b></a>
                </p>
                <div>
                    <img style="width: 80%; height: auto" src="<?=$src_img?>">
                </div>
                <p>
                    <a href="#top">Quay về đầu trang</a>
                </p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
