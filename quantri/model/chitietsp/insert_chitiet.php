<?php
include("model/config.php");
 $sql=$conn->prepare("select * from loaihang order by id_loai desc");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
    
?>

<form action="model/chitietsp/xuly_chitiet.php" method="POST" enctype="multipart/form-data" style="margin-top: 5px;">
	<div style="background-color: red; color: black; text-align: center;">INSERT</div>
    <div class="form-group">
      <label for="">Tên Thiết Bị</label>
      <input type="text" class="form-control"  placeholder="thiet bi" name="ten">
    </div>
    <div class="form-group">
      <label for="">Giá</label>
      <input type="text" class="form-control"  placeholder="giá " name="gia">
    </div>
    <div class="form-group">
      <label for="">hình ảnh</label>
      <input type="file" class="form-control"  placeholder="hình ảnh" name="anh">
    </div>
    <div class="form-group">
      <label for="">Mô Tả</label>
      <textarea name="mota" cols="30" rows="15"></textarea>
    </div>
    <div class="form-group">
      <label for="">thứ Tự</label>
      <input type="text" class="form-control"  placeholder="thứ tự" name="ttu">
    </div>
    <div class="form-group">
      <label for="">Hãng Thiết Bị</label>
      <input type="text" class="form-control"  placeholder="hãng thiết bị" name="hang">
    </div>

    <div class="form-group">
      <label for="">loai sản phẩm</label>
    <select name="id" class="custom-select">
    <?php
    while ($rows = $sql->fetch()) {
    
    ?>
    <option value="<?php echo $rows["id_loai"]; ?>"><?php echo $rows["tenthietbi"];?></option>
   <?php }
   ?>
  </select>
    </div><br>
    <div style=" margin-bottom: 50px;" ><button type="submit" class="btn btn-primary" name="submit">Insert</button></div>
</form>
<style type="text/css" media="screen">
  .row {
    margin-right: -15px;
    margin-left: -15px;
    margin-top: 0px !important;
}
</style>