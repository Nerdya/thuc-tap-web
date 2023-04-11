<?php
$conn = mysqli_connect("localhost", "root", "", "ql_ban_sua");
$result = mysqli_query($conn, "SELECT * FROM khach_hang");
?>
<h2 class="text-center">Thông tin khách hàng</h2>
<table class="table">
  <tr>
    <th scope="col">Mã KH</th>
    <th scope="col">Tên khách hàng</th>
    <th scope="col">Giới tinh</th>
    <th scope="col">Địa chỉ</th>
    <th scope="col">Số điện thoại</th>
  </tr>
  <?php
  while ($row = mysqli_fetch_row($result)) {
  ?>
  <tr>
    <td><?=$row[0]?></td>
    <td><?=$row[1]?></td>
    <td><?=$row[2]?></td>
    <td><?=$row[3]?></td>
    <td><?=$row[4]?></td>
  </tr>
  <?php
  }
  ?>
</table>