<?php
include("../config.php");
   
if(isset($_POST['sub'])){
	$ten=$_POST['text'];
	$thutu=$_POST['ttu'];
    $sql=$conn->prepare("select * from loaihang where tenthietbi=:ten");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(":ten",$ten);
    $sql->execute();
    $rows = $sql->fetch();
    if($rows){
    	echo '<script>confirm("Thiết Bị Đã có");</script>';
    	//header("location:../../index.php?xem=loaisanpham&ac=insert");
    }
    else{
    	$sql1=$conn->prepare("INSERT INTO loaihang(tenthietbi, thutu) VALUES (?,?)");
    	 $sql1->bindParam(1,$ten);
         $sql1->bindParam(2,$thutu);
         $sql1->execute();
    	header("location:../../index.php?xem=loaisanpham&ac=insert");
    }

}
elseif (isset($_POST["submit"])) {
    $tenloai=$_POST["text"];
    $thutu=$_POST["ttu"];
    $id=$_GET["id"];

    $sql_sua=$conn->prepare("update loaihang set tenthietbi='$tenloai',thutu='$thutu' where id_loai='$id'");
    $sql_sua->execute();
    header("location:../../index.php?xem=loaisanpham&ac=insert&id=".$id);
}
 else{
        $id=$_GET["id"];
        $sql_xoa=$conn->prepare("Delete from loaihang where id_loai='$id'");
        $sql_xoa->execute();
        header("location:../../index.php?xem=loaisanpham&ac=insert");
 }



?>