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

// $tenmaychu="sql310.byethost4.com";
// $tentaikhoan="b4_25694290";
// $matkhau="2912000";
// $csdl="b4_25694290_ThuongMai;
// try {
// $conn = new PDO("mysql:host=$tenmaychu; dbname=$csdl", $tentaikhoan, $matkhau);
// 		$conn->exec('set names utf8mb4');
// } catch (Exception $e) {
// 	echo 'Connection failed' . $e->getMessage();
// }

?>