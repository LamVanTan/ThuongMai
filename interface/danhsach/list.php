
<div class="row">
	<div class="col-12 col-sm-12">
	<div class="list-group">
		<h4 style="background-color: yellow;text-align:center;"> Thiết Bị</h4>
		<?php
		$sql=$conn->prepare("select * from loaihang");
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		$sql->execute();
		while ($row=$sql->fetch()) {	
		?>
	    <a href="index.php?xem=sanpham&id=<?php echo $row['id_loai'];?>"
	     class="list-group-item list-group-item-action">
	     <?php echo $row["tenthietbi"]; }?></a> 
    </div>
	</div>
</div>



