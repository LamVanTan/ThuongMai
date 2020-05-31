<!--lấy tên thiết bị ra -->
<div class="row">
    <?php
      $ma_url=$_GET["id"];
      $sql_tenthitbi=$conn->prepare("select * from loaihang where id_loai=:ma");
      $sql_tenthitbi->setFetchMode(PDO::FETCH_ASSOC);
      $sql_tenthitbi->bindValue(":ma",$ma_url);
      $sql_tenthitbi->execute();
      while ($row_thietbi=$sql_tenthitbi->fetch()) {
   ?>
    <div class="col-md-12" style="text-align: center;">
      <span class="badge badge-pill badge-warning"><?php echo $row_thietbi["tenthietbi"]; }?></span>
    </div>
  </div>



<!-- hiển thị thiết bị khi chọn tronh danh sách  -->
<div class="row" style="margin-top: 10px;">
  <?php
    
      $sql=$conn->prepare("select * from chitiethang where id_loai=:masp ");
     $sql->setFetchMode(PDO:: FETCH_ASSOC);
     $sql->bindValue(":masp",$ma_url);
     $sql->execute();
      while ($row_all=$sql->fetch()) { ?>
      <div class="coo-xs-6 col-md-2 bg-white">
         <img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" width="80px" height="100px"><br>
         Sản Phẩm : <?php echo $row_all["tenchitiet"];?><br>
         Giá : <?php echo $money=number_format($row_all["gia"],'0',',','.')." VND";?><br>
         <a href="index.php?xem=thongtinsp&id=<?php echo $row_all['id_chitiet']?>">Xem chi Tiết</a>
      </div>
  <?php }?>
</div>


