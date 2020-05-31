<?php
include("model/config.php");
    $sql=$conn->prepare("select * from loaihang order by id_loai desc");
    $sql->execute();
   
?>

<div class="row">
    <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
      <tr>
        <th>id_loai</th>
        <th>Tên Thiết Bị</th>
        <th>Thứ Tự</th>
        <th colspan="2"> xự kiện </th>
      </tr>
    

 <?php
   $i= 0;
   while( $rows_lietke = $sql->fetch()){

 ?>
   
      <tr>
        <td><?php echo $rows_lietke['id_loai']; ?></td>
        <td><?php echo $rows_lietke['tenthietbi']; ?></td>
        <td><?php echo $rows_lietke['thutu'];?></td>
        <td><a href="model/loaisp/xuly.php?id=<?php echo $rows_lietke['id_loai']; ?>"> 
          <img src="../img/xoa.png" alt="Logo" style="margin-left: 35px;">
        </a>
        </td>
        <td><a href="index.php?xem=loaisanpham&ac=sua&id=<?php echo $rows_lietke['id_loai'];?>">
         <img src="../img/sua.png" alt="Logo" style="margin-left: 35px;">
       </a>
        </td>
      </tr>
   
 <?php 
  
  $i++;
} 

  ?>
  </table>
</div>
</div>
</div>

