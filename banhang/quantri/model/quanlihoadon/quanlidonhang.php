<?php
include("model/config.php");
 $sql=$conn->prepare("select chitietoder.id_khach, oder.name, oder.diachi,oder.sdt,oder.email,oder.thanhtoan,chitietoder.masp,chitietoder.gia,chitietoder.soluong from chitietoder inner join oder on chitietoder.id_khach = oder.id  ORDER BY chitietoder.id_khach DESC");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
  
?>

<div class="row bg-light">
  <div class="col-sm-12">
  	<h4 style="text-align: center; color: green;">Quản Lí đơn hàng</h4>
<table class="table table-bordered">
    <thead style="background-color: black; color: red;">
      <tr>
      	<th>Mã Khách Hàng</th>
        <th>Tên Khách Hàng</th>
        <th>SDT</th>
        <th>Địa Chỉ</th>
        <th>email</th>
        <th>Phương Thứ Thanh Toán</th>
        <th>Mã Sản Phẩm</th>
        <th>Giá </th>
        <th>Số Lượng</th>
      </tr>
    </thead>
<?php  while ( $row=$sql->fetch()) {
	
 ?>
     <tbody>
      <tr>
      	<td><?php echo $row['id_khach']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['sdt']; ?></td>
        <td><?php echo $row['diachi'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['thanhtoan'];?></td>
        <td><?php echo $row['masp'];?></td>
        <td><?php echo $row['gia'];?></td>
        <td><?php echo $row['soluong'];?></td>
    </tr>
    </tbody>
<?php } ?>
</table>
</div>
</div>