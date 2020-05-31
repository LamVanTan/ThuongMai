<?php
session_start();
include("model/config.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Quản trị Website</title>
	<link rel="stylesheet" type="text/css" href="../css1/bootstrap.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
    <link href="bootstrap/css/main.css" rel="stylesheet" />
    <link href="bootstrap/css/prettyPhoto.css" rel="stylesheet" />
    <link href="bootstrap/css/price-range.css" rel="stylesheet" />
    <link href="bootstrap/css/responsive.css" rel="stylesheet" />
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