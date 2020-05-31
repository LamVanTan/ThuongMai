<?php
session_start();
include("model/config.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebSite Bán Hàng Công Nghệ</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
</head>
<body>
 <div class="container ">
 	<div class="row">
	      <div class="col-sm-6 bg-white">
	      <h1 style="text-align: center;"> <span class="badge badge-warning">LOGIN QUẢN TRỊ</span></h1>
	 <form action="dangnhap.php" class="was-validated" method="POST" >
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
 
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
     
    </div>
  
    <button type="submit" class="btn btn-primary bg-warning" name="sub">Login</button>
  </form>
 </div>
 </div>
  </div> 
<script type="js/bootstrap.min.js"></script>
</body>
</html>


<?php
if(isset($_POST["sub"])){
    $name=$_POST["uname"];
    $pass=$_POST["pswd"];

    $sql=$conn->prepare("select * from login where username=?");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(1,$name);
    $sql->execute();
    $result = $sql->fetch();
     if(count($result)> 0 && $result["password"] == $pass) {
       $_SESSION["dangnhap"]=$name;
         header("location:index.php");
	}
	else{
		echo "<script>alert('tài khoản không đúng');</script>";
		//header("location:dangnhap.php");
	}
}




?>