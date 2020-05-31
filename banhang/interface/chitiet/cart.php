<?php ob_start();?>
<?php  if(!isset($_SESSION["cart"])){
  $_SESSION["cart"] = array();
 }?>
   
  <?php

    if(isset($_GET["id"])){
       $id=$_GET["id"];
       $tensp=$_GET["ten"];
       $gia=$_GET["gia"];
       $hinhanh=$_GET["img"];

       if(array_key_exists($id, $_SESSION["cart"])){
         $_SESSION["cart"][$id][3]+=1;
         $_SESSION["cart"][$id][4]=  $_SESSION["cart"][$id][3]*$gia;
       }else{
         $_SESSION["cart"][$id]= array($tensp,$gia,$hinhanh,1,$gia,$id);
       }
     }

    if(isset($_GET["up"])){
        
        $_SESSION["cart"][$_GET["up"]][3]+=1;
        $_SESSION["cart"][$_GET["up"]][4]= $_SESSION["cart"][$_GET["up"]][3]*$_SESSION["cart"][$_GET["up"]][1];
       
     }

    if (isset($_GET["down"])) {
       $sL= $_GET["sl"];
       if($sL>1){
       
       $_SESSION["cart"][$_GET["down"]][3]-=1;
       $_SESSION["cart"][$_GET["down"]][4]= $_SESSION["cart"][$_GET["down"]][3]*$_SESSION["cart"][$_GET["down"]][1];
       }else{
         unset($_SESSION["cart"][$_GET["down"]]);
       }
  }

    if(isset($_GET["delete"])){
       unset($_SESSION["cart"][$_GET["delete"]]);
    }
    ?>

   <div class="row">
    <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th>Tên Sản Phẩm</th>
      <th>Hình Ảnh</th>
      <th>Giảm</th>
      <th>Số Lượng</th>
      <th>Tăng</th>
      <th>Giá</th>
      <th>Xóa Sản Phẩm</th>
    </tr>
    <?php
     $sum=0;
      $dem=0;
      $thanhtien="";
      $stt=0;
     foreach ($_SESSION["cart"] as $key => $value) {
        $sum +=$value[4];
        $dem+=1;
        $stt+=1;
      ?>
    <tr>
       <td><?php echo $value[0]?></td>
       <td><img src="quantri/model/chitietsp/upload/<?php echo $value[2] ?>" class="img-responsive" width="70" height="30"></td>
       <td><a class="btn btn-danger btn-block btn-sm" href="index.php?xem=giohang&sl=<?php echo $value[3]?>&down=<?php echo $key; ?>" title="">-</a></td>
       <td> <?php echo $value[3]?></td>
       <td><a class="btn btn-danger btn-block btn-sm" href="index.php?xem=giohang&up=<?php echo $key; ?>" title="">+</a></td>
       <td><?php echo $tongtien=number_format($value[4],'0',',','.')." VND";  ?></td>
       <td><a class="btn-block btn btn-danger btn-sm" href="index.php?xem=giohang&delete=<?php echo $key; ?>" title="">Xóa</a></td>
     </tr>
    <?php }?>
  </table>
</div>
</td>
</td>
  <?php
  if($thanhtien==""){
    $_SESSION['Soluong']=0;
    echo "<a href='index.php'>Quay Lại Trang Chủ Để Mua Hàng</a>";
  }
  ?>
<div class="row" style="margin-top: 20px;">
    <div class="col-6 col-sm-6">
      <h5 style="background-color: yellow; float: left; "> Tổng Tiền Là : 
      <?php echo $thanhtien=number_format($sum,'0',',','.')." VND"; 
        $_SESSION['Soluong']=$dem;
         ?>
      </h5>
    </div>
    <div class="col-6 col-sm-6">
      <?php if(!isset($_SESSION["login"])){ ?>
      <a href="index.php?xem=dangnhaptt" style="float: right; background-color: pink; text-decoration: none;"> Thanh Toán</a>
      <?php }else{?>
      <a href="index.php?xem=donhang" style="float: right; background-color: pink; text-decoration: none;"> Thanh Toán</a>
      <?php }?>
  </div>
</div>
<?php ob_end_flush();?>




 