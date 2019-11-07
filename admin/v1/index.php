<?php
	session_start();
	if (!isset($_SESSION['name'])) {
		header('Location: login.php');
    	exit;
	}
	require_once('properties.php');
	include_once('include/header.inc.php');
	include_once('include/sidebar.inc.php');
?>
	<!-- Page Content  -->
			<div id="content" class="bg-cinza-escuro">
				<iframe id="content-frame" src="pages/homepage.fragment.php" name="content-frame" frameborder="0" noresize="noresize"></iframe>
				<div class=" m-0 ">
					<h4 class="text-white text-center">
						Copyright - Sabor Vital
					</h4>
				</div>
			</div>
			<!-- important não remover esse /div -->
		</div>


<?php 
	include_once('include/bottom.inc.php');

?>

		

