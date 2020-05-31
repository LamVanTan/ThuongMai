
     <div class="row">
        <div class="col-12 col-sm-12">
		   <h3 class="billing-heading">ĐƠN ĐẶT HÀNG</h3>
		</div>
	</div>
	<div class="row">
	         <div class="col-12 col-sm-12">
			 <div class="row bg-warning" style="border-style: solid; border-width: 1px;">
		         <div class="col-1 col-sm-2" style="border-right: 1px solid black;">ID SP</div>
			     <div class="col-3 col-sm-3" style="border-right: 1px solid black;">Tên SP</div>
			     <div class="col-3 col-sm-2" style="border-right: 1px solid black;">Giá</div>
			     <div class="col-1 col-sm-2" style="border-right: 1px solid black;">SL</div>
				 <div class="col-3 col-sm-3" style="border-right: 1px solid black;">Tổng Tiền</div>
			 </div> 
             </div>
      </div>
			 <?php 
				$sum=0;
				if(isset($_SESSION["cart"])){
				   foreach ($_SESSION["cart"] as $key => $value) {
				      $sum +=$value[4];
			  ?> 
	   <div class="row">  			
			 <div class="col-md-12">
			 <div class="row bg-light" style="border-style: solid; border-width: 1px;">
				 <div class="col-1 col-sm-2" style="border-right: 1px solid black;"><?php echo $value[5];?></div>
			     <div class="col-3 col-sm-3" style="border-right: 1px solid black;"><?php echo $value[0];?></div>
			     <div class="col-3 col-sm-2" style="border-right: 1px solid black;"><?php echo number_format($value[1])." VNĐ"; ?></div>
			     <div class="col-1 col-sm-2" style="border-right: 1px solid black;"><?php echo $value[3]; ?></div>
			     <div class="col-3 col-sm-3" style="border-right: 1px solid black;"><?php echo number_format($value[4])." VNĐ" ; ?></div>
			 </div>
			 </div>
		</div>
		     <?php } ?>	
		     <hr>
		         <p class="d-flex total-price">
		    		<h4 style="color: red;">Thành Tiền : <?php echo number_format($sum)." VNĐ"; ?></h4>
		    	 </p>
		     <?php }?>
			 

			 <?php  if (isset($_SESSION["login"])){
			 	 $use= $_SESSION["login"];
			 	    $sql=$conn->prepare("select * from dangky where username=:user");
				    $sql->setFetchMode(PDO::FETCH_ASSOC);
				    $sql->bindValue(":user",$use);
				    $sql->execute();
				    $row=$sql->fetch();
			  ?>
				<form action="index.php?xem=donhang" class="was-validated"  method="POST">
	          	  <div class="row align-items-end bg-warning">
	                <div class="col-6 col-sm-6">
	                <div class="form-group">
	                    <label for="lastname">Name</label>
	                    <input type="text" class="form-control" value="<?php echo $row["username"] ?>" name="ten" >
	                </div>
                    </div>
		            <div class="col-6 col-sm-6">
		            <div class="form-group">
	                	<label for="towncity">Địa chỉ</label>
	                    <input type="text" class="form-control" name="diachi" value="<?php echo $row["diachi"] ?>">
	                </div>
		            </div>
		            <div class="col-6 col-sm-6">
	                <div class="form-group">
	                	 <label for="phone">Phone</label>
	                     <input type="text" class="form-control" value="<?php echo $row["sdt"] ?>" name="sdt" >
	                </div>
	                </div>
	                <div class="col-6 col-sm-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                    <input type="text" class="form-control" value="<?php echo $row["gmail"] ?>" name="gmail" >
	                </div>
                    </div>
		            <div class="col-12 col-sm-12">
		            <div class="form-group">
		                 <label for="country">Phương Thức Thanh Toán</label>
		            	 <div class="select-wrap">
		                 <select name="pt" id="" class="form-control">
		                  	<option value="Trả Bằng Thẻ Ví">Trả Bằng Thẻ Ví</option>
		                    <option value="Trả Khi Giao Hàng Tới">Trả Khi Giao Hàng Tới</option>
		                    <option value="Thanh Toán Qua ATM">Thanh Toán Qua ATM</option>
		                 </select>
		                 </div>
		            </div>
		            </div>
	              </div><br>
	                    <button type="submit" class="btn btn-primary bg-info" name="sub"> Place an order </button><br><br>
				</form>

			<?php }?>
	    
    
<?php
  if(isset($_POST["sub"])){
     if(isset($_POST["ten"]) && isset($_POST["diachi"]) && isset($_POST["gmail"]) && isset($_POST["sdt"]) && isset( $_POST["pt"])){
	      $ten= $_POST["ten"];
	      $diachi= $_POST["diachi"];
	      $email= $_POST["gmail"];
	      $sdt= $_POST["sdt"];
	      $pt= $_POST["pt"];
		  $sql->setFetchMode(PDO::FETCH_ASSOC);
		  $sql=$conn->prepare("INSERT INTO oder(name,diachi,sdt,email,thanhtoan) VALUES(?,?,?,?,?)");
		  $sql->bindParam(1,$ten);
		  $sql->bindParam(2,$diachi);
		  $sql->bindParam(3,$sdt);
		  $sql->bindParam(4,$email);
		  $sql->bindParam(5,$pt);
		  $sql->execute();
          $last_id =$conn->lastInsertId();
          foreach ($_SESSION["cart"] as $key => $value) {
            $sql1=$conn->prepare("INSERT INTO chitietoder(id_khach,masp,tensp,gia,soluong,tongtien) VALUES(?,?,?,?,?,?)");	
	        $sql1->bindParam(1,$last_id);
	        $sql1->bindParam(2,$value[5]);
		    $sql1->bindParam(3,$value[0]);
		    $sql1->bindParam(4,$value[1]);
		    $sql1->bindParam(5,$value[3]);
		    $sql1->bindParam(6,$value[4]);
		    $sql1->execute();
         }
           echo "<script>alert('Chúc mừng bạn Đặt Hàng thành công');</script>";
          
     }
     
  }
 ?>


