<?php

  if(isset($_GET["trang"])){
  	$page=$_GET["trang"];
  }else {
  	$page=1;
  }
  if( $page=="" || $page==1 ){
  	$trang1=0;
  }else{
  	$trang1=($page*18)-18;
  }
  $sql=$conn->prepare("select * from chitiethang limit $trang1,18");
  $sql->setFetchMode(PDO::FETCH_ASSOC);
  $sql->execute();
  ?>


  <div class="row">
  	<div class="col-md-12" style="text-align: center; padding: 20px 0 50px 0;">
     <span class="badge badge-pill badge-warning">Tất Cả Sản Phẩm </span></div>
  </div>

 <div class="row">
     <?php while ($row_all=$sql->fetch()){ ?>

  	 <div class="col-xs-6 col-md-2 sp" >
            <div class="row sp-list">
                <div class="col-md-12 list-sp">
                  <img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" class="img-responsive img-sp" style="width:auto; height:100px;">
                  <b><?php echo $row_all["tenchitiet"];?></b>
                  <p><?php echo $money=number_format($row_all["gia"],'0',',','.')." VND";?></p>
                  <a href="index.php?xem=thongtinsp&id=<?php echo $row_all['id_chitiet']?>" title="">Xem Chi Tiet</a>
                  
                </div>
            </div>
  	</div>
    <?php
    }?>
 </div>
 <div class="row pagination-web">
     <div class="container">
  	<div class="col-md-12">

      <nav aria-label="Page navigation float-right">
          <ul class="pagination pagination-sm">
            <?php
           for($i=1; $i <=10; $i++) { 
            if($page==$i){  
        ?>
         <li class="page-item"><a class="page-link" style="background-color: red;"><?php echo $i; }else {?></a></li>
         <li class="page-item" class="active"><a class="page-link" href="?trang=<?php echo $i; ?>"><?php echo $i;} }?></a>
        </li>
          </ul>
      </nav>
  	  <ul class="pagination">
    		
     </ul>
  	</div>
  </div>
</div>


<style type="text/css">
   .sp{
    height: 205px;
   }
   .img-sp{
     min-width: auto;
     height: 100px;
     margin-bottom: 5px;

     }

     .sp{
      padding: 5px 30px;
     }

     .list-sp b{
       
       text-align: center;
     }

   
</style>



