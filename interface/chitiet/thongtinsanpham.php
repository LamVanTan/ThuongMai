<?php
//include("interface/config.php");
$sql_thongtin=$conn->prepare("select * from chitiethang where id_chitiet=$_GET[idsp]");
$sql_thongtin->setFetchMode(PDO::FETCH_ASSOC);
$sql_thongtin->execute();
$row_thongtin=$sql_thongtin->fetch();
?>


<div class="row">
	<div class="col-md-12" id="">
		<div class="row" style="border-bottom: 0.5px solid lightgray;">
			<div class="col-md-12">
				<h4 style="font-weight:bold; font-size: 20px;"><?php echo $row_thongtin["tenchitiet"]; ?></h4>
			</div>
		</div>
		<div class="row" style="padding: 10px 5px;">
			<div class="col-xs-5 col-md-5" style="border-right: 0.5px solid lightgray; padding:5px">
				 <img src="quantri/model/chitietsp/upload/<?php echo $row_thongtin['hinhanh'];?>" class="img-responsive img-thumbnail" style="width:100%; margin-bottom: 5px;" >
				 <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="100px" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
			</div>
			<div class="col-xs-7 col-md-7" style="padding: 10px;">
				<b style="font-size: 18px;"><?php echo $money=number_format($row_thongtin["gia"],'0',',','.')." VND"; ?></b>
				 <p><?php echo $row_thongtin["mota"]; ?></p>
				<a href="index.php?xem=giohang&idsp=<?php echo $row_thongtin['id_chitiet'];?>"style="text-decoration: none;" class="btn btn-danger">
					<h5 style="text-align: center;" class="cart">MUA NGAY</h5>
					
				</a>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	
  function getInfo(){  
         
        $.ajax({
          url: 'ajax.php',
          type: 'POST',
          cache: false,//luu bo nho cache giup trang web nhanh hon
          data: {asoLuong:soLuong,agia:gia,aten:tenHoa},//trong data name:value1,name2:value2
          success: function(data){
            $(".abc").html(data);
          },
          error: function (){
            alert('Có lỗi xảy ra');
          }
        });
        return false;
      } 
</script>





