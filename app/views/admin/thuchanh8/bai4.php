<?php
$conn = mysqli_connect("localhost", "root", "", "ql_ban_sua");
$result = mysqli_query($conn, "SELECT * FROM hang_sua");
?>
<h2 class="text-center">Thông tin hàng sữa</h2>
<table class="table table-bordered border-secondary">
  <tr>
    <th scope="col">Mã HS</th>
    <th scope="col">Tên hãng sữa</th>
    <th scope="col">Địa chỉ</th>
    <th scope="col">Điện thoại</th>
    <th scope="col">Email</th>
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