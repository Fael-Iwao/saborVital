<?php require_once('../../../properties.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>lib/fontawesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>css/style.css">
		<style type="text/css">
			.title{
				font: bold 18pt arial;
			}
			.head-title{
				background-color: #fff;
				border-bottom: 2.5px solid green;
				box-shadow: 2px 2px 12px #ccc;
			}
			.mt-7{
				margin-top: 80px;
			}

			

		</style>
	</head>
	<body>
		<div class="fixed-top head-title mb-5">
			<label class=" pl-4 mt-3 title">Listagem de Feriado</label>

			<button type="button" class="filtro m-3 btn btn-success float-right" data-target=".modalFeriado" data-toggle="modal">
				<i class="fas fa-search" aria-hidden="true"></i> 
				<span class="d-none d-md-inline-block">FILTROS</span>
			</button>
		</div>
		<div class="container-fluid mt-7">
			<div class="table-responsive mt-3">
				<table class="table table-sm table-bordered table-sv">
					<thead>
						<tr>
							<th scope="col" rowspan="2" class="align-middle p-4 py-2">Código</th>
							<th scope="col" colspan="6" class="py-2"> Usuário</th>
							<th scope="col" colspan="2" class="w-25 py-2">Alteração</th>
							<th scope="col" rowspan="2" class="align-middle w-20 py-2">Ação</th>
						</tr>
						<tr class="titulo-tabela">
							<td scope="col" class="py-2 w-17">Nome Completo</td>
							<td scope="col" class="py-2 w-17">Nome de usuário</td>
							<td scope="col" class="py-2 w-17">E-mail</td>
							<td scope="col" class="py-2 w-17">Nivel de acesso</td>
							<td scope="col" class="py-2 w-17">Último Login</td>
							<td scope="col" class="py-2 w-17">Situação</td>
							<td scope="col" class="py-2 w-17">Usuário</td>
							<td scope="col" class="py-2 w-17">Data</td>
						</tr>
					</thead>
				</table>
			</div>
		</div>
		<form  id="reset">
			<div class="modal left fade  modalFeriado" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content overflow-hidden">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Filtros de Pesquisa</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4 class="mb-3">Feriado</h4>

							<label for="userName" class="m-0">Nome do usuario:</label>
							<input type="text" class="form-control mb-2" name="userName" id="userName"  placeholder="">
			
							<button class="btn btn-primary" id="btnfilter" data-dismiss="modal"><i class="fa fa-search" aria-hidden="true"></i>
								Pesquisar</button>
							<button type="reset" class="btn btn-warning text-white float-right"><i class="fas fa-eraser"></i>
								limpar</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script src="<?php echo HTTP_SERVER; ?>lib/jquery-3.1.1/jquery-3.1.1.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/popper.min.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/bootstrap.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/handlebars/handlebars-v4.0.12.min.js"></script>
		<script id="dados-template" type="text/x-handlebars-template">
			{{#each elements}}

			{{/each}} 
		</script>

		<script id="dados-historico" type="text/x-handlebars-template">
			{{#each elements}}

			{{/each}} 
		</script>

	</body>
</html>

