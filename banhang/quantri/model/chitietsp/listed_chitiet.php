<?php 
//include("model/config.php");
 $sql=$conn->prepare("select * from chitiethang,loaihang where loaihang.id_loai=chitiethang.id_loai order by chitiethang.id_chitiet desc");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(1,$name);
    $sql->execute();
    
?>
<div class="row">
  <div class="col-sm-12">
<table class="table table-bordered">
    <thead style="background-color: black; color: red;">
      <tr>
        <th>Tên Thiết Bị</th>
        <th>giá</th>
        <th>hình ảnh</th>
        <th>Mô tả</th>
        <th>thứ tự </th>
        <th>hãng thiết bị </th>
        <th>loai sản phẩm</th>
        <th colspan="2"> xự kiện </th>
      </tr>
    </thead>

 <?php
  
   while($rows_lietke = $sql->fetch()){
 // $row=mysqli_fetch_array($run_lietke,MYSQLI_NUM);
 // foreach ($row as $key => $value) {

 ?>
    <tbody>
      <tr>
        <td><?php echo $rows_lietke['tenchitiet']; ?></td>
        <td><?php echo $rows_lietke['gia']; ?></td>
        <td><img src="model/chitietsp/upload/<?php  echo $rows_lietke['hinhanh']; ?>" width="20" height="30"></td>
        <td><?php echo $rows_lietke['mota'];?></td>
        <td><?php echo $rows_lietke['thutu'];?></td>
        <td><?php echo $rows_lietke['hangthietbi'];?></td>
        <td><?php echo $rows_lietke['tenthietbi'];?></td>
        <td><a href="model/chitietsp/xuly_chitiet.php?id=<?php echo $rows_lietke['id_chitiet']; ?>"> 
          <img src="../img/xoa.png" alt="Logo"></a>
        </td>
        <td><a href="index.php?xem=thongtinsanpham&ac=sua&id=<?php echo $rows_lietke['id_chitiet'];?>">
         <img src="../img/sua.png" alt="Logo"></a>
        </td>
      </tr>
    </tbody>
 <?php 
} 

  ?>
  </table>
</div>
</div>