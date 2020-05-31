<?php
include("model/config.php");
 $sql=$conn->prepare("select chitietoder.id_khach, oder.name, oder.diachi,oder.sdt,oder.email,oder.thanhtoan,chitietoder.masp,chitietoder.gia,chitietoder.soluong from chitietoder inner join oder on chitietoder.id_khach = oder.id  ORDER BY chitietoder.id_khach DESC");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
  
?>

<div class="row">
    <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">

      <tr style="background-color: black;color: red;">
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
   
<?php  while ( $row=$sql->fetch()) {
	
 ?>  
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
<?php } ?>

</table>
</div>
</div>
</div>

