<?php
if (isset($_GET['ac']) && $_GET['ac']=='dangxuat') {
	unset($_SESSION['dangnhap']);
	 header("location:dangnhap.php");
}
?>
<div class="row">
	      <div class="col-md-12 col-sm-12 bg-white">
	      	<nav class="navbar navbar-expand-sm bg-light ">
	      		<a class="navbar-brand badge badge-pill badge-primary" href="#">
                 <img src="../img/icon.png" alt="Logo" style="width:40px;">
                </a>
			  <ul class="navbar-nav">
			    <li class="nav-item ">
			      <a class="nav-link" href="index.php">Trang Chủ</a>
			    </li>
			    <li class="nav-item ">
			      <a class="nav-link" href="index.php?xem=loaisanpham&ac=insert">Loại Sản Phẩm</a>
			    </li>
			    <li class="nav-item ">
			      <a class="nav-link" href="index.php?xem=thongtinsanpham&ac=insert_chitiet">Thông tin chi tiết</a>
			    </li>
			    <li class="nav-item ">
			      <a class="nav-link" href="index.php?xem=quanlinguoidung">Quản Lí Người Dùng</a>
			    </li>
			    <li class="nav-item ">
			      <a class="nav-link" href="index.php?xem=quanlihoadon">Quản Lí đơn hàng</a>
			    </li>
			    <li class="nav-item ">
			      <a class="nav-link " href="index.php?ac=dangxuat">Log Out</a>
			    </li>
			    <li class="nav-item " >
			      <a class="nav-link badge badge-primary">
			      <img src="../img/conx.png" alt="Logo">
			      <?php
			      echo $_SESSION['dangnhap'];
			      ?>
			      </a>
			    </li>
			  </ul>
			</nav>

	      </div>
	      </div>