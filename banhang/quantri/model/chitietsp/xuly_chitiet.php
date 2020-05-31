<?php
include("../config.php");
   
if(isset($_POST["submit"])){
	$ten_thietbi=$_POST["ten"];
	$gia_thietbi=$_POST["gia"];
	$imgs=$_FILES["anh"] ["name"];
    $img_tmp=$_FILES["anh"] ["tmp_name"];
    move_uploaded_file($img_tmp,"upload/".$imgs);
	$mota_chitiet=$_POST["mota"];
	$thutu_chitiet=$_POST["ttu"];
	$id_chitiet=$_POST["id"];
	$hang=$_POST["hang"];
    
    $sql=$conn->prepare("select * from chitiethang where tenchitiet=:tenthietbi");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(":tenthietbi",$ten_thietbi);
    $sql->execute();
    $rows = $sql->fetch();
	if($rows){
		echo '<script>confirm("tên sản phẩm đã có");</script>';

	}else {
		  $sql1=$conn->prepare("INSERT INTO chitiethang(tenchitiet,gia,hinhanh,mota,thutu,id_loai,hangthietbi) VALUES(?,?,?,?,?,?,?)");
	      $sql1->bindValue(1, $ten_thietbi);
	      $sql1->bindValue(2, $gia_thietbi);
	      $sql1->bindValue(3, $imgs);
	      $sql1->bindValue(4, $mota_chitiet);
	      $sql1->bindValue(5, $thutu_chitiet);
          $sql1->bindValue(6, $id_chitiet);
	      $sql1->bindValue(7, $hang);
          $sql1->execute();
          echo '<script>confirm("thành công");</script>';
		 header("location:../../index.php?xem=thongtinsanpham&ac=insert_chitiet");

	}

}
//sua dữ liệu
else if(isset($_POST["n_sua"])){
	$ten_thietbi=$_POST["ten"];
	$gia_thietbi=$_POST["gia"];
	$imgs=$_FILES["img"] ["name"];
    $img_tmp=$_FILES["img"] ["tmp_name"];
    move_uploaded_file($img_tmp,"upload/".$imgs);
	$mota_chitiet=$_POST["mota"];
	$thutu_chitiet=$_POST["ttu"];
	$id_chitiet1=$_POST["id_loai"];
	$hang1=$_POST["hangtbi"];
	$id=$_GET["id"];
	if($imgs!= null){
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql2=$conn->prepare("UPDATE chitiethang SET tenchitiet= '$ten_thietbi' ,gia='$gia_thietbi', hinhanh= '$imgs', mota='$mota_chitiet', thutu= '$thutu_chitiet',id_loai= '$id_chitiet1',hangthietbi='$hang1' where id_chitiet='$id' ");
		 $sql2->execute();
    }
    else{
        $sql3=$conn->prepare(" UPDATE chitiethang SET tenchitiet='$ten_thietbi' ,gia='$gia_thietbi', mota='$mota_chitiet', thutu='$thutu_chitiet',id_loai='$id_chitiet1',hangthietbi='$hang1' where id_chitiet='$id' ");
        $sql3->execute();
    }
      
     header("location:../../index.php?xem=thongtinsanpham&ac=insert_chitiet&id=".$id);
 }
 //xóa dữ liệu
else{
  	$masp=$_GET["id"];
  	$sql_xoa=$conn->prepare("delete from chitiethang where id_chitiet=:id ");
  	 $sql_xoa->bindValue(":id", $masp);
  	$sql_xoa->execute();
  	header("location:../../index.php?xem=thongtinsanpham&ac=insert_chitiet");
}


?>