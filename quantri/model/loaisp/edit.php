<?php
include("model/config.php");
// $tenmaychu="localhost";
// $tentaikhoan="root";
// $matkhau="";
// $csdl="banhang";
// $conn= mysqli_connect($tenmaychu,$tentaikhoan,$matkhau,$csdl) or die("không kết nối đươc");
// mysqli_query($conn,"SET NAMES 'UTF8'");
    $sql=$conn->prepare("select * from loaihang where id_loai=$_GET[id]");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(1,$name);
    $sql->execute();
    $row_sua = $sql->fetch();
?>


<form action="model/loaisp/xuly.php?id=<?php echo $row_sua['id_loai']; ?>" method="POST">
	<div>Sua thông Tin</div>
    <div class="form-group">
      <label for="email">Thiết Bị</label>
      <input type="text" class="form-control" name="text" value="<?php echo $row_sua['tenthietbi'];  ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Thứ Tự</label>
      <input type="text" class="form-control"  name="ttu" value="<?php echo $row_sua['thutu']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">edit</button>
</form>