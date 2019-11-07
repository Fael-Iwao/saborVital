<?php require_once('../properties.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>css/style.css">
		<style type="text/css">
			#home .round-circle{
			    width: 140px;
			    height: 140px;
			    border-radius: 50%;
			    margin: auto;
			    -webkit-box-shadow: 10px 10px 31px -10px rgba(147, 90, 42, .5);
			    -moz-box-shadow: 10px 10px 31px -10px rgba(147, 90, 42, .5);
			    /*box-shadow: 8px 8px 80px 14px rgba(147, 90, 42, .5);*/
			    box-shadow: 15px 15px 41px -20px rgba(147, 90, 42, .7);

			    transition: .5s;
			}

			#home .round-circle:hover{
				-webkit-box-shadow: 10px 10px 31px -10px rgba(147, 90, 42, .7);
			    -moz-box-shadow: 10px 10px 31px -10px rgba(147, 90, 42, .7);
			    box-shadow: 8px 8px 70px 14px rgba(147, 90, 42, .5);

			}
			#home h1{
			    font-family: Montserrat;
			    color: #935a2a;
			}

			#home p{
			    font-family: Roboto-Regular;
			    color: #9a9a9a;
			}

			#home div a.link-unstyled{
				text-decoration: none;
				color: #108b22;
			}

			.card-home{
				font-size: 6em !important;
			}
		</style>

	</head>
	<body>
		<div id="home" class="container">
			<center> <h1>Sabor Vital</h1> </center>
			<hr>
			 <div class="row justify-content-center align-items-start mt-5 pt-5 text-center">
        <div class="col-md-4">
            <a href="javascript:void(0)" class="round-circle d-flex justify-content-center align-items-center mb-4 link-unstyled" onclick="link('')">
				<i class="fas fa-chart-pie card-home"></i>
            </a>
            <h4 class="text-montserrat text-primary-1">Dashboard</h4>
        </div>
        <div class="col-md-4">
            <a href="javascript:void(0)" class="round-circle d-flex justify-content-center align-items-center mb-4 link-unstyled" onclick="link('cadastros.fragment.php',undefined, true)">
            	<i class="fas fa-plus-circle card-home"></i>
            </a>
            <h4 class="text-montserrat text-primary-1">Cadastros</h4>
           
        </div>
        <div class="col-md-4">
            <a href="javascript:void(0)" class="round-circle d-flex justify-content-center align-items-center mb-4 link-unstyled" onclick="link('listagens.fragment.php',undefined,true)">
            	<i class="fas fa-book-open card-home"></i>
            </a>
            <h4 class="text-montserrat text-primary-1">Listagens</h4>
            <!-- icon-cadastros.png -->
        </div>
      
    </div>


		</div>			
		<script src="<?php echo HTTP_SERVER; ?>lib/jquery-3.1.1/jquery-3.1.1.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/popper.min.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/bootstrap.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>js/main.js"></script>


	</body>
</html>

