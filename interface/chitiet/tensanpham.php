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
      <div class="col-xs-6 col-md-2 sp">
        <div class="row sp-list">
          <div class="col-md-12 list-sp">
         <img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" width="80px" height="100px"><br>
         <b> <?php echo $row_all["tenchitiet"];?></b>
          <p> <?php echo $money=number_format($row_all["gia"],'0',',','.')." VND";?></p>
         <a href="index.php?xem=thongtinsp&idsp=<?php echo $row_all['id_chitiet']?>">Xem chi Tiết</a>
      </div>
    </div>
  </div>
  <?php }?>
</div>

<style type="text/css">
   .sp{
    height: 205px;
   }
   .img-sp{
     min-width: auto;
     height: 100px;
     margin-bottom: 5px;

     }

     .sp{
      padding: 10px 30px;
     }

     .list-sp b{
       margin: 5px 0;
       text-align: center;
     }

   
</style>


