<?php
session_start();
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
<body style="background-color: gray;">
 <div class="container">
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
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
</body>
</html>