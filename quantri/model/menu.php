<?php
if (isset($_GET['ac']) && $_GET['ac']=='dangxuat') {
	unset($_SESSION['dangnhap']);
	 header("location:dangnhap.php");
}
?>

<div class="row">
	
		<nav class="navbar navbar-default navbar-inverse">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a class="nav-link" href="index.php">Trang Chủ</a></li>
       
        <li class=""><a class="nav-link" href="index.php?xem=loaisanpham&ac=insert">Loại Sản Phẩm</a></li>
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
			   
					
							
      </ul>
      <div class="navbar-form navbar-right">
      	<a class="nav-link badge badge-primary">
			      <img src="../img/conx.png" alt="Logo">
			      <?php
			        echo $_SESSION['dangnhap'];
			      ?>
			      </a>
      </div>
      
      
     
    </div><!-- /.navbar-collapse -->
  <!-- /.container-fluid -->
</nav>
	
</div>