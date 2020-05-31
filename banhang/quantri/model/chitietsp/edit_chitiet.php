<?php
include("model/config.php");
// $tenmaychu="localhost";
// $tentaikhoan="root";
// $matkhau="";
// $csdl="banhang";
// $conn= mysqli_connect($tenmaychu,$tentaikhoan,$matkhau,$csdl) or die("không kết nối đươc");
// mysqli_query($conn,"SET NAMES 'UTF8'");
    $sql=$conn->prepare("select * from chitiethang where id_chitiet=$_GET[id]");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(1,$name);
    $sql->execute();
    $rows = $sql->fetch();
?>

    <form action="model/chitietsp/xuly_chitiet.php?id=<?php echo $rows["id_chitiet"];?>" method="POST" 
      enctype="multipart/form-data">
      <div style="background-color: red; color: black; text-align: center;">EDIT</div>
        <div class="form-group">
          <label for="">Tên Thiết Bị</label>
          <input type="text" class="form-control" name="ten" value="<?php echo $rows["tenchitiet"];?>">
        </div>
        <div class="form-group">
          <label for="">Giá</label>
          <input type="text" class="form-control" value="<?php echo $rows["gia"];?>" name="gia">
        </div>
        <div class="form-group">
          <label for="">hình ảnh</label>
          <input type="file" class="form-control"name="img"><img src="model/chitietsp/upload/<?php echo $rows["hinhanh"];?>" width="40px" height="60px">
        </div>
        <div class="form-group">
          <label for="">Mô Tả</label>
          <textarea name="mota" cols="30" rows="15"><?php echo $rows["mota"];?></textarea>
        </div>
        <div class="form-group">
          <label for="">thứ Tự</label>
          <input type="text" class="form-control" value="<?php echo $rows["thutu"];?>" name="ttu">
        </div>
        <div class="form-group">
          <label for="">Hãng Thiết Bị</label>
          <input type="text" class="form-control" value="<?php echo $rows["hangthietbi"];?>" name="hangtbi">
        </div>
<?php

    $sql_loai=$conn->prepare("select * from loaihang");
    $sql_loai->setFetchMode(PDO::FETCH_ASSOC);
    $sql_loai->bindParam(1,$name);
    $sql_loai->execute();
    
?>
         <div class="form-group">
          <label for="">loai sản phẩm</label>
          <select name="id_loai" class="custom-select">
<?php
        while ($rows1 = $sql_loai->fetch()) {
         if($rows["id_loai"]==$rows1["id_loai"]){
?>
         <option selected="selected" value="<?php echo $rows1['id_loai'];  ?>"><?php  echo $rows1['tenthietbi']; ?></option>

<?php
    }else{
?>
    <option value="<?php echo $rows1["id_loai"]; ?>"><?php echo $rows1["tenthietbi"];?></option>

<?php } 
  }
?>
      </select>
        </div><br>
        <div style=" margin-left: 100px;" ><button type="submit" class="btn btn-primary" name="n_sua">edit</button></div>
</form>