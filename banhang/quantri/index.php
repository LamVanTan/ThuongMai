<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Quản Trị Website</title>
	<link rel="stylesheet" type="text/css" href="../css1/bootstrap.css">
	<link href="bootstrap/css/animate.css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
    <link href="bootstrap/css/main.css" rel="stylesheet" />
    <link href="bootstrap/css/prettyPhoto.css" rel="stylesheet" />
    <link href="bootstrap/css/price-range.css" rel="stylesheet" />
    <link href="bootstrap/css/responsive.css" rel="stylesheet" />
</head>
<body style="background-color: gray;">
 <div class="container-fluid ">
	<?php
	if(!isset($_SESSION['dangnhap'])){
	header("location:dangnhap.php");
}
     include("model/header.php");
     include("model/menu.php");
     include("model/content.php");
     include("model/footer.php");
	?>	
 </div>
 <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery.scrollUp.min.js"></script>
	<script src="bootstrap/js/price-range.js"></script>
    <script src="bootstrap/js/jquery.prettyPhoto.js"></script>
    <script src="bootstrap/js/main.js"></script>
    <script type="js/bootstrap.min.js"></script>
</body>
</html>