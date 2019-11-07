<?php 
	session_start();
	require_once('properties.php'); 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>css/login.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/fontawesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/toastr/toastr.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/loading/loading.css">
	</head>
	<body>
		<div class="modal-dialog text-center col-12">
			<div class="col-9 main-section">
				<div class="modal-content">
					<div class="col-12 user-img mb-1">
						<img src="img/logoGde.png">
					</div>
					
					<div class="col-md-12 mt-0 mb-2"> <label class="text-white text-size-1">Sistema Gerenciador</label></div>

					<div class="col-md-12 form-input">

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Digite seu Login" id="login">
						</div>
					
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Digite sua Senha" id="pwd">
						</div>
						<button type="button" class="btn btn-success mb-1"  onclick="login.login()" id="btnLogin">Login</button>
						<button type="button" class="btn btn-success mb-1" hidden="" id="btnCadastro">Cadastro</button>
					</div>
					<div class="col-12 forgot">
						<a href="#" class="mb-0 " id="linkLogin" hidden=""">Login</a> <br>
						<a href="#" class="mt-0">Esqueceu a senha ? </a>
					</div>
				</div>
			</div>
		</div>
		<script src="<?php echo HTTP_SERVER; ?>lib/jquery-3.1.1/jquery-3.1.1.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/popper.min.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/bootstrap.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/toastr/toastr.min.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/loading/Loading.class.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>js/Login.class.js"></script>


	</body>
</html>

