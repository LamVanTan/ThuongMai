<?php session_start(); ?>

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
        <li class="active"><a class="nav-link" href="index.php?">Trang Chủ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm <span class="caret"></span></a>
          <ul role="menu" class="sub-menu bg-dark dropdown-menu">
	        	<?php
				$sql=$conn->prepare("select * from loaihang");
				$sql->setFetchMode(PDO::FETCH_ASSOC);
				$sql->execute();
				while ($row=$sql->fetch()) {	
				?>
		        <li><a class="nav-link" href="index.php?xem=sanpham&id=<?php echo $row['id_loai'];?>">
		        	<?php echo $row["tenthietbi"]; }?></a>
		        </li>	
	        </ul>
        </li>
        <li class=""><a class="nav-link" href="index.php?xem=lylich">Giới Thiệu</a></li>
        <li class="bg-dark">
								    <a class="nav-link " href="index.php?xem=giohang">
								    	<img src="img/cart1.png" alt="Logo" width="20px">
								    	<span class="badge badge-light" style="background-color:red;">
											<?php 
													if(isset($_SESSION['Soluong'])){
														echo $_SESSION['Soluong'];
													}		
											?>
								    	</span></a>
							    </li>
								<li class="bg-dark">
									<?php if(!isset($_SESSION["login"])){ ?>
								     <a class="nav-link" href="index.php?xem=dangnhaptt">Login</a>
								     <?php 
							        }
							        else{  ?>
					                  <a class="nav-link" href="index.php?xem=thongtin">
								    	<img src="img/user.png" alt="Logo" width="20px">
								    	 <?php  
					                          echo $_SESSION['login'];} 
								         ?>
								      </a> 
								</li>
      </ul>
      <form class="navbar-form navbar-right" action="index.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="tk">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Sreach</button>
      </form>
      
     
    </div><!-- /.navbar-collapse -->
  <!-- /.container-fluid -->
</nav>
	
</div>

