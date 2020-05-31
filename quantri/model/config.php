<?php
$tenmaychu="localhost";
$tentaikhoan="root";
$matkhau="";
$csdl="banhang";
try {
$conn = new PDO("mysql:host=$tenmaychu; dbname=$csdl", $tentaikhoan, $matkhau);
		$conn->exec('set names utf8mb4');
} catch (Exception $e) {
	echo 'Connection failed' . $e->getMessage();
}

// $tenmaychu="localhost";
// $tentaikhoan="id13780704_root";
// $matkhau="0Yw0P$4oOW&Wo&Ej";
// $csdl="id13780704_banhang2020";
// try {
// $conn = new PDO("mysql:host=$tenmaychu; dbname=$csdl", $tentaikhoan, $matkhau);
// 		$conn->exec('set names utf8mb4');
// } catch (Exception $e) {
// 	echo 'Connection failed' . $e->getMessage();
// }

?>