
<?php 
 if(isset($_GET["idsp"])){
   $idsp=$_GET["idsp"];
   $cart=$conn->prepare("select tenchitiet,hinhanh,gia from chitiethang where id_chitiet=$idsp");
   $cart->setFetchMode(PDO::FETCH_ASSOC);
   $cart->execute();
   $cart_row=$cart->fetch();
   // while ( $cart_row=$cart->fetch()) {
   //    $Ten = $cart_row["tenchitiet"];
   //    $hinhAnh = $cart_row["hinhanh"];
   //    $gia = $cart_row["gia"];
   // }
    
  if(!isset($_SESSION["cart"])){
      $_SESSION["cart"]=array();
  }
     if(array_key_exists($idsp, $_SESSION["cart"])){
        // echo "co id<br>";
          // $_SESSION["cart"][$idsp][3] = $_SESSION["cart"][$idsp][3]+1; 
          // $_SESSION["cart"][$idsp][4] = $_SESSION["cart"][$idsp][2]*$_SESSION["cart"][$idsp][3];
          $_SESSION["cart"][$idsp]["soLuong"] = $_SESSION["cart"][$idsp]["soLuong"]+1;
          $_SESSION["cart"][$idsp]["tongTien"] = $_SESSION["cart"][$idsp]["tongTien"]*$_SESSION["cart"][$idsp]["soLuong"];
     }else {
       //echo "chua co id";
          $_SESSION["cart"][$idsp]=$cart_row;
          $_SESSION["cart"][$idsp]["soLuong"]=1;
          $_SESSION["cart"][$idsp]["tongTien"]=$_SESSION["cart"][$idsp]["gia"]*$_SESSION["cart"][$idsp]["soLuong"];
        // $_SESSION["cart"][$idsp]=array($Ten,$hinhAnh,$gia,1,$gia);
        // $_SESSION["cart"][$idsp]["soLuong"]=1;
        // $_SESSION["cart"][$idsp]["tongTien"]=$_SESSION["cart"][$idsp]["gia"]*$_SESSION["cart"][$idsp]["soLuong"];
     
     }
  
  // echo "<pre>";
  //      print_r($_SESSION["cart"]);   
  //    echo "</pre>";
  //session_destroy();
  
  
 }
 if(isset($_GET["delete"])){
       unset($_SESSION["cart"][$_GET["delete"]]);
    }
 ?>
 <div class="row" id="Cart">
  
    <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th>Tên Sản Phẩm</th>
      <th>Hình Ảnh</th>  
      <th>Giá</th>
      <th>Giảm</th>
      <th>Số Lượng</th>
      <th>Tăng</th>
      <th>Tổng Tiền</th>
      <th>Xóa Sản Phẩm</th>
    </tr>
 <?php
    $thanhTien=0;
    foreach ($_SESSION["cart"] as $key => $value) {
        $giaBan=number_format($value["gia"],0,',','.');
        $tongTien=number_format($value["tongTien"],0,',','.');
      
        $thanhTien +=$value["tongTien"];
   
 ?>
    <tr>
       <td><?php echo $value["tenchitiet"];?></td>
       <td><img src="quantri/model/chitietsp/upload/<?php echo $value["hinhanh"] ?>" class="img-responsive" width="70" height="30"></td>
       <td><span class="price"><?php echo $giaBan.' VND'; ?></span></td>
       <td><button type="submit" onclick="getInfo()">-</button></td>
       <td><input type="" name="" class="soLuong" value="<?php echo $value["soLuong"];  ?>"></td>
        <td><button type="submit">+</button></td>
       <td><span class="total"><?php echo $tongTien.' VND'; ?></span></td>
       <td>
        <a class="btn-block btn btn-danger btn-sm" href="index.php?xem=giohang&delete=<?php echo $key; ?>" title="">Xóa</a>
      </td>
     </tr>
 <?php }?>
 <tr>
   <td colspan="4"><b>Thành Tiền</b></td>
   <td><?php echo number_format($thanhTien,0,',','.').' VND';?></td>
   <td></td>
 </tr>
  </table>
</div>
</div>
</div>


<!--  <script type="text/javascript">
      $(".soLuong").change(function(){
         var soLuong= $(this).val();
         var parent=$(this).parents('tr');
         var giaBan=parent.find('.price').text();
         var tongTien=parent.find('.total');
         var soLuong1=Number(soLuong);
         var giaBan1= Number(giaBan);
         var toTal= Number(soLuong1*giaBan1);
         alert(toTal);
      });
 
 </script> -->

