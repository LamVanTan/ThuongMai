 <?php
if (isset($_GET['xem'])) {
	$click=$_GET['xem'];

	if($click=="loaisanpham"){
		include("model/loaisp/main.php");
	}
	if($click=="quanlinguoidung"){
		include("model/quanlinguoidung/quanlinguoidung.php");
	}
	if($click=="quanlihoadon"){
		include("model/quanlihoadon/quanlidonhang.php");
	}

	elseif ($click=="thongtinsanpham") {
		include("model/chitietsp/main_chitiet.php");
	}
}

 ?>

 