<?php
$list = array(
    "Trang chủ",
    "Danh sách sinh viên",
    "Danh sách MH",
    "Xem điểm",
    "Danh sách SV",
    "Kết quả MH",
    "Kết quả học tập",
    "Thêm sinh viên",
    "Thêm DS SV",
    "Thêm kết quả SV"
)
?>
<section class="navigation">
    <ul class="list">
        <?php
        foreach ($list as $item) {
        ?>
        <li class="item">
            <?=$item?>
        </li>
        <?php
        }
        ?>
    </ul>
</section>
