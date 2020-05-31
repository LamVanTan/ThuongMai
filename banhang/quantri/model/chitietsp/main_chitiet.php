<div class="row">
	<div class="col-md-3 col-sm-3 bg-white">
    <?php 
    if(isset($_GET['ac'])){
    	$clik1=$_GET['ac'];
    }else{
    	$clik1="";
    }

    if($clik1=="insert_chitiet"){
    	include("model/chitietsp/insert_chitiet.php");
    }
    if($clik1=="sua"){
    	include("model/chitietsp/edit_chitiet.php");
    }

    ?>

	</div>   
	<div class="col-md-9 col-sm-9 bg-white">
		<?php 
        include("model/chitietsp/listed_chitiet.php");
		?>


	</div>   
 </div>