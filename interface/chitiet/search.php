<?php
include("interface/config.php");
if(isset($_POST["submit"])){
	$timkiem=$_POST["tk"];
	$sql=$conn->prepare("select * from chitiethang where tenchitiet like '%$timkiem%' ");
	$sql->execute();
	
?>
<div class="row">
<?php 

	echo '<div class="col-sm-12 bg-warning"><h6 style="text-align:center;">Sản Phẩm Cần Tìm Là</h6> </div>';
while ($row_all=$sql->fetch()) { ?>
	<div class="col-xs-6 col-md-2 sp" >
            <div class="row sp-list">
                <div class="col-md-12 list-sp">
                  <img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" class="img-responsive img-sp" style="width:auto; height:100px;">
                  <b><?php echo $row_all["tenchitiet"];?></b>
                  <p><?php echo $money=number_format($row_all["gia"],'0',',','.')." VND";?></p>
                  <a href="index.php?xem=thongtinsp&id=<?php echo $row_all['id_chitiet']?>" title="">Xem Chi Tiet</a>
                </div>
            </div>
  	</div>
<?php }

}
?>
</div>

