<!-- Sidebar  -->
			<nav id="sidebar" class="">
				<div class="sidebar-header text-center">
					
					<!-- <Label id="sidebarCollapse" class="text-montserrat" ></Label> -->
					<button type="button" id="sidebarCollapse" class="btn button-primary-1 float-right">
						<i class="fas fa-bars"></i>
					</button>
				</div>

				<ul class="list-unstyled components pt-0">
					<li class="px-auto mt-0">
						<center>
							<img src="img/logoGde.png" class="img-responsive img-circle h-75 w-75">
							<!-- <h3 class="text-montserrat">Rafael Iwao</h3>  -->
							<!-- <label> <i class="fas fa-key"></i> Redefinir Senha</label> -->
						</center>
							<hr>

					</li>
					<li class="menu active" id="home" title="home">	
						<a href="javascript:void(0)" onclick="link('pages/homepage.fragment.php','home')">
							<i class="fas fa-home" ></i>
							<span>HOME</span>
						</a>
					</li>

					<li class="menu" id="dashboard" title="dashboard">	
						<a href="javascript:void(0)" onclick="link('modulos/dashboard/fragment/dashboard.fragment.php','dashboard')">
							<i class="fas fa-chart-pie" ></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="" title="Cadastros">
						<a href="#cadSubMenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
							<i class="fas fa-plus-circle"></i>
							<span> Cadastros </span>
						</a>
						<ul class="collapse list-unstyled" id="cadSubMenu">
							<li  class="menu" id="liCadastro1" title="cadastro de usuário">
								<a href="javascript:void(0)" onclick="link('modulos/usuarios/fragment/cadastroUsuario.fragment.php','liCadastro1')">
									<i class="fas fa-user-plus"></i>
									<span>Cadastro de usuarios</span>
								</a>
							</li>
							<li class="menu" id="liCadastro2">	
								<a href="javascript:void(0)" onclick="link('generic2.html','liCadastro2')">
									<i class="far fa-plus-square"></i>
									generic2
								</a>
							</li>
							<li class="menu" id="liCadastro3">	
								<a href="javascript:void(0)" onclick="link('generic3.html','liCadastro3')">
									<i class="far fa-plus-square"></i>
									generic3
								</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#listSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
							<i class="fas fa-book-open"></i>
							<span> Listagem </span>
						</a>
						<ul class="collapse list-unstyled" id="listSubMenu">
							<li  class="menu" id="liListagem1">
								<a href="javascript:void(0)" onclick="link('modulos/usuarios/fragment/listagemUsuario.fragment.php','liListagem1')">
									<i class="fas fa-table"></i>
									<span>Listagem Usuário</span>
								</a>
							</li>

						</ul>
					</li>
					<li class="">
						<a href="javascript:void(0)" onclick="login.logout()">
							<i class="fas fa-sign-out-alt"></i>
							<span> Sair </span>
						</a>

					</li>
				</ul>

			</nav>