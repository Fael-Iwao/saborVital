<?php
	session_start();
	require_once('../../properties.bd.php');
	$email = $_POST['login']; 
	// $email = 'rafael.iwao@gmail.com'; 
	$password = $_POST['pwd'];
	// $password = '123';

	$sql = "SELECT codUser, name, accessLevel, userName, situation, blocked FROM saborVital.CA_USER WHERE email = '". $email ."' AND password = '".$password."'";
	// echo $sql;

	$result = mysqli_query($connection, $sql);
	
	if($result->num_rows > 0){
		$row = mysqli_fetch_array($result);

		// verify situation
		if ($row['situation'] == 'D') {
			echo '{"success":false, "message": "Usuario Desabilitado"}';
	 		exit;
		}

		if ($row['blocked'] == 'T') {
			echo '{"success":false, "message": "Usuario Bloqueado. Entre em contato com o Administrador do sistema."}';
	 		exit;
		}

		$sql1 = "UPDATE saborVital.CA_USER SET lastAccess = CURRENT_TIMESTAMP WHERE codUser =".$row['codUser'];
		
		$result1 = mysqli_query($connection, $sql1);
		if ($result1) {

			$sql2 = "INSERT INTO saborVital.LOG_USER_LOGIN (user, stampLogin) VALUES ('".$row['codUser']."', CURRENT_TIMESTAMP)";
			$result2 = mysqli_query($connection, $sql2);

			if ($result2) {
				echo '{"success": true}';
			}else{
				echo '{"success": true, "message": "stamp login not safe"}';
			}
		}else{
			echo '{"success": true, "message": "logs not safe"}';
		}
		
		$_SESSION['name'] = $row['name'];
		$_SESSION['accessLevel'] = $row['accessLevel'];
		$_SESSION['userName'] = $row['userName'];
		
		
	}else{
	 	echo '{"success":false, "message": "Login ou senha errados"}';
	}

	mysqli_close();
	exit;

?>