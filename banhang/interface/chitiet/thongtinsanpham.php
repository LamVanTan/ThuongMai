<?php
//include("interface/config.php");
$sql_thongtin=$conn->prepare("select * from chitiethang where id_chitiet=$_GET[id]");
$sql_thongtin->setFetchMode(PDO::FETCH_ASSOC);
$sql_thongtin->execute();
$row_thongtin=$sql_thongtin->fetch();
?>


<div class="row">
	<div class="col-md-12" id="đ">
		<div class="row" style="border-bottom: 0.5px solid lightgray;">
			<div class="col-md-12">
				<h4 style="font-weight:bold; font-size: 20px;"><?php echo $row_thongtin["tenchitiet"]; ?></h4>
			</div>
		</div>
		<div class="row" style="padding: 10px 5px;">
			<div class="col-md-5" style="border-right: 0.5px solid lightgray; padding: 0 100px;">
				 <img src="quantri/model/chitietsp/upload/<?php echo $row_thongtin['hinhanh'];?>" class="img-responsive img-thumbnail" style="width: auto; height:400px; margin-bottom: 5px;" >
				 <div class="fb-like" data-href="https://developers.facebook.com" data-width="100px" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
			</div>
			<div class="col-md-7" style="padding: 15px 200px;">
				<b style="font-size: 18px;"><?php echo $money=number_format($row_thongtin["gia"],'0',',','.')." VND"; ?></b>
				 <p><?php echo $row_thongtin["mota"]; ?></p>
				<a href="index.php?xem=giohang&id=<?php echo $row_thongtin['id_chitiet'];?>&ten=<?php echo $row_thongtin['tenchitiet'];?>&gia=<?php echo $row_thongtin['gia'];?>&img=<?php echo $row_thongtin['hinhanh']; ?>"style="text-decoration: none;" class="btn btn-danger">
					<h5 style="text-align: center;">MUA NGAY</h5>
					
				</a>


				
			</div>
		</div>

	</div>
</div>







