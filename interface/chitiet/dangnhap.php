<?php
  //session_destroy();
 ?>
	<div class="row">
    <div class="container"> 
	      <div class="col-12 col-sm-6 bg-white" >
	      <h1 style="text-align: center;"> <span class="badge badge-warning">ĐĂNG NHẬP MUA HÀNG</span></h1>
	 <form  class="was-validated" method="POST" >
     <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
     </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
     </div>
    <button type="submit" class="btn btn-primary bg-warning" name="sub">Login</button>
  </form>
 </div>
 <div class="col-12 col-sm-6 bg-white" >
        <h1 style="text-align: center;"> <span class="badge badge-warning">ĐĂNG KÝ THÔNG TIN</span></h1>
   <form class="was-validated" method="POST" >
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-group">
      <label for="uname">gmail:</label>
      <input type="email" class="form-control" placeholder="Enter mail" name="mail" required>
    </div>
    <div class="form-group">
      <label for="uname">Số Điện Thoại:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter numberphone" name="sdt" required>
    </div>
    <div class="form-group">
      <label for="uname">Đia Chỉ:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter diachi" name="diachi" required>
    </div>
    <button style=" margin-bottom: 10px;" type="submit" class="btn btn-primary bg-warning" name="submit">Đăng Ký Tài Khoản</button>
  </form>
 </div>
 
 </div>
</div>
 <?php
   if(isset($_POST["sub"])){
    $name=$_POST["name"];
    $pass=md5(trim($_POST["pass"]));
    $sql=$conn->prepare("select * from dangky where username=?");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(1,$name);
    $sql->execute();
    $result = $sql->fetch();
     if(count($result)> 0 && $result["password"] == $pass) {
       $_SESSION["login"]=$name;
      echo "<script>alert('đăng nhập thành công')</script>";
     }
      
    else{
      echo "<script>alert('tài khoản hoặc mật khẩu không tồn đúng')</script>";
    } 
   
   }


 ?>

  <?php
  if(isset($_POST["submit"])){
    $use=$_POST["uname"];
    $pass=$_POST["pswd"];
    $mail=$_POST["mail"];
    $sdt=$_POST["sdt"];
    $diachi=$_POST["diachi"];
   
   if(strlen($use)<4 or strlen($use)>50){
    $error="<script>alert('Tên Phải Chứa Từ 4-50 Ký Tự');</script>";
    echo $error;
   }
   if(is_numeric($use)){
    $error="<script>alert('Tên Đăng Nhập Không Hợp Lệ');</script>";
    echo $error;
   }
   if(!isset($error)){
    $sql=$conn->prepare("select * from dangky where username=:user");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindValue(":user",$use);
    $sql->execute();
    $username=$sql->fetch();
    if($username){
      echo "<script>alert('Tên Tài Khoản đã tồn Tại');</script>";
    }else{

      $matKhau=md5($pass);
      $sql1=$conn->prepare("INSERT INTO dangky(username,password,diachi,sdt,gmail) VALUES(?,?,?,?,?)");
      $sql1->bindValue(1, $use);
      $sql1->bindValue(2, $matKhau);
      $sql1->bindValue(3, $diachi);
      $sql1->bindValue(4, $sdt);
      $sql1->bindValue(5, $mail);

     $sql1->execute();
     echo "<script>alert('Chúc mừng bạn đăng ký thành công');</script>";
    }
   }
 }

 ?>