<?php require_once('../../../properties.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/toastr/toastr.min.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/loading/loading.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>css/style.css">


	</head>
	<body>
		<div class="container-fluid">
			<div class="row  py-1 px-3  mb-5 borda-titulo">
				<h3 class="">Cadastro de Usuarios</h3>
			</div>
			<form id="formDados">
				<div class="row p-1 mb-2">
					<div class=" col-lg-1 col-12">
						<label class="mb-0"> código</label>
							<input type="text" id="codUser" name="codUser" class="form-control" disabled="" />
					</div>
					
					<div class="col-lg-5 col-12 mb-2">
							<label class="mb-0">Nome Completo</label>
							<input type="text" class="form-control value-required" id="name" name="name" placeholder=" "/>
					</div>
					<div class="col-lg-6 col-12 mb-2">
							<label class="mb-0">Nome de usuário</label>
							<input type="text" class="form-control value-required" id="userName" name="userName" placeholder=" "/>
					</div>
					<div class="col-lg-6 col-12 mb-2">
							<label class="mb-0">Nível de acesso</label>
							<select class="form-control" id="accessLevel" name="accessLevel" >
								<option hidden="" value="">Selecione</option>
								<option value="1">Administrador</option>
								<option value="2">Usuário</option>
								<option value="3">Visualizador</option>
							</select>
					</div>


					<div class="col-lg-6 col-12 mb-2">
						<label class="mb-0">E-mail</label>
						<input type="text" class="form-control" id="email" name="email" placeholder=" "/>
					</div>
					<div class="col-lg-6 col-12 mb-5">
						<label class="mb-0">Senha</label>
						<input type="password" class="form-control" id="password" name="password" placeholder=" "/>
					</div>
					<div class="col-lg-6 col-12 mb-5">
						<label class="mb-0">Digite a senha Novamente</label>
						<input type="password" class="form-control" id="rePassword" placeholder=" "/>
					</div>

					<div class="col-12 mt-2">
						<button type="button" class="btn btn-primary float-right ml-2 d-none" id="btnNewRegister">Novo Cadastro <i class="fas fa-plus"></i></button>
						<button type="button" class="btn btn-success float-right ml-2" id="btnSave">Salvar <i class="fas fa-save"></i></button>
						<button type="button" class="btn btn-warning float-right ml-2 text-white d-none" id="btnUpdate">Alterar <i class="far fa-edit"></i></button>
						<button type="button" class="btn btn-danger float-right ml-2 d-none" id="btnDelete">Deletar <i class="fas fa-trash-alt"></i></button>
					</div>
				</div>
			</form>	
		</div>	
		<script src="<?php echo HTTP_SERVER; ?>lib/jquery-3.1.1/jquery-3.1.1.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/popper.min.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/bootstrap.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/toastr/toastr.min.js"></script>
        <script src="<?php echo HTTP_SERVER; ?>lib/loading/Loading.class.js"></script>
        <script src="<?php echo HTTP_SERVER; ?>js/Validacao.class.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>js/usuario.Class.js"></script>

	</body>
</html>

