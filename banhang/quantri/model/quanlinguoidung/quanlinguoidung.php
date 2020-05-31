<?php
include("model/config.php");
 $sql=$conn->prepare("select * from dangky order by id desc");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
  

 ?>
 <div class="row bg-light">
  <div class="col-sm-12">
  	<h4 style="text-align: center; color: green;">Quản Lí NGười Dùng</h4>
<table class="table table-bordered">
    <thead style="background-color: black; color: red;">
      <tr>
      	<th>id</th>
        <th>username</th>
        <th>password</th>
        <th>địa chỉ</th>
        <th>sdt</th>
        <th>mail</th>
      </tr>
    </thead>
<?php  while ( $row=$sql->fetch()) {
	
 ?>
     <tbody>
      <tr>
      	<td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['diachi'];?></td>
        <td><?php echo $row['sdt'];?></td>
        <td><?php echo $row['gmail'];?></td>
    </tr>
    </tbody>
<?php } ?>
</table>
</div>
</div>