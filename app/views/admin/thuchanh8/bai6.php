<?php
$conn = mysqli_connect("localhost", "root", "", "ql_ban_sua");
$result = mysqli_query($conn, "SELECT * FROM khach_hang");
?>
<h2 class="text-center">Thông tin khách hàng</h2>
<table class="table table-bordered table-striped align-middle">
  <tr>
    <th scope="col" class="text-center">Mã KH</th>
    <th scope="col" class="text-center">Tên khách hàng</th>
    <th scope="col" class="text-center">Giới tính</th>
    <th scope="col" class="text-center">Địa chỉ</th>
    <th scope="col" class="text-center">Số điện thoại</th>
  </tr>
  <?php
  while ($row = mysqli_fetch_row($result)) {
    if ($row[2]) {
      $src_img = "app/assets/img/bai5/girl.png";
    } else {
      $src_img = "app/assets/img/bai5/boy.png";
    }
  ?>
  <tr>
    <td><?=$row[0]?></td>
    <td><?=$row[1]?></td>
    <td class="text-center">
      <img style="width: 60px" src="<?=$src_img?>" alt="<?=$row[2]?>"/>
    </td>
    <td><?=$row[3]?></td>
    <td><?=$row[4]?></td>
  </tr>
  <?php
  }
  ?>
</table>