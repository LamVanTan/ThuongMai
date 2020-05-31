<!DOCTYPE html>
<html>
<head>
	<title>Mạng Xã Hội</title>
	<meta name="_token" content="{!! csrf_token() !!}" />
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<style type="text/css">
		*{
			font-family: "montserrat",sans-serif;
		}
		
		.form_login{
			position: absolute;
			top: 0;
			left:0;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(45deg,#9fbaa8,#31354c);
			transition: 0.4s;
		}
		
		.login_form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			text-align: center;
		}
		#txt{
			display: block;
			width: 250px;
			padding: 10px 10px;
			outline: none;
			border-radius: 8px;
			margin: 10px 0;
			box-sizing: border-box;
			background-color:#EEEEEE;
			text-align: center;
			border:none;
            
		}
	 #btn_sub{

		   width: 250px;
			padding: 10px 10px;
			outline: none;
			border-radius: 8px;
			margin: 5px 0;
			background-color:#111111;
			text-align: center;
			border:none;
			color: white;
	}
    .colse{
    	position: absolute;
    	left:1300px;
    	top: 20px;
    	font-size:30px;
    	cursor: pointer;

    }
    
    .btn_show_login{
    	width: 190px;
    	padding: 10px 0px;
    	margin: 10px 5px;
    	border-radius: 10px;
    	text-align: center;
    	border:none;
    	cursor: pointer;
    }
    .btn_show_register{
    	position: relative;
    	width: 100px;
    	padding: 10px 0px;
    	margin: 10px 0;
    	border-radius: 10px;
    	text-align: center;
    	border:none;
    	cursor: pointer;
    }
    .showed{
    	left:0;
    	
       
    }

/*//dăng ký*/
    .form_register{
			position: absolute;
			top:0;
			left:-100%;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(45deg,#9fbaa8,#31354c);
			transition: 0.4s;
			color: white;
		}

	
    .showed_register{
    	left:0;
    }
   .form_login h1{
    	position: relative;
    	left: 43%;
    	top: 25%;
    	margin-left: 5px;

    	
    }

    .form_login a{
    	position: relative;
    	left: 54%;
    	top:320px;
    }
    .form_login a:hover{
    	color: red;
    }

    /*đăng kí*/
    .form_register h1{
    	position: relative;
    	left: 45%;
    	top: 25%;
    }
	</style>
</head>
<body>



	  <div class="form_login">
	  	
	  	<h1>Đăng Nhập</h1>
	  	<a class="btn_show_register">Đăng Ký</a>
	  	<form class="login_form">
	  		<input type="text" name="textuser" id="txt" placeholder="Username"/>
	  		<input type="password" name="textpass" id="txt" placeholder="Password"/>
	  		<input type="submit" name="submit" id="btn_sub" value="Đăng Nhập">
	  	</form>
	  
	  </div>

	  
	  <div class="form_register">
		  	<div class="colse">
		  		<i class="fas fa-times-circle"></i>
		  	</div>
		  	<h1>Đăng Ký</h1>
		  	<form class="login_form">
		  		<input type="text" name="textuser" id="txt" placeholder="Username"/>
		  		<input type="password" name="textpass" id="txt" placeholder="Password"/>
		  		<input type="submit" name="submit" id="btn_sub" value="Đăng Ký">
		  	</form>
	  </div>

</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$(".btn_show_register").click(function(){
				$(".form_register").toggleClass("showed_register");
			});
		$(".colse").click(function(){
				$(".form_register").toggleClass("showed_register");
		});
		
	});
	
</script>




