<?php
include("model/config.php");
    $sql=$conn->prepare("select * from loaihang order by id_loai desc");
    $sql->execute();
   
?>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>id_loai</th>
        <th>Tên Thiết Bị</th>
        <th>Thứ Tự</th>
        <th colspan="2"> xự kiện </th>
      </tr>
    </thead>

 <?php
   $i= 0;
   while( $rows_lietke = $sql->fetch()){

 ?>
    <tbody>
      <tr>
        <td><?php echo $rows_lietke['id_loai']; ?></td>
        <td><?php echo $rows_lietke['tenthietbi']; ?></td>
        <td><?php echo $rows_lietke['thutu'];?></td>
        <td><a href="model/loaisp/xuly.php?id=<?php echo $rows_lietke['id_loai']; ?>"> 
          <img src="../img/xoa.png" alt="Logo" style="margin-left: 35px;">
        </td>
        <td><a href="index.php?xem=loaisanpham&ac=sua&id=<?php echo $rows_lietke['id_loai'];?>">
         <img src="../img/sua.png" alt="Logo" style="margin-left: 35px;">
        </td>
      </tr>
    </tbody>
 <?php 
  
  $i++;
} 

  ?>
  </table>