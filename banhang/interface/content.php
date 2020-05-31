<?php ob_start();?>
<div class="row">
   <div class="col-12 col-md-12" style="background-color: white;">
     
    	<?php
          if(isset($_GET["xem"])){
          	$chon=$_GET["xem"];
          }else{
          	$chon="";
          }
        if($chon=="sanpham"){
        	include("interface/chitiet/tensanpham.php");
        }
        elseif ($chon=="dangky") {
        	include("interface/chitiet/dangky.php");
        }
        elseif ($chon=="lylich") {
          include("interface/chitiet/lylich.php");
        }
        elseif ($chon=="thongtinsp") {
        	include("interface/chitiet/thongtinsanpham.php");
        }
        elseif ($chon=="giohang") {
        	include("interface/chitiet/cart.php");
        }
        elseif($chon=="dangnhaptt"){
          include("interface/chitiet/dangnhap.php");
        }
        elseif($chon=="donhang"){
          include("interface/chitiet/hoadon.php");
        }
        elseif($chon=="thongtin"){
          include("interface/chitiet/thongtin.php");
        }
        elseif(isset($_POST["submit"])) {
          include("interface/chitiet/search.php");
        }
      
        else{
        	include("interface/chitiet/tatcasanpham.php");
        }
    	?>	   
    	</div> 
   </div>
<?php ob_end_flush();?>