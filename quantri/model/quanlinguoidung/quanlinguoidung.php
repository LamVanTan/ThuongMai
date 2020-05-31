<?php
include("model/config.php");
 $sql=$conn->prepare("select * from dangky order by id desc");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
  

 ?>
 <div class="row">
    <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
   
      <tr style="background-color: black;color: red;">
      	<th>id</th>
        <th>username</th>
        <th>password</th>
        <th>địa chỉ</th>
        <th>sdt</th>
        <th>mail</th>
      </tr>
    
<?php  while ( $row=$sql->fetch()) {
	
 ?>
     
      <tr>
      	<td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['diachi'];?></td>
        <td><?php echo $row['sdt'];?></td>
        <td><?php echo $row['gmail'];?></td>
    </tr>
   
<?php } ?>
</table>
</div>
</div>
</div>