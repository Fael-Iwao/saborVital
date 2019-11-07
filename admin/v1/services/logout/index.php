<?php
	require_once('../../properties.php');
	// session_start();
	if ($_POST['logout']) {
		session_destroy();
		echo '{"success": true}';
	}
	


?>