
<?php
 ob_start();
if (isset($_POST["sub"])) {
	unset($_SESSION["login"]);
	//header('location :index.php');
}

?>
<div class="row" style="margin-top: 20px;">
	

		   	<form method="POST">
		<button name="sub" type="submit">ĐẮNG XUẤT</button>
		</form>
		
<div class="col-12 col-sm-12"><a href="index.php">quay lại trang chủ</a></div>
</div>

<?php ob_end_flush();?>